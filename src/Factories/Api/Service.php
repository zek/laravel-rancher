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
        $project = $this->client->post($this->getEndpoint(), $service->toArray(), ['content_type' => 'json']);

        // Parse response
        $project = json_decode($project);

        // Create ContainerEntity from response
        return new ServiceEntity($project);

    }

    /**
     * {@inheritdoc}
     */
    public function update($id, array $serviceEntity)
    {

        // Send "update" environment request
        $service = $this->client->put($this->getEndpoint()."/".$id, $serviceEntity, ['content_type' => 'json']);

        // Parse response
        $service = json_decode($service);

        // Create ContainerEntity from response
        return new ServiceEntity($service);

    }


    /**
     * {@inheritdoc}
     */
    public function delete($id)
    {

        // Send "update" environment request
        $environment = $this->client->delete($this->getEndpoint()."/".$id);

        // Parse response
        $environment = json_decode($environment);

        // Create ContainerEntity from response
        return new ServiceEntity($environment);

    }


    /**
     * {@inheritdoc}
     */
    public function activate($id)
    {

        // Send "activate" service request
        $service = $this->client->post($this->getEndpoint() . "/" . $id, [
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

        // Send "deactivate" service request
        $service = $this->client->post($this->getEndpoint() . "/" . $id, [
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
    public function restart($id)
    {
        // Prepare data for submission
        $data = [
            'rollingRestartStrategy' => []
        ];

        // Send "restart" service request
        $service = $this->client->post($this->getEndpoint() . "/" . $id . "?action=restart", $data, ['content_type' => 'json']);

        // Parse response
        $service = json_decode($service);

        // Create HostEntity from response
        return new ServiceEntity($service);

    }

    /**
     * {@inheritdoc}
     */
    public function addServiceLink($id, array $serviceLink)
    {

        // Prepare data for submission
        $serviceLink = ['serviceLink' => $serviceLink];

        // Send "addservicelink" request
        $service = $this->client->post($this->getEndpoint() . "/" . $id."?action=addservicelink", $serviceLink, ['content_type' => 'json']);

        // Parse response
        $service = json_decode($service);

        // Create HostEntity from response
        return new ServiceEntity($service);
    }

    /**
     * {@inheritdoc}
     */
    public function setServiceLinks($id, array $serviceLinks)
    {

        // Prepare data for submission
        $serviceLinks = ['serviceLinks' => $serviceLinks];

        // Send "setservicelinks" request
        $service = $this->client->post($this->getEndpoint() . "/" . $id."?action=setservicelinks", $serviceLinks, ['content_type' => 'json']);

        // Parse response
        $service = json_decode($service);

        // Create HostEntity from response
        return new ServiceEntity($service);

    }

    /**
     * {@inheritdoc}
     */
    public function removeServiceLink($id, array $serviceLink)
    {

        // Prepare data for submission
        $serviceLink = ['serviceLink' => $serviceLink];

        // Send "removeservicelink" request
        $service = $this->client->post($this->getEndpoint() . "/" . $id."?action=removeservicelink", $serviceLink, ['content_type' => 'json']);

        // Parse response
        $service = json_decode($service);

        // Create HostEntity from response
        return new ServiceEntity($service);

    }




    /**
     * {@inheritdoc}
     */
    public function upgrade($id, array $serviceUpgrade)
    {

        // Send upgrade request
        $service = $this->client->post($this->getEndpoint() . "/" . $id."?action=upgrade", $serviceUpgrade, ['content_type' => 'json']);

        // Parse response
        $service = json_decode($service);

        // Create HostEntity from response
        return new ServiceEntity($service);

    }

    /**
     * {@inheritdoc}
     */
    public function finishUpgrade($id)
    {

        // Send finish upgrade request
        $service = $this->client->post($this->getEndpoint() . "/" . $id, [
            'action' => 'finishupgrade'
        ]);

        // Parse response
        $service = json_decode($service);

        // Create HostEntity from response
        return new ServiceEntity($service);

    }

    /**
     * {@inheritdoc}
     */
    public function cancelUpgrade($id)
    {

        // Send cancel upgrade request
        $service = $this->client->post($this->getEndpoint() . "/" . $id, [
            'action' => 'cancelupgrade'
        ]);

        // Parse response
        $service = json_decode($service);

        // Create HostEntity from response
        return new ServiceEntity($service);

    }

    /**
     * {@inheritdoc}
     */
    public function rollback($id)
    {

        // Send cancel upgrade request
        $service = $this->client->post($this->getEndpoint() . "/" . $id, [
            'action' => 'rollback'
        ]);

        // Parse response
        $service = json_decode($service);

        // Create HostEntity from response
        return new ServiceEntity($service);

    }

    /**
     * {@inheritdoc}
     */
    public function cancelRollback($id)
    {

        // Send cancel upgrade request
        $service = $this->client->post($this->getEndpoint() . "/" . $id, [
            'action' => 'cancelrollback'
        ]);

        // Parse response
        $service = json_decode($service);

        // Create HostEntity from response
        return new ServiceEntity($service);

    }

}