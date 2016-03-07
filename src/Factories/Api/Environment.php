<?php

namespace Benmag\Rancher\Factories\Api;

use Benmag\Rancher\Factories\Entity\Environment as EnvironmentEntity;

/**
 * Rancher API wrapper for Laravel
 *
 * @package  Rancher
 * @author   @benmagg
 */
class Environment extends AbstractApi implements \Benmag\Rancher\Contracts\Api\Environment
{

    /**
     * The class of the entity we are working with
     *
     * @var Container
     */
    protected $class = EnvironmentEntity::class;

    /**
     * The Rancher API endpoint of the resource type.
     *
     * @var string
     */
    protected $endpoint = "environments";


}