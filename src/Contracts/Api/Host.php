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
     * Get all of the hosts.
     *
     * @return \Benmag\Rancher\Factories\Entity\Host[]
     */
    public function all();


    /**
     * Get a specified host.
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\Host
     */
    public function get($id);


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

}