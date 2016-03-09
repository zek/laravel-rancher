<?php

namespace Benmag\Rancher\Factories\Entity;

class Container extends AbstractEntity
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
     * Containers primary IP address
     *
     * @var string
     */
    protected $primaryIpAddress;

    /**
     * Image container is using
     *
     * @var string
     */
    protected $imageUuid;

    /**
     * Overwrite the default commands set by the image
     *
     * @var array[string]
     */
    protected $command;

    /**
     * Environment variables for container
     *
     * @var map[string]
     */
    protected $environment;

    /**
     * Ports exposed
     *
     * @var array[string]
     */
    protected $ports;

    /**
     * Data volumes for container
     *
     * @var array[string]
     */
    protected $dataVolumes;

    /**
     * Account container belongs to
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
     * Whether or not the services in the stack should be started after creation
     *
     * @var bool
     */
    protected $startOnCreate = true;

    /**
     * Keep STDIN open even if not attached. `-i` in a `docker run` command
     *
     * @var bool
     */
    protected $stdinOpen = true;

    /**
     * Allocate a pseudo-tty. `-t` in a `docker run` command
     *
     * @var bool
     */
    protected $tty = true;

}