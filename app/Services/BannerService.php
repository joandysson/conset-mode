<?php

namespace App\Services;

use App\Models\Banner;
use Ramsey\Uuid\Uuid;


class BannerService {

    private Banner $banner;

    public function __construct() {
        $this->banner = new Banner();
    }

    public function getByBannertId(string $shorId)
    {
        $banner = $this->banner->getByBannertId($shorId);

        $this->banner->update($banner['id'], [
            'views' => $this->banner->getByBannertId($shorId)['views'] + 1,
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        $banner['config'] = json_decode($banner['config'], true);

        return $banner;
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


    private function createRandomString(int $length, $quantity = 1): array
    {
        $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $random = '';
        $results = [];
        $charsLength = strlen($chars);

        for ($ix = 0; $ix < $quantity; $ix++) {
            for ($i = 0; $i < $length; $i++) {
                $random .= $chars[rand(0, $charsLength - 1)];
            }

            $results[] = $random;
            $random = '';
        }


        return $results;
    }
}
