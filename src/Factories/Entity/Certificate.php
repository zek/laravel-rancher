<?php

namespace Benmag\Rancher\Factories\Entity;

class Certificate extends AbstractEntity
{

    /**
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
     * @var string
     */
    public $cert;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $certChain;

    /**
     * @var string
     */
    public $CN;

    /**
     * @var string
     */
    public $algorithm;

    /**
     * @var string
     */
    public $certFingerprint;

    /**
     * @var array
     */
    public $subjectAlternativeNames;

    /**
     * @var array
     */
    public $data;

    /**
     * @var string
     */
    public $issuer;

    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $keySize;

    /**
     * @var string
     */
    public $expiresAt;

    /**
     * @var string
     */
    public $issuedAt;

    /**
     * @var string
     */
    public $version;

}