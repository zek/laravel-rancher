<?php

namespace Benmag\Rancher\Factories\Entity;

class ContainerExec extends AbstractEntity
{

    /**
     * @var bool
     */
    public $attachStdin = true;

    /**
     * @var bool
     */
    public $attachStdout = true;

    /**
     * @var bool
     */
    public $tty = true;

    /**
     * @var array
     */
    public $command;

}