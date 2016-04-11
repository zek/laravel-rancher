<?php

namespace Benmag\Rancher\Contracts\Api;

/**
 * Rancher implements a managed load balancer using HAProxy
 * that can be manually scaled to multiple hosts.
 *
 * @package  Rancher
 * @author   @benmagg
 */
interface LoadBalancerService {

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
     * @param \Benmag\Rancher\Factories\Entity\LoadBalancerService $lb
     * @return \Benmag\Rancher\Factories\Entity\LoadBalancerService
     */
    public function create(\Benmag\Rancher\Factories\Entity\LoadBalancerService $lb);

    /**
     * Send update load balancer service request to API
     *
     * @param $id
     * @param \Benmag\Rancher\Factories\Entity\LoadBalancerService $lb
     * @return \Benmag\Rancher\Factories\Entity\LoadBalancerService
     */
    public function update($id, \Benmag\Rancher\Factories\Entity\LoadBalancerService $lb);

    /**
     * Send delete load balancer service request to API
     *
     * @param $id
     * @return mixed
     */
    public function delete($id);

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


}