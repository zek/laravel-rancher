<?php

namespace Benmag\Rancher\Factories\Api;

use \Benmag\Rancher\Factories\Entity\Project as ProjectEntity;

/**
 * Rancher API wrapper for Laravel
 *
 * @package  Rancher
 * @author   @benmagg
 */
class Project extends AbstractApi implements \Benmag\Rancher\Contracts\Api\Project
{

    /**
     * The class of the entity we are working with
     *
     * @var Container
     */
    protected $class = ProjectEntity::class;

    /**
     * The Rancher API endpoint of the resource type.
     *
     * @var string
     */
    protected $endpoint = "projects";
    
}