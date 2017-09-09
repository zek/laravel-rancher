<?php

namespace Benmag\Rancher\Contracts\Api;

/**
 * A Host is the most basic unit of resource within Rancher.
 * It represents any Linux server, virtual or physical.
 *
 * @package  Rancher
 * @author   @benmagg
 */
interface Host {


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
     * @param \Benmag\Rancher\Factories\Entity\Host $host
     * @return \Benmag\Rancher\Factories\Entity\Host
     */
    public function create(\Benmag\Rancher\Factories\Entity\Host $host);

    /**
     * Send update host request to API
     *
     * @param $id
     * @param \Benmag\Rancher\Factories\Entity\Host $host
     * @return \Benmag\Rancher\Factories\Entity\Host
     */
    public function update($id, \Benmag\Rancher\Factories\Entity\Host $host);




    /**
     * Activate a host
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\Host
     */
    public function activate($id);

    /**
     * Deactivates a host
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\Host
     */
    public function deactivate($id);

    /**
     * Evacuate a host
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\Host
     */
    public function evacuate($id);

    /**
     * Remove a host
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\Host
     */
    public function remove($id);

}