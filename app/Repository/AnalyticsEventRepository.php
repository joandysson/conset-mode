<?php

namespace App\Repository;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class AnalyticsEventRepository
{
    private Client $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function sendEventToAnalytics(string $clientId, string $eventName, array $params): void
    {
        if (getenv('APP_STAGE') !== 'prod') {
            return;
        }

        $url = sprintf(
            '%s?measurement_id=%s&api_secret=%s',
            getenv('GOOGLE_ANALYTICS_URL'),
            getenv('GOOGLE_ANALYTICS_MEASUREMENT_ID'),
            getenv('GOOGLE_ANALYTICS_SECRET_API')
        );

        $data = [
            'client_id' => $clientId,
            'events' => [
                [
                    'name' => $eventName,
                    'params' => $params
                ]
            ]
        ];

        try {
            $response = $this->client->post($url, [
                'json' => $data,
                'timeout' => 2
            ]);

//            return $response->getStatusCode();
        } catch (RequestException $e) {
//            return $e->hasResponse() ? $e->getResponse()->getStatusCode() : 0;
        }
    }
}
