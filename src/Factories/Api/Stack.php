<?php

namespace Benmag\Rancher\Factories\Api;

use Benmag\Rancher\Factories\Entity\Stack as StackEntity;

/**
 * Rancher API wrapper for Laravel
 *
 * @package  Rancher
 * @author   @benmagg
 */
class Stack extends AbstractApi implements \Benmag\Rancher\Contracts\Api\Stack
{

    /**
     * The class of the entity we are working with
     *
     * @var Container
     */
    protected $class = StackEntity::class;

    /**
     * The Rancher API endpoint of the resource type.
     *
     * @var string
     */
    protected $endpoint = "stack";


    /**
     * {@inheritdoc}
     */
    public function create(StackEntity $stack)
    {

        // Strip empty values
        $data = array_filter($stack->toArray());

        // Send "create" stack request
        $stack = $this->client->post($this->getEndpoint(), $data, ['content_type' => 'json']);

        // Parse response
        $stack = json_decode($stack);

        // Create StackEntity from response
        return new StackEntity($stack);

    }

    /**
     * {@inheritdoc}
     */
    public function update($id, StackEntity $stack)
    {

        // Strip empty values
        $data = array_filter($stack->toArray());

        // Send "update" stack request
        $stack = $this->client->put($this->getEndpoint()."/".$id, $data, ['content_type' => 'json']);

        // Parse response
        $stack = json_decode($stack);

        // Create StackEntity from response
        return new StackEntity($stack);

    }

    /**
     * {@inheritdoc}
     */
    public function delete($id)
    {

        // Send "update" stack request
        $stack = $this->client->delete($this->getEndpoint()."/".$id);

        // Parse response
        $stack = json_decode($stack);

        // Create StackEntity from response
        return new StackEntity($stack);

    }




    /**
     * {@inheritdoc}
     */
    public function remove($id)
    {

        // Send "update" stack request
        $stack = $this->client->post($this->getEndpoint()."/".$id, [
            'action' => 'remove'
        ]);

        // Parse response
        $stack = json_decode($stack);

        // Create StackEntity from response
        return new StackEntity($stack);

    }

    /**
     * {@inheritdoc}
     */
    public function activateServices($id)
    {

        // Send "update" stack request
        $stack = $this->client->post($this->getEndpoint()."/".$id, [
            'action' => 'activateservices'
        ]);

        // Parse response
        $stack = json_decode($stack);

        // Create StackEntity from response
        return new StackEntity($stack);

    }

    /**
     * {@inheritdoc}
     */
    public function deactivateServices($id)
    {

        // Send "update" stack request
        $stack = $this->client->post($this->getEndpoint()."/".$id, [
            'action' => 'deactivateservices'
        ]);

        // Parse response
        $stack = json_decode($stack);

        // Create StackEntity from response
        return new StackEntity($stack);

    }

    /**
     * {@inheritdoc}
     */
    public function upgrade($id, \Benmag\Rancher\Factories\Entity\Stack $stack)
    {
        // Strip empty values
        $data = array_merge(array_filter($stack->toArray()), ['action' => 'upgrade']);
        // Send "upgrade" stack request
        $stack = $this->client->post($this->getEndpoint()."/".$id ."/?action=upgrade", $data, ['content_type' => 'json']);
      
        // Parse response
        $stack = json_decode($stack);

        // Create StackEntity from response
        return new StackEntity($stack);
    }

    /**
     * {@inheritdoc}
     */
    public function finishUpgrade($id)
    {
        //
    }

    /**
     * {@inheritdoc}
     */
    public function cancelUpgrade($id)
    {
        //
    }

    /**
     * {@inheritdoc}
     */
    public function rollback($id)
    {
        //
    }

    /**
     * {@inheritdoc}
     */
    public function cancelRollback($id)
    {
        //
    }

}