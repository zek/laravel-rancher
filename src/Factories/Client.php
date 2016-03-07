<?php

namespace Benmag\Rancher\Factories;

use GuzzleHttp\Client as HttpClient;

/**
 * Rancher API wrapper for Laravel
 *
 * @package  Rancher
 * @author   @benmagg
 */
class Client implements \Benmag\Rancher\Contracts\Client {

    /**
     * @var HttpClient
     */
    protected $client;

    /**
     * @param $baseUrl
     * @param $accessKey
     * @param $secretKey
     */
    public function __construct($baseUrl, $accessKey, $secretKey)
    {
        $this->client = new HttpClient([
            'base_uri' => $baseUrl,
            'auth' => [$accessKey, $secretKey],
        ]);
    }

    /**
     * @param $endPoint
     * @param array $params
     * @return mixed
     * @throws \Exception
     */
    public function get($endPoint, array $params = [])
    {
        $response = $this->client->get($endPoint, [ 'query' => $params ]);
        switch ($response->getHeader('content-type'))
        {
            case "application/json":
                return $response->json();
                break;
            default:
                return $response->getBody()->getContents();
        }
    }

    /**
     * @param $endPoint
     * @param array $params
     * @return string
     * @throws \Exception
     */
    public function post($endPoint, array $params = [])
    {
        $response = $this->client->post($endPoint, [ 'query' => $params ]);
        switch ($response->getHeader('content-type'))
        {
            case "application/json":
                return $response->json();
                break;
            default:
                return $response->getBody()->getContents();
        }
    }

}