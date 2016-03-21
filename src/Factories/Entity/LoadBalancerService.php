<?php

namespace Benmag\Rancher\Factories\Entity;

class LoadBalancerService extends AbstractEntity
{

    /**
     * The unique identifier for the load balancer service
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
     * @var string
     */
    public $state;

}