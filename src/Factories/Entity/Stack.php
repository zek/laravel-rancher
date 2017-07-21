<?php

namespace Benmag\Rancher\Factories\Entity;

class Stack extends AbstractEntity
{

    /**
     * The unique identifier for the stack
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
     * Account stack belongs to
     *
     * @var string
     */
    public $accountId;

    /**
     * Current state of stack
     *
     * @var string
     */
    public $state;

    /**
     * Current health of stack
     *
     * @var string
     */
    public $healthState;
    
    /**
     * The docker-compose.yml file
     * for the stack
     *
     * @var string
     */
    public $dockerCompose;

    /**
     * The rancher-compose.yml file
     * for the stack.
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

    /**
     * @var boolean
     */
    public $system = false;

}