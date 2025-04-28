<?php

namespace App\Services;

use App\Models\Banner;
use App\Repository\AnalyticsEventRepository;
use Ramsey\Uuid\Uuid;
use Handlebars\Handlebars;
use Handlebars\Template;
use Handlebars\Context;
use Handlebars\Loader\StringLoader;
use Throwable;


class BannerService {

    private Banner $banner;
    private AnalyticsEventRepository $analyticsEventRepository;

    public function __construct() {
        $this->banner = new Banner();
        $this->analyticsEventRepository = new AnalyticsEventRepository();
    }

    public function getByBannertId(string $bannerId): ?array
    {
        $banner = $this->banner->getByBannertId($bannerId);

        $banner['config'] = json_decode($banner['config'], true);

        return $banner ?? null;
    }

    public function incrementBannerViews($banner) : void {
       $this->banner->update($banner['id'], [
            'views' => $banner['views'] + 1,
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }

    private function loadHandlebars(): Handlebars
    {
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

        return $handlebars;
    }

    private function sendEventToAnalytics($banner): void
    {
        $this->analyticsEventRepository->sendEventToAnalytics(
            $banner['id'],
            'banner_view',
            [
                'banner_id' => $banner['banner_id'],
                'template' => $banner['template'],
                'referrer' => $_SERVER['HTTP_REFERER'] ?? null,
            ]
        );
    }

    public function getConfiguredBanner(string $bannerId): array
    {
        $banner = $this->banner->getByBannertId($bannerId);
        $this->incrementBannerViews($banner);
        $this->sendEventToAnalytics($banner);
        $handlebars = $this->loadHandlebars();

        $fileContents = [];
        foreach ($banner['config'] as $key => $value) {
            $dir = dirname(__DIR__, 2) . "/public/assets/templates/{$banner['template']}/{$key}";
            $content = file_get_contents($dir);

            if($key === 'html') {
                $fileContents[$key] = $handlebars->render($content, $banner['config'][$key]);
                continue;
            }

            $fileContents[$key] = $this->renderTemplate($content, $value);
        }

        return $fileContents;
    }

    public function create(array $data): array
    {
        $date = date('Y-m-d H:i:s');

        return $this->banner->create([
            'banner_id' => Uuid::uuid7(),
            'template' => $data['template'],
            'config' => json_encode($data['config']),
            'views' => 0,
            'created_at' => $date,
            'updated_at' => $date
        ]);
    }

    public function deleteByShortId(string $shortId)
    {
        $this->banner->deleteByShortId($shortId);
    }

    public function addAccessInRedirect(array $short)
    {
        $quantity = ($short['quantity'] ?? 0) + 1;

        $this->banner->update($short['id'], [
            'quantity' => $quantity,
            'updated_at' => date('Y-m-d H:i:s')
        ]);
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
