<?php

namespace Benmag\Rancher\Factories\Entity;

class Container extends AbstractEntity
{

    /**
     * The unique identifier for the container
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * Containers primary IP address
     *
     * @var string
     */
    public $primaryIpAddress;

    /**
     * Image container is using
     *
     * @var string
     */
    public $imageUuid;

    /**
     * Overwrite the default commands set by the image
     *
     * @var array[string]
     */
    public $command;

    /**
     * Environment variables for container
     *
     * @var map[string]
     */
    public $environment;

    /**
     * Ports exposed
     *
     * @var array[string]
     */
    public $ports;

    /**
     * Ports exposed by user
     *
     * @var array[string]
     */
    public $userPorts;

    /**
     * Data volumes for container
     *
     * @var array[string]
     */
    public $dataVolumes;

    /**
     * The host the container is on
     *
     * @var string
     */
    public $hostId;

    /**
     * Account container belongs to
     *
     * @var string
     */
    public $accountId;

    /**
     * The unique Docker ID
     *
     * @var string
     */
    public $externalId;

    /**
     * Current state of container
     *
     * @var string
     */
    public $state;

    /**
     * Whether or not the services in the stack should be started after creation
     *
     * @var bool
     */
    public $startOnCreate = true;

    /**
     * Keep STDIN open even if not attached. `-i` in a `docker run` command
     *
     * @var bool
     */
    public $stdinOpen = true;

    /**
     * Allocate a pseudo-tty. `-t` in a `docker run` command
     *
     * @var bool
     */
    public $tty = true;

    /**
     * The time the container was first running
     *
     * @var string
     */
    public $firstRunning;

}