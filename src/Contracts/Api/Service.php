<?php

namespace Benmag\Rancher\Contracts\Api;

/**
 * A "Service" is one or more containers created
 * from the same Docker image.
 *
 * When a "Service" is linked to another service within the same stack,
 * a DNS record mapped to each container instance is automatically
 * created and discoverable by containers from the "consuming" service.
 *
 * @package  Rancher
 * @author   @benmagg
 */
interface Service {

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
     * @param \Benmag\Rancher\Factories\Entity\Service $service
     * @return \Benmag\Rancher\Factories\Entity\Service
     */
    public function create(\Benmag\Rancher\Factories\Entity\Service $service);


    /**
     * Send update request to API
     *
     * @param $id
     * @param \Benmag\Rancher\Factories\Entity\Service $service
     * @return \Benmag\Rancher\Factories\Entity\Container
     */
    public function update($id, \Benmag\Rancher\Factories\Entity\Service $service);



    /**
     * Activate a service
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\Service
     */
    public function activate($id);

    /**
     * Deactivate a service
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\Service
     */
    public function deactivate($id);

    /**
     * Restart a service
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\Service
     */
    public function restart($id);


    /**
     * Add a service link
     *
     * @param $id
     * @param array $serviceLink
     * @return \Benmag\Rancher\Factories\Entity\Service
     */
    public function addServiceLink($id, array $serviceLink);

    /**
     * Set service links for the service
     *
     * @param $id
     * @param array $serviceLinks
     * @return \Benmag\Rancher\Factories\Entity\Service
     */
    public function setServiceLinks($id, array $serviceLinks);

    /**
     * Remove a service link from the service
     *
     * @param $id
     * @param array $serviceLink
     * @return \Benmag\Rancher\Factories\Entity\Service
     */
    public function removeServiceLink($id, array $serviceLink);



    /**
     * Trigger a Service upgrade
     *
     * @param $id
     * @param array $serviceUpgrade
     * @return \Benmag\Rancher\Factories\Entity\Service
     */
    public function upgrade($id, array $serviceUpgrade);

    /**
     * Finish the Service upgrade
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\Service
     */
    public function finishUpgrade($id);

    /**
     * Cancel the Service upgrade
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\Service
     */
    public function cancelUpgrade($id);

    /**
     * Rollback an upgrade that hasn't been
     * marked as finished
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\Service
     */
    public function rollback($id);

    /**
     * Cancel the rollback command
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\Service
     */
    public function cancelRollback($id);
}