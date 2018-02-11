<?php

namespace Benmag\Rancher\Factories\Entity;

class Host extends AbstractEntity
{

    /**
     * The unique identifier for the host
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * The given hostname for the host.
     *
     * @var string
     */
    public $hostname;

    /**
     * Account environment belongs to
     *
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $agentState;

    /**
     * @var string
     */
    public $transitioning;

    /**
     * @var string
     */
    public $transitioningMessage;

    /**
     * @var string
     */
    public $transitioningProgress;

    /**
     * Information about the host
     *
     * @var array
     */
    public $info;

    /**
     * Publicly available endpoints for the host
     *
     * @var array
     */
    public $publicEndpoints;

    /**
     * List of instances on host
     *
     * @var array
     */
    public $instanceIds;

    /**
     * The labels on a host.
     *
     * @var string[]
     */
    public $labels;

    /**
     * @var string
     */
    public $engineInstallUrl = "https://releases.rancher.com/install-docker/1.12.sh";

    /**
     * Configuration for launching
     * a host on hosting provider
     *
     * @var mixed
     */
    public $driver,
        $amazonec2Config,
        $digitaloceanConfig,
        $exoscaleConfig,
        $googleConfig,
        $hypervConfig,
        $openstackConfig,
        $packetConfig,
        $rackspaceConfig,
        $softlayerConfig,
        $ubiquityConfig,
        $virtualboxConfig,
        $vmwarefusionConfig,
        $vmwarevcloudairConfig,
        $vmwarevsphereConfig;

}