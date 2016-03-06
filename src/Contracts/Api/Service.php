<?php

namespace Benmag\Rancher\Contracts\Api;

/**
 * A "Service" is one or more containers created
 * from the same Docker image.
 *
 * When a "Service" is linked to another service within the same stack,
 * a DNS record mapped to each container instance is automatically
 * created and discoverable by containers from the "consuming" service.
 *
 * @package  Rancher
 * @author   @benmagg
 */
interface Service {


}