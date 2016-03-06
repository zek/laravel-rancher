<?php

namespace Benmag\Rancher\Contracts;

/**
 * Rancher API wrapper for Laravel
 *
 * @package  Rancher
 * @author   @benmagg
 */
interface ClientInterface {

    /**
     * @param       $endPoint
     * @param array $options
     *
     * @return mixed
     */
    public function get($endPoint, array $options = []);

}