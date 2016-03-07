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
     * {@inheritdoc}
     */
    public function all()
    {

        // Get all hosts from Rancher API
        $hosts = $this->client->get("hosts");

        // Decode the json response
        $hosts = json_decode($hosts);

        // Convert to HostEntity
        return array_map(function ($host) {
            return new HostEntity($host);
        }, $hosts->data);

    }

    /**
     * {@inheritdoc}
     */
    public function get($id)
    {

        // Get the host
        $host = $this->client->get("hosts/$id");

        // Parse json response
        $host = json_decode($host);

        // Instantiate new HostEntity with response
        return new HostEntity($host);

    }

    /**
     * {@inheritdoc}
     */
    public function activate($id)
    {

        // Send "activate" host request
        $host = $this->client->post("hosts/$id", [
            'action' => 'activate'
        ]);

        // Parse response
        $host = json_decode($host);

        // Instantiate HostEntity with response
        return new HostEntity($host);

    }

    /**
     * {@inheritdoc}
     */
    public function deactivate($id)
    {

        // Send "deactivate" host request
        $host = $this->client->post("hosts/$id", [
            'action' => 'deactivate'
        ]);

        // Parse response
        $host = json_decode($host);

        // Create HostEntity from response
        return new HostEntity($host);

    }

}