<?php

namespace AtlantisGroupBV\DataModel\Service;

use AtlantisGroupBV\DataModel\Exception\General;
use Psr\Container\ContainerInterface;

class ServiceFactory
{
    /**
     * @var array
     */
    protected static $services = [];

    /**
     * @var ContainerInterface
     */
    protected static $diContainer;

    public function __construct(ContainerInterface $diContainer)
    {
        self::$diContainer = $diContainer;
    }

    /**
     * @param ContainerInterface $diContainer
     */
    public function setDiContainer(ContainerInterface $diContainer): void
    {
        self::$diContainer = $diContainer;
    }

    public static function create($service)
    {
        if (self::$diContainer == null) {
            throw new General('ServiceFactory needs a dependency injection container to build the services');
        }

        if (!isset(self::$services[$service])) {
            self::$services[$service] = self::$diContainer->get($service);
        }

        return self::$services[$service];
    }
}