<?php

namespace Benmag\Rancher\Factories\Entity;

class Service extends AbstractEntity
{

    /**
     * The unique identifier for the host
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
     * The identifier of the Environment
     * the service belongs to
     *
     * @var string
     */
    protected $environmentId;

    /**
     * The number of containers to deploy
     * as part of a service
     *
     * @var integer
     */
    protected $scale;

    /**
     * Current state of container
     *
     * @var string
     */
    protected $state;

    /**
     * The Docker run configuration of a container
     *
     * @var object
     */
    protected $launchConfig;

}