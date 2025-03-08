<?php

namespace App\Controllers;

use App\Services\BannerService;
use Throwable;

class HomeController
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

    public function upload(): void
    {
        try {
            $data = $this->bannerService->create();
            $id = $data['banner_id'];
            $uploadsDir = dirname(__DIR__, 2) . "/storage/uploads/$id";
            foreach ($_FILES as $key => $value) {
                if ($value['error'] !== UPLOAD_ERR_OK) {
                    continue;
                }

                if(!is_dir($uploadsDir)) {
                    mkdir($uploadsDir, 0777, true);
                }

                $tmpName = $value['tmp_name'];
                $name = $value['name'];
                move_uploaded_file($tmpName, "$uploadsDir/$name");
            }

            header('Content-Type: application/json');
            http_response_code(201);
            echo json_encode(['id' => $id]);

        } catch (Throwable $th) {
            dd($th->getMessage());
        }
    }


    public function getBanner(array $data): void
    {
        try {
            $directory = dirname(__DIR__, 2) . "/storage/uploads/{$data['id']}";
            $files = array_diff(scandir($directory), array('..', '.'));

            $fileContents = [];
            foreach ($files as $file) {
                $filePath = $directory . '/' . $file;
                $fileContents[$file] = file_get_contents($filePath);
            }

            header('Content-Type: application/json');
            echo json_encode($fileContents);

            exit();

        } catch (Throwable $th) {
            http_response_code(500);
            echo json_encode(['error' => $th->getMessage()]);
        }
    }
}
