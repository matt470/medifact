<?php

namespace Container8vG374F;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_U2fDnUService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.U_2fDnU' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.U_2fDnU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'facture' => ['privates', '.errored..service_locator.U_2fDnU.App\\Entity\\Facture', NULL, 'Cannot autowire service ".service_locator.U_2fDnU": it references class "App\\Entity\\Facture" but no such service exists.'],
        ], [
            'facture' => 'App\\Entity\\Facture',
        ]);
    }
}