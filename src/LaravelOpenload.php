<?php

namespace fajardm\LaravelOpenload;

use GuzzleHttp\Client;

class LaravelOpenload
{
    const API_BASE_URL = 'https://api.openload.co';
    const API_VERSION = 1;

    /**
     * @var string The API login string
     */
    private $login;

    /**
     * @var string The API key string
     */
    private $key;

    /**
     * @var Client The http client
     */
    private $client;

    /**
     * Create a new Skeleton Instance
     */
    public function __construct($login, $key)
    {
        $this->login = $login;
        $this->key = $key;

        $baseUri = self::API_BASE_URL . '/' . self::API_VERSION . '/';

        $this->client = new Client(array(
            'base_uri' => $baseUri
        ));
    }

    public function getAccountInfo()
    {
        $params = $this->getAuthParams();
        $response = $this->processRequest('account/info', $params);

        return $response;
    }

    /**
     * @param $uri
     * @param array $parameters
     * @return \Psr\Http\Message\ResponseInterface
     */
    protected function processRequest($uri, array $parameters)
    {
        return $this->client->get($uri, array(
            'query' => $parameters
        ));
    }

    /**
     * @return array
     */
    public function getAuthParams()
    {
        return array(
            'login' => $this->login,
            'key' => $this->key
        );
    }

}
