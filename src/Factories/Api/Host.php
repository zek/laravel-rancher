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
class Host extends AbstractApi implements \Benmag\Rancher\Contracts\Api\Host
{

    /**
     * The class of the entity we are working with
     *
     * @var Container
     */
    protected $class = HostEntity::class;

    /**
     * The Rancher API endpoint of the resource type.
     *
     * @var string
     */
    protected $endpoint = "hosts";


    /**
     * {@inheritdoc}
     */
    public function activate($id)
    {

        // Send "activate" host request
        $host = $this->client->post($this->endpoint . "/" . $id, [
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