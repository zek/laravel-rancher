<?php

namespace Benmag\Rancher;

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

    public function foo()
    {
        return "Hello World";
    }
}