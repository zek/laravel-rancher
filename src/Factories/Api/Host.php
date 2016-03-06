<?php

namespace Benmag\Rancher\Factories\Api;

use Benmag\Rancher\Factories\Client;
use Benmag\Rancher\Factories\Entity\Host as HostEntity;

/**
 * Rancher API wrapper for Laravel
 *
 * @package  Rancher
 * @author   @benmagg
 */
class Host implements \Benmag\Rancher\Contracts\Api\Host
{

    /**
     * Host constructor. Inject Client.
     *
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Display all hosts.
     *
     * @return HostEntity[]
     */
    public function all()
    {

        // Get all hosts from Rancher API
        $hosts = $this->client->get("hosts");

        // decode json response
        $hosts = json_decode($hosts);

        // Convert to HostEntity
        return array_map(function ($host) {
            return new HostEntity($host);
        }, $hosts->data);

    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return Host
     */
    public function get($id)
    {

        // Get the host
        $host = $this->client->get("hosts/$id");

        // Convert it to HostEntity then return
        return new HostEntity(json_decode($host));

    }

    /**
     * Deactivate host
     */
    public function deactivate()
    {
        // TODO
    }

    /**
     * Update host
     */
    public function update()
    {
        // TODO
    }

}