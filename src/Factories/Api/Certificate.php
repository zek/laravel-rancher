<?php

namespace Benmag\Rancher\Factories\Api;

use Benmag\Rancher\Factories\Entity\Certificate as CertificateEntity;

/**
 * Rancher API wrapper for Laravel
 *
 * @package  Rancher
 * @author   @benmagg
 */
class Certificate extends AbstractApi implements \Benmag\Rancher\Contracts\Api\Certificate
{

    /**
     * The class of the entity we are working with
     *
     * @var CertificateEntity
     */
    protected $class = CertificateEntity::class;

    /**
     * The Rancher API endpoint of the resource type.
     *
     * @var string
     */
    protected $endpoint = "certificates";

    /**
     * {@inheritdoc}
     */
    public function create(CertificateEntity $certificate)
    {

        // Data
        $data = $certificate->toArray();

        // Send "create" request
        $certificate = $this->client->post($this->getEndpoint(), $data, ['content_type' => 'json']);

        // Parse response
        $certificate = json_decode($certificate);

        // Create CertificateEntity from response
        return new CertificateEntity($certificate);

    }

    /**
     * {@inheritdoc}
     */
    public function update($id, CertificateEntity $certificate)
    {

        // Send "update" environment request
        $certificate = $this->client->put($this->getEndpoint() . "/" . $id, $certificate->toArray());

        // Parse response
        $certificate = json_decode($certificate);

        // Create CertificateEntity from response
        return new CertificateEntity($certificate);

    }

    /**
     * {@inheritdoc}
     */
    public function delete($id)
    {

        // Send delete request
        $certificate = $this->client->delete($this->getEndpoint()."/".$id);

        // Parse response
        $certificate = json_decode($certificate);

        // Create CertificateEntity from response
        return new CertificateEntity($certificate);

    }
}