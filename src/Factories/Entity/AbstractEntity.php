<?php

namespace Benmag\Rancher\Factories\Entity;

abstract class AbstractEntity
{

    /**
     * List of available links for this entity
     *
     * @var array
     */
    protected $links;

    /**
     * List of available actions on this entity
     *
     * @var array
     */
    protected $actions;

    /**
     * /**
     * @param \stdClass|array|null $parameters
     */
    public function __construct($parameters = null)
    {
        if (!$parameters) {
            return;
        }

        if ($parameters instanceof \stdClass) {
            $parameters = get_object_vars($parameters);
        }

        $this->build($parameters);
    }

    /**
     * @param array $parameters
     */
    public function build(array $parameters)
    {
        foreach ($parameters as $property => $value) {
            $property = static::convertToCamelCase($property);

            if (property_exists($this, $property)) {
                $this->$property = $value;
            }
        }
    }

    /**
     * @param string $str Snake case string
     *
     * @return string Camel case string
     */
    protected static function convertToCamelCase($str)
    {
        $callback = function ($match) {
            return strtoupper($match[2]);
        };

        return lcfirst(preg_replace_callback('/(^|_)([a-z])/', $callback, $str));
    }


    /**
     * Convert the entity to an array.
     *
     * @return array
     */
    public function toArray()
    {
        $result = array();
        foreach ($this as $key => $value) {
            $result[$key] = $value;
        }
        return $result;
    }

}