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

    /**
     * {@inheritdoc}
     */
    public function filter($params);

    /**
     * Send create request to API
     *
     * @param \Benmag\Rancher\Factories\Entity\Environment $environment
     * @return \Benmag\Rancher\Factories\Entity\Environment
     */
    public function create(\Benmag\Rancher\Factories\Entity\Environment $environment);

    public function update($id, \Benmag\Rancher\Factories\Entity\Environment $environment);

    public function delete($id);


    /**
     * Remove the environment
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\Environment
     */
    public function remove($id);

    /**
     * Activate services within an Environment (aka Stack)
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\Environment
     */
    public function activateServices($id);

    /**
     * Deactivate services within an Environment
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\Environment
     */
    public function deactivateServices($id);

    /**
     * Trigger an Environment upgrade
     *
     * @param $id
     * @param \Benmag\Rancher\Factories\Entity\Environment $environment
     * @return \Benmag\Rancher\Factories\Entity\Environment
     */
    public function upgrade($id, \Benmag\Rancher\Factories\Entity\Environment $environment);

    /**
     * Finish the Environment upgrade
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\Environment
     */
    public function finishUpgrade($id);

    /**
     * Cancel the Environment upgrade
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\Environment
     */
    public function cancelUpgrade($id);

    /**
     * Rollback an upgrade that hasn't been
     * marked as finished
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\Environment
     */
    public function rollback($id);

    /**
     * Cancel the rollback command
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\Environment
     */
    public function cancelRollback($id);

}