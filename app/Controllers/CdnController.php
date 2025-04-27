<?php

namespace App\Controllers;

use App\Services\BannerService;
use Handlebars\Handlebars;
use Handlebars\Template;
use Handlebars\Context;
use Handlebars\Loader\StringLoader;
use Throwable;

class CdnController
{
    private BannerService $bannerService;

    public function __construct()
    {
        $this->bannerService = new BannerService();
    }


    public function index(): void
    {
        view('home');
    }

    public function create($data): void
    {
        try {
            $json = file_get_contents('php://input');
            $requestData = json_decode($json, true);

            $data = $this->bannerService->create($requestData);

            header('Content-Type: application/json');
            http_response_code(201);
            echo json_encode(['id' => $data['banner_id']]);
            exit();
        } catch (\Throwable $th) {
            header('Content-Type: application/json');
            http_response_code(500);
            echo json_encode(['error' => $th->getMessage()]);
            exit();
        }
    }

    public function getBanner(array $data): void
    {
        try {
            $data = $this->bannerService->getByBannertId($data['id']);
            $handlebars = new Handlebars([
                'loader' => new StringLoader(),
            ]);

            $handlebars->addHelper('or', function (Template $template, Context $context, $args, $source) {
                $args = explode(' ', $args);
                $args = array_filter($args, function ($arg) {
                    return !empty($arg);
                });

                $args[0] = $context->get($args[0]);
                $args[1] = $context->get($args[1]);

                $a = !empty($args[0]);
                $b = !empty($args[1]);

                return $a || $b ? $template->render($context) : $template->discard();
            });

            $handlebars->addHelper('and', function ($template, $context, $args, $source) {
                $args = explode(' ', $args);
                $args = array_filter($args, function ($arg) {
                    return !empty($arg);
                });

                $args[0] = $context->get($args[0]);
                $args[1] = $context->get($args[1]);

                $a = !empty($args[0]);
                $b = !empty($args[1]);

                return $a && $b ? $template->render($context) : $template->discard();
            });

            $fileContents = [];
            foreach ($data['config'] as $key => $value) {
                $dir = dirname(__DIR__, 2) . "/public/assets/templates/{$data['template']}/{$key}";
                $content = file_get_contents($dir);

                if($key === 'html') {
                    $fileContents[$key] = $handlebars->render($content, $data['config'][$key]);
                    continue;
                }

                $fileContents[$key] = $this->renderTemplate($content, $value);
            }

            header('Content-Type: application/json');
            echo json_encode($fileContents);
            exit;
        } catch (Throwable $th) {
            http_response_code(500);
            echo json_encode(['error' => $th->getMessage()]);
            exit();
        }
    }


    private function renderTemplate(string $template, array $data): string
    {
        // 1. Substituir blocos {{#if condição}} ... {{/if}}
        $template = preg_replace_callback(
            '/\{\{#if (.*?)\}\}([\s\S]*?)\{\{\/if\}\}/',
            function ($matches) use ($data) {
                $condition = $matches[1];
                $content = $matches[2];

                // Substitui palavras (keys) pela referência $data['key'] se existir
                $condition = preg_replace_callback('/\b(\w+)\b/', function ($m) use ($data) {
                    $key = $m[1];
                    if (array_key_exists($key, $data)) {
                        // Protege com aspas simples, para evitar problemas com chaves numéricas ou especiais
                        return '$data[\'' . $key . '\']';
                    }
                    return $key;
                }, $condition);

                // Avaliar a condição com eval
                try {
                    // Monta código PHP para avaliar a condição
                    $code = 'return ' . $condition . ';';
                    $result = eval($code);
                    if ($result) {
                        return $content;
                    } else {
                        return '';
                    }
                } catch (Throwable $e) {
                    error_log('Erro no IF do template: ' . $e->getMessage());
                    return '';
                }
            },
            $template
        );

        $template = preg_replace_callback(
            '/\{\{(.*?)\}\}/',
            function ($matches) use ($data) {
                $key = trim($matches[1]);
                return array_key_exists($key, $data) ? $data[$key] : '';
            },
            $template
        );

        return $template;
    }
}
