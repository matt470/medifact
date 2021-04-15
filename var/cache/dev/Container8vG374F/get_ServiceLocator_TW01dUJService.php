<?php

namespace Container8vG374F;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TW01dUJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TW01dUJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TW01dUJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'acteRepository' => ['privates', 'App\\Repository\\ActeRepository', 'getActeRepositoryService', true],
        ], [
            'acteRepository' => 'App\\Repository\\ActeRepository',
        ]);
    }
}
