<?php

namespace Benmag\Rancher\Factories\Entity;

class Service extends AbstractEntity
{

    /**
     * The unique identifier for the host
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
     * The identifier of the Stack the service belongs to
     *
     * @var string
     */
    public $stackId;

    /**
     * Image container is using
     *
     * @var string
     */
    public $imageUuid;

    /**
     * The number of containers to deploy
     * as part of a service
     *
     * @var integer
     */
    public $scale = 1;

    /**
     * Start the service once it's created
     *
     * @var string
     */
    public $startOnCreate;

    /**
     * Current state of container
     *
     * @var string
     */
    public $state;

    /**
     * The Docker run configuration of a container
     *
     * @var object
     */
    public $launchConfig;

    /**
     * Services that have been linked to this service
     *
     * @var object
     */
    public $linkedServices;

    /**
     * The fqdn of a service when the DNS service has started.
     *
     * @var string
     */
    public $fqdn;

    /**
     * Public endpoints of the service
     *
     * @var string
     */
    public $publicEndpoints;

    /**
     * Health state of the service
     *
     * @var string
     */
    public $healthState;

    /**
     * Service transitioning state
     *
     * @var string
     */
    public $transitioning;

    /**
     * Service transitioning message
     *
     * @var string
     */
    public $transitioningMessage;

    /**
     * Service transitioning progress
     *
     * @var string
     */
    public $transitioningProgress;

    /**
     * List of instances for the service
     *
     * @var array
     */
    public $instanceIds;

}