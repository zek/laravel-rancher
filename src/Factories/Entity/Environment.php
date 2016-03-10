<?php

namespace Benmag\Rancher\Factories\Entity;

class Environment extends AbstractEntity
{

    /**
     * The unique identifier for the environment
     *
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $description;

    /**
     * Account environment belongs to
     *
     * @var string
     */
    protected $accountId;

    /**
     * Current state of container
     *
     * @var string
     */
    protected $state;

    /**
     * The docker-compose.yml file
     * for the Environment
     *
     * @var string
     */
    protected $dockerCompose;

    /**
     * The rancher-compose.yml file
     * for the Environment.
     *
     * @var string
     */
    protected $rancherCompose;

    /**
     * Environment variables
     *
     * @var map[string]
     */
    protected $environment;

    /**
     * Whether or not the services in the stack should be started after creation
     *
     * @var bool
     */
    protected $startOnCreate = true;

}