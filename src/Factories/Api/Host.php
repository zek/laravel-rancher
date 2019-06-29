<?php

namespace Benmag\Rancher\Factories\Api;

use Benmag\Rancher\Factories\Entity\Host as HostEntity;

/**
 * Rancher API wrapper for Laravel
 *
 * @package  Rancher
 * @author   @benmagg
 */
class Host extends AbstractApi implements \Benmag\Rancher\Contracts\Api\Host
{

    /**
     * The class of the entity we are working with
     *
     * @var HostEntity
     */
    protected $class = HostEntity::class;

    /**
     * The Rancher API endpoint of the resource type.
     *
     * @var string
     */
    protected $endpoint = "hosts";

    /**
     * {@inheritdoc}
     */
    public function create(HostEntity $host)
    {

        // Data
        $data = $host->toArray();

        // Send "create" request
        $host = $this->client->post($this->getEndpoint(), $data, ['content_type' => 'json']);

        // Parse response
        $host = json_decode($host);

        // Create ContainerEntity from response
        return new HostEntity($host);

    }

    /**
     * {@inheritdoc}
     */
    public function update($id, HostEntity $host)
    {

        // Strip empty values
        $data = array_filter($host->toArray());

        // Send "update" environment request
        $host = $this->client->put($this->getEndpoint() . "/" . $id, $data, ['content_type' => 'json']);

        // Parse response
        $host = json_decode($host);

        // Create ContainerEntity from response
        return new HostEntity($host);

    }

    /**
     * {@inheritdoc}
     */
    public function delete($id)
    {

        // Send delete request
        $machine = $this->client->delete($this->getEndpoint()."/".$id);

        // Parse response
        $machine = json_decode($machine);

        // Create ContainerEntity from response
        return new HostEntity($machine);

    }

    /**
     * {@inheritdoc}
     */
    public function activate($id)
    {

        // Send "activate" host request
        $host = $this->client->post($this->getEndpoint() . "/" . $id, [
            'action' => 'activate'
        ]);

        // Parse response
        $host = json_decode($host);

        // Instantiate HostEntity with response
        return new HostEntity($host);

    }

    /**
     * {@inheritdoc}
     */
    public function deactivate($id)
    {

        // Send "deactivate" host request
        $host = $this->client->post($this->getEndpoint() . "/" . $id, [
            'action' => 'deactivate'
        ]);

        // Parse response
        $host = json_decode($host);

        // Create HostEntity from response
        return new HostEntity($host);

    }

    /**
     * {@inheritdoc}
     */
    public function evacuate($id)
    {

        // Send "remove" host request
        $host = $this->client->post($this->getEndpoint() . "/" . $id, [
            'action' => 'evacuate'
        ]);

        // Parse response
        $host = json_decode($host);

        // Create HostEntity from response
        return new HostEntity($host);

    }

    /**
     * {@inheritdoc}
     */
    public function remove($id)
    {

        // Send "remove" host request
        $host = $this->client->post($this->getEndpoint() . "/" . $id, [
            'action' => 'remove'
        ]);

        // Parse response
        $host = json_decode($host);

        // Create HostEntity from response
        return new HostEntity($host);

    }

}
