<?php

namespace Benmag\Rancher\Contracts\Api;

/**
 * A certificate is used to add in SSL termination to load balancers.
 *
 * @package  Rancher
 * @author   @benmagg
 */
interface Certificate {


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
     * Create a certificate
     *
     * @param \Benmag\Rancher\Factories\Entity\Certificate $certificate
     * @return \Benmag\Rancher\Factories\Entity\Certificate
     */
    public function create(\Benmag\Rancher\Factories\Entity\Certificate $certificate);

    /**
     * Update a certificate
     *
     * @param $id
     * @param \Benmag\Rancher\Factories\Entity\Certificate $certificate
     * @return \Benmag\Rancher\Factories\Entity\Certificate
     */
    public function update($id, \Benmag\Rancher\Factories\Entity\Certificate $certificate);

    /**
     * DeleDe a certificate
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\Certificate
     */
    public function delete($id);

}