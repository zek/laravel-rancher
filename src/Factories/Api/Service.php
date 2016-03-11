<?php

namespace Benmag\Rancher\Factories\Api;

use Benmag\Rancher\Factories\Entity\Service as ServiceEntity;

/**
 * Rancher API wrapper for Laravel
 *
 * @package  Rancher
 * @author   @benmagg
 */
class Service extends AbstractApi implements \Benmag\Rancher\Contracts\Api\Service
{

    /**
     * The class of the entity we are working with
     *
     * @var Container
     */
    protected $class = ServiceEntity::class;

    /**
     * The Rancher API endpoint of the resource type.
     *
     * @var string
     */
    protected $endpoint = "services";


    /**
     * {@inheritdoc}
     */
    public function create(ServiceEntity $service)
    {

        // Send "create" service request
        $project = $this->client->post($this->endpoint, $service->toArray(), ['content_type' => 'json']);

        // Parse response
        $project = json_decode($project);

        // Create ContainerEntity from response
        return new ServiceEntity($project);

    }

    /**
     * {@inheritdoc}
     */
    public function update($id, array $data)
    {

        // Send "update" environment request
        $data = $this->client->put($this->endpoint."/".$id, $data);

        // Parse response
        $data = json_decode($data);

        // Create ContainerEntity from response
        return new ServiceEntity($data);

    }


    /**
     * {@inheritdoc}
     */
    public function delete($id)
    {

        // Send "update" environment request
        $environment = $this->client->delete($this->endpoint."/".$id);

        // Parse response
        $environment = json_decode($environment);

        // Create ContainerEntity from response
        return new EnvironmentEntity($environment);

    }


    /**
     * {@inheritdoc}
     */
    public function activate($id)
    {

        // Send "activate" host request
        $service = $this->client->post($this->endpoint . "/" . $id, [
            'action' => 'activate'
        ]);

        // Parse response
        $service = json_decode($service);

        // Instantiate HostEntity with response
        return new ServiceEntity($service);

    }

    /**
     * {@inheritdoc}
     */
    public function deactivate($id)
    {

        // Send "deactivate" host request
        $service = $this->client->post($this->endpoint . "/" . $id, [
            'action' => 'deactivate'
        ]);

        // Parse response
        $service = json_decode($service);

        // Create HostEntity from response
        return new ServiceEntity($service);

    }


    /**
     * {@inheritdoc}
     */
    public function setServiceLink($id, array $data)
    {

        // Add `action` param to data before sending
        $data = array_merge(['action' => 'setservicelinks'], $data);

        // Send "setservicelinks" request
        $service = $this->client->post($this->endpoint . "/" . $id, $data, ['debug' => true]);

        // Parse response
        $service = json_decode($service);

        // Create HostEntity from response
        return new ServiceEntity($service);

    }

}