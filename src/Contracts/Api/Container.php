<?php

namespace Benmag\Rancher\Contracts\Api;

/**
 * A "Container" is a representation of a Docker container on a Host.
 *
 * @package  Rancher
 * @author   @benmagg
 */
interface Container {

    /**
     * {@inheritdoc}
     */
    public function all();

    /**
     * {@inheritdoc}
     */
    public function get($id);

    /**
     * {@inheritdoc}
     */
    public function filter($params);


    /**
     * Send create request to API
     *
     * @param \Benmag\Rancher\Factories\Entity\Container $container
     * @return \Benmag\Rancher\Factories\Entity\Container
     */
    public function create(\Benmag\Rancher\Factories\Entity\Container $container);

    /**
     * Send start container request to API
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\Container
     */
    public function start($id);

    /**
     * Send a stop container request to API
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\Container
     */
    public function stop($id);

    /**
     * Send restart container request to API
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\Container
     */
    public function restart($id);

    /**
     * Send remove container request to API
     *
     * @param $id
     * @return mixed
     */
    public function remove($id);

    /**
     * Send restore container request to API
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\Container
     */
    public function restore($id);

    /**
     * Send purge container request to API
     *
     * @param $id
     * @return mixed
     */
    public function purge($id);

}