<?php

namespace Benmag\Rancher\Factories\Api;

use \Benmag\Rancher\Factories\Entity\Service as ServiceEntity;

/**
 * Rancher API wrapper for Laravel
 *
 * @package  Rancher
 * @author   @benmagg
 */
class Service extends AbstractApi implements \Benmag\Rancher\Contracts\Api\Service
{

    /**
     * The class of the entity we are working with
     *
     * @var Container
     */
    protected $class = ServiceEntity::class;

    /**
     * The Rancher API endpoint of the resource type.
     *
     * @var string
     */
    protected $endpoint = "services";

}