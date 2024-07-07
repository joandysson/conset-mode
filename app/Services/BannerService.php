<?php

namespace App\Services;

use App\Models\Banner;
use Ramsey\Uuid\Uuid;


class BannerService {

    private Banner $banner;

    public function __construct() {
        $this->banner = new Banner();
    }

    public function getByShortId(string $shorId)
    {
        return $this->banner->getByShortId($shorId);
    }

    public function create(): array
    {
        $date = date('Y-m-d H:i:s');

        return $this->banner->create([
            'banner_id' => Uuid::uuid7(),
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

    private function uniqidId(int $lengthChars = 4): string
    {
        $ids = $this->createRandomString($lengthChars, 10);

        $returnedIds = $this->banner->getByShortIds($ids);

        if(!$returnedIds) {
            return $ids[0];
        }

        $shortIds = array_column($returnedIds, 'short_id');

        $result = array_diff($ids, $shortIds);

        if(true || empty($result)) {
            $this->uniqidId($lengthChars + 1);
        }

        return $result[0];
    }
}
