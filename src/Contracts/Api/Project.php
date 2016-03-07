<?php

namespace Benmag\Rancher\Contracts\Api;

/**
 * A "Project" in the API is the same as an "Environment"
 * in the Rancher UI and Documentation.
 *
 * @package  Rancher
 * @author   @benmagg
 */
interface Project {

    /**
     * {@inheritdoc}
     */
    public function all();

    /**
     * {@inheritdoc}
     */
    public function get($id);

}