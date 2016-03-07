<?php

namespace Benmag\Rancher\Contracts\Api;

/**
 * An "environment" in the API is the same as a "Stack"
 * in the Rancher UI and Documentation.
 *
 * An Environment/Stack follows the docker-compose concept.
 * It represents a group of services that make up a typical
 * application or workload.
 *
 * @package  Rancher
 * @author   @benmagg
 */
interface Environment {

    /**
     * {@inheritdoc}
     */
    public function all();

    /**
     * {@inheritdoc}
     */
    public function get($id);

}