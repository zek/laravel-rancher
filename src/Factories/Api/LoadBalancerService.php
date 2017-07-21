<?php

namespace Benmag\Rancher\Factories\Api;

use \Benmag\Rancher\Factories\Entity\LoadBalancerService as LoadBalancerServiceEntity;

/**
 * Rancher API wrapper for Laravel
 *
 * @package  Rancher
 * @author   @benmagg
 */
class LoadBalancerService extends AbstractApi implements \Benmag\Rancher\Contracts\Api\LoadBalancerService
{

    /**
     * The class of the entity we are working with
     *
     * @var Container
     */
    protected $class = LoadBalancerServiceEntity::class;

    /**
     * The Rancher API endpoint of the resource type.
     *
     * @var string
     */
    protected $endpoint = "loadbalancerservices";

    /**
     * {@inheritdoc}
     */
    public function create(LoadBalancerServiceEntity $lb)
    {

        // Send "create" project request
        $lb = $this->client->post($this->getEndpoint(), $lb->toArray(), ['content_type' => 'json']);

        // Parse response
        $lb = json_decode($lb);

        // Create ContainerEntity from response
        return new LoadBalancerServiceEntity($lb);

    }

    /**
     * {@inheritdoc}
     */
    public function update($id, LoadBalancerServiceEntity $lb)
    {

        // Strip empty values
        $data = array_filter($lb->toArray());

        // Send "update" environment request
        $lb = $this->client->put($this->getEndpoint()."/".$id, $data, ['content_type' => 'json']);

        // Parse response
        $lb = json_decode($lb);

        // Create ContainerEntity from response
        return new LoadBalancerServiceEntity($lb);

    }

    /**
     * {@inheritdoc}
     */
    public function delete($id)
    {

        // Send "stop" container request
        $lb = $this->client->delete($this->getEndpoint()."/".$id, [], ['auth' => null]);

        // Parse response
        $lb = json_decode($lb);

        // Create ContainerEntity from response
        return new LoadBalancerServiceEntity($lb);

    }


    /**
     * {@inheritdoc}
     */
    public function activate($id)
    {

        // Send "activate" host request
        $lb = $this->client->post($this->getEndpoint() . "/" . $id, [
            'action' => 'activate'
        ]);

        // Parse response
        $lb = json_decode($lb);

        // Instantiate HostEntity with response
        return new LoadBalancerServiceEntity($lb);

    }

    /**
     * {@inheritdoc}
     */
    public function deactivate($id)
    {

        // Send "deactivate" host request
        $lb = $this->client->post($this->getEndpoint() . "/" . $id, [
            'action' => 'deactivate'
        ]);

        // Parse response
        $lb = json_decode($lb);

        // Create HostEntity from response
        return new LoadBalancerServiceEntity($lb);

    }


    /**
     * {@inheritdoc}
     */
    public function addServiceLink($id, array $serviceLink)
    {

        // Prepare data for submission
        $serviceLink = ['serviceLink' => $serviceLink];

        // Send "addservicelink" request
        $lb = $this->client->post($this->getEndpoint() . "/" . $id."?action=addservicelink", $serviceLink, ['content_type' => 'json']);

        // Parse response
        $lb = json_decode($lb);

        // Create HostEntity from response
        return new LoadBalancerServiceEntity($lb);
    }

    /**
     * {@inheritdoc}
     */
    public function setServiceLinks($id, array $serviceLinks)
    {

        // Prepare data for submission
        $serviceLinks = ['serviceLinks' => $serviceLinks];

        // Send "setservicelinks" request
        $lb = $this->client->post($this->getEndpoint() . "/" . $id."?action=setservicelinks", $serviceLinks, ['content_type' => 'json']);

        // Parse response
        $lb = json_decode($lb);

        // Create HostEntity from response
        return new LoadBalancerServiceEntity($lb);

    }

    /**
     * {@inheritdoc}
     */
    public function removeServiceLink($id, array $serviceLink)
    {

        // Prepare data for submission
        $serviceLink = ['serviceLink' => $serviceLink];

        // Send "removeservicelink" request
        $lb = $this->client->post($this->getEndpoint() . "/" . $id."?action=removeservicelink", $serviceLink, ['content_type' => 'json']);

        // Parse response
        $lb = json_decode($lb);

        // Create HostEntity from response
        return new LoadBalancerServiceEntity($lb);

    }

}