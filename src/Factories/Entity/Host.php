<?php

namespace Benmag\Rancher\Factories\Entity;

class Host extends AbstractEntity
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
     * The given hostname for the host.
     *
     * @var string
     */
    protected $hostname;

    /**
     * @var string
     */
    protected $state;

    /**
     * @var string
     */
    protected $agentState;

}