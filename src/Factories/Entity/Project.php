<?php

namespace Benmag\Rancher\Factories\Entity;

class Project extends AbstractEntity
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
     * @var string
     */
    public $state;

    /**
     * The given hostname for the host.
     *
     * @var array[projectMember]
     */
    public $members;

}