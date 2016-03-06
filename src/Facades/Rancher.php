<?php

namespace Benmag\Rancher\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Rancher API wrapper for Laravel
 *
 * @package  Rancher
 * @author   @benmagg
 */
class Rancher extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Benmag\Rancher\Rancher';
    }

}