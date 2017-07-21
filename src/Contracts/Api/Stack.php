<?php

namespace Benmag\Rancher\Contracts\Api;

/**
 * A Stack follows the docker-compose concept. It represents a
 * group of services that make up a typical application or workload.
 *
 * @package  Rancher
 * @author   @benmagg
 */
interface Stack {

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
     * @param \Benmag\Rancher\Factories\Entity\Stack $stack
     * @return \Benmag\Rancher\Factories\Entity\Stack
     */
    public function create(\Benmag\Rancher\Factories\Entity\Stack $stack);

    public function update($id, \Benmag\Rancher\Factories\Entity\Stack $stack);

    public function delete($id);


    /**
     * Remove the environment
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\Stack
     */
    public function remove($id);

    /**
     * Activate services within an stack
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\Stack
     */
    public function activateServices($id);

    /**
     * Deactivate services within an stack
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\Stack
     */
    public function deactivateServices($id);

    /**
     * Trigger an stack upgrade
     *
     * @param $id
     * @param \Benmag\Rancher\Factories\Entity\Stack $environment
     * @return \Benmag\Rancher\Factories\Entity\Stack
     */
    public function upgrade($id, \Benmag\Rancher\Factories\Entity\Stack $environment);

    /**
     * Finish the stack upgrade
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\Stack
     */
    public function finishUpgrade($id);

    /**
     * Cancel the stack upgrade
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\Stack
     */
    public function cancelUpgrade($id);

    /**
     * Rollback an upgrade that hasn't been
     * marked as finished
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\Stack
     */
    public function rollback($id);

    /**
     * Cancel the rollback command
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\Stack
     */
    public function cancelRollback($id);

}