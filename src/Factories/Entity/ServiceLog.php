<?php

namespace Benmag\Rancher\Factories\Entity;

class ServiceLog extends AbstractEntity
{

    /**
     * The unique identifier for the log
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var object
     */
//    public $data;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $subLog;

    /**
     * @var string
     */
    public $created;

    /**
     * @var string
     */
    public $endTime;

}