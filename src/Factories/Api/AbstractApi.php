<?php

namespace Benmag\Rancher\Factories\Api;

use Benmag\Rancher\Factories\Client;
use Benmag\Rancher\Factories\Entity\Host as HostEntity;
use Benmag\Rancher\Factories\Entity\Container;

/**
 * Rancher API wrapper for Laravel
 *
 * @package  Rancher
 * @author   @benmagg
 */
abstract class AbstractApi
{

    /**
     * Client object
     *
     * @var Client
     */
    protected $client;

    /**
     * Class of the entity.
     *
     * @var string
     */
    protected $class;

    /**
     * The API endpoint for the entity
     *
     * @var string
     */
    protected $endpoint;

    /**
     * Inject API Client
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
        // Get all objects from Rancher API
        $objects = $this->client->get($this->endpoint);

        // Decode the json response
        $objects = json_decode($objects);

        // Convert to entityClass
        return array_map(function ($object) {
            return new $this->class($object);
        }, $objects->data);

    }

    /**
     * {@inheritdoc}
     */
    public function get($id)
    {

        // Get the resource
        $object = $this->client->get($this->endpoint . "/" .$id);

        // Parse json response
        $object = json_decode($object);

        // Instantiate new entityClass
        return new $this->class($object);

    }

}