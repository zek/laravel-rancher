<?php

namespace Benmag\Rancher\Factories\Entity;

class Project extends AbstractEntity
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
     * @var string
     */
    protected $state;

    /**
     * The given hostname for the host.
     *
     * @var array[projectMember]
     */
    protected $members;

}