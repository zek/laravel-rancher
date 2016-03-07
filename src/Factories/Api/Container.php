<?php

namespace Benmag\Rancher\Factories\Api;

use \Benmag\Rancher\Factories\Entity\Container as ContainerEntity;

/**
 * Rancher API wrapper for Laravel
 *
 * @package  Rancher
 * @author   @benmagg
 */
class Container extends AbstractApi implements \Benmag\Rancher\Contracts\Api\Container
{

    /**
     * The class of the entity we are working with
     *
     * @var Container
     */
    protected $class = ContainerEntity::class;

    /**
     * The Rancher API endpoint of the resource type.
     *
     * @var string
     */
    protected $endpoint = "containers";


}