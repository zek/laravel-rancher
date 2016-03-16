<?php

namespace Benmag\Rancher\Factories\Entity;

class Environment extends AbstractEntity
{

    /**
     * The unique identifier for the environment
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * Account environment belongs to
     *
     * @var string
     */
    public $accountId;

    /**
     * Current state of container
     *
     * @var string
     */
    public $state;

    /**
     * The docker-compose.yml file
     * for the Environment
     *
     * @var string
     */
    public $dockerCompose;

    /**
     * The rancher-compose.yml file
     * for the Environment.
     *
     * @var string
     */
    public $rancherCompose;

    /**
     * Environment variables
     *
     * @var map[string]
     */
    public $environment;

    /**
     * Whether or not the services in the stack should be started after creation
     *
     * @var bool
     */
    public $startOnCreate = true;

}