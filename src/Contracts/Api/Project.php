<?php

namespace Benmag\Rancher\Contracts\Api;

/**
 * A "Project" in the API is the same as an "Environment"
 * in the Rancher UI and Documentation.
 *
 * @package  Rancher
 * @author   @benmagg
 */
interface Project {

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
     * @param \Benmag\Rancher\Factories\Entity\Project $project
     * @return \Benmag\Rancher\Factories\Entity\Project
     */
    public function create(\Benmag\Rancher\Factories\Entity\Project $project);

    /**
     * Send delete request to API
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\Project
     */
    public function delete($id);



    /**
     * Send activate request to API
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\Project
     */
    public function activate($id);

    /**
     * Send deactivate request to API
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\Project
     */
    public function deactivate($id);

    /**
     * Set the members of a Project
     *
     * @param $id
     * @param array[Identity] $members
     * @return \Benmag\Rancher\Factories\Entity\Project
     */
    public function setMembers($id, array $members);

}