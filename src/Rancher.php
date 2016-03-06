<?php

namespace Benmag\Rancher;
use Benmag\Rancher\Factories\Api\Host;

/**
 * Rancher API wrapper for Laravel
 *
 * @package  Rancher
 * @author   @benmagg
 */
class Rancher {

    protected $client;

    public function __construct(Factories\Client $client)
    {
        $this->client = $client;
    }

    /**
     * @return Factories\Api\Host
     */
    public function host()
    {
        return new Host($this->client);
    }

}