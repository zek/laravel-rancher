<?php

namespace Benmag\Rancher\Factories;

use Illuminate\Http\Response;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Benmag\Rancher\Exceptions\NotFoundException;
use Benmag\Rancher\Exceptions\NotUniqueException;
use Benmag\Rancher\Exceptions\ServerErrorException;
use Benmag\Rancher\Exceptions\InvalidTypeException;
use Benmag\Rancher\Exceptions\NotNullableException;
use Benmag\Rancher\Exceptions\InvalidStateException;
use Benmag\Rancher\Exceptions\RancherErrorException;
use Benmag\Rancher\Exceptions\UnauthorizedException;
use Benmag\Rancher\Exceptions\InvalidActionException;
use Benmag\Rancher\Exceptions\InvalidFormatException;
use Benmag\Rancher\Exceptions\InvalidOptionException;
use Benmag\Rancher\Exceptions\MissingRequiredException;
use Benmag\Rancher\Exceptions\MaxLimitExceededException;
use Benmag\Rancher\Exceptions\MethodNotAllowedException;
use Benmag\Rancher\Exceptions\InvalidReferenceException;
use Benmag\Rancher\Exceptions\InvalidCSRFTokenException;
use Benmag\Rancher\Exceptions\MinLimitExceededException;
use Benmag\Rancher\Exceptions\PermissionDeniedException;
use Benmag\Rancher\Exceptions\InvalidDateFormatException;
use Benmag\Rancher\Exceptions\MaxLengthExceededException;
use Benmag\Rancher\Exceptions\InvalidCharactersException;
use Benmag\Rancher\Exceptions\MinLengthExceededException;
use Benmag\Rancher\Exceptions\ActionNotAvailableException;
use Benmag\Rancher\Exceptions\ClusterUnavailableException;
use Benmag\Rancher\Exceptions\InvalidBodyContentException;

class ErrorHandler {

    public function __invoke(callable $handler)
    {
        return function (RequestInterface $request, array $options) use ($handler) {
            return $handler($request, $options)->then(function($response) {
                if ($this->isSuccessful($response)) {
                    return $response;
                }
                $this->handleErrorResponse($response);
            });
        };
    }

    public function isSuccessful(ResponseInterface $response)
    {
        return $response->getStatusCode() < Response::HTTP_BAD_REQUEST;
    }

    public function handleErrorResponse(ResponseInterface $response)
    {

        $rancher = json_decode($response->getBody()->getContents());

        switch($rancher->code) {
            case "Unauthorized":
                throw new UnauthorizedException($rancher->message, $rancher->status);
            case "PermissionDenied":
                throw new PermissionDeniedException($rancher->message, $rancher->status);
            case "NotFound":
                throw new NotFoundException($rancher->message, $rancher->status);
            case "MethodNotAllowed":
                throw new MethodNotAllowedException($rancher->message, $rancher->status);
            case "InvalidDateFormat":
                throw new InvalidDateFormatException($rancher->message, $rancher->status);
            case "InvalidFormat":
                throw new InvalidFormatException("Invalid format for {$rancher->fieldName}", $rancher->status);
            case "InvalidReference":
                throw new InvalidReferenceException($rancher->message, $rancher->status);
            case "NotNullable":
                throw new NotNullableException("{$rancher->fieldName} must be set", $rancher->status);
            case "NotUnique":
                throw new NotUniqueException("{$rancher->fieldName} is not unique", $rancher->status);
            case "MinLimitExceeded":
                throw new MinLimitExceededException("{$rancher->fieldName} is too small", $rancher->status);
            case "MaxLimitExceeded":
                throw new MaxLimitExceededException("{$rancher->fieldName} is too long", $rancher->status);
            case "MinLengthExceeded":
                throw new MinLengthExceededException("{$rancher->fieldName} is not long enough", $rancher->status);
            case "MaxLengthExceeded":
                throw new MaxLengthExceededException("{$rancher->fieldName} is too long", $rancher->status);
            case "InvalidOption":
                throw new InvalidOptionException("{$rancher->fieldName} is not a valid option", $rancher->status);
            case "InvalidCharacters":
                throw new InvalidCharactersException("{$rancher->fieldName} contains invalid characters", $rancher->status);
            case "MissingRequired":
                throw new MissingRequiredException("{$rancher->fieldName} is required", $rancher->status);
            case "InvalidCSRFToken":
                throw new InvalidCSRFTokenException("Invalid CSRF Token", $rancher->status);
            case "InvalidAction":
                throw new InvalidActionException("Invalid action", $rancher->status);
            case "InvalidBodyContent":
                throw new InvalidBodyContentException("Invalid body content", $rancher->status);
            case "InvalidType":
                throw new InvalidTypeException("Invalid type exception", $rancher->status);
            case "ActionNotAvailable":
                throw new ActionNotAvailableException($rancher->message ? $rancher->message : "This action is not currently available", $rancher->status);
            case "InvalidState":
                throw new InvalidStateException($rancher->message ? $rancher->message : "Invalid state", $rancher->status);
            case "ServerError":
                throw new ServerErrorException($rancher->message, $rancher->status);
            case "ClusterUnavailable":
                throw new ClusterUnavailableException($rancher->message, $rancher->status);
            default:
                throw new RancherErrorException($rancher->message ? $rancher->message : $rancher->rancher->code, $rancher->status);

        }

    }

}