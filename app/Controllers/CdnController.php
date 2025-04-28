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
            $fileContents = $this->bannerService->getConfiguredBanner($data['id']);

            header('Content-Type: application/json');
            echo json_encode($fileContents);
            exit;
        } catch (Throwable $th) {
            http_response_code(500);
            echo json_encode(['error' => $th->getMessage()]);
            exit();
        }
    }
}
