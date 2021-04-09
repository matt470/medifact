<?php

namespace ContainerGZxbAGw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KrmBW_CService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.KrmBW.C' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KrmBW.C'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ActeController::delete' => ['privates', '.service_locator.kR1hhmI', 'get_ServiceLocator_KR1hhmIService', true],
            'App\\Controller\\ActeController::edit' => ['privates', '.service_locator.kR1hhmI', 'get_ServiceLocator_KR1hhmIService', true],
            'App\\Controller\\ActeController::index' => ['privates', '.service_locator.TW01dUJ', 'get_ServiceLocator_TW01dUJService', true],
            'App\\Controller\\ActeController::new' => ['privates', '.service_locator.XupNM.k', 'get_ServiceLocator_XupNM_KService', true],
            'App\\Controller\\ActeController::show' => ['privates', '.service_locator.kR1hhmI', 'get_ServiceLocator_KR1hhmIService', true],
            'App\\Controller\\FactureController::delete' => ['privates', '.service_locator.U_2fDnU', 'get_ServiceLocator_U2fDnUService', true],
            'App\\Controller\\FactureController::edit' => ['privates', '.service_locator.U_2fDnU', 'get_ServiceLocator_U2fDnUService', true],
            'App\\Controller\\FactureController::index' => ['privates', '.service_locator.q.tFi0U', 'get_ServiceLocator_Q_TFi0UService', true],
            'App\\Controller\\FactureController::new' => ['privates', '.service_locator.TW01dUJ', 'get_ServiceLocator_TW01dUJService', true],
            'App\\Controller\\FactureController::show' => ['privates', '.service_locator.U_2fDnU', 'get_ServiceLocator_U2fDnUService', true],
            'App\\Controller\\MainController::actes' => ['privates', '.service_locator.TW01dUJ', 'get_ServiceLocator_TW01dUJService', true],
            'App\\Controller\\MainController::facture_acte' => ['privates', '.service_locator.QAM6fn.', 'get_ServiceLocator_QAM6fn_Service', true],
            'App\\Controller\\PatientController::delete' => ['privates', '.service_locator.mk9shxU', 'get_ServiceLocator_Mk9shxUService', true],
            'App\\Controller\\PatientController::edit' => ['privates', '.service_locator.mk9shxU', 'get_ServiceLocator_Mk9shxUService', true],
            'App\\Controller\\PatientController::index' => ['privates', '.service_locator.XupNM.k', 'get_ServiceLocator_XupNM_KService', true],
            'App\\Controller\\PatientController::show' => ['privates', '.service_locator.mk9shxU', 'get_ServiceLocator_Mk9shxUService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\ActeController:delete' => ['privates', '.service_locator.kR1hhmI', 'get_ServiceLocator_KR1hhmIService', true],
            'App\\Controller\\ActeController:edit' => ['privates', '.service_locator.kR1hhmI', 'get_ServiceLocator_KR1hhmIService', true],
            'App\\Controller\\ActeController:index' => ['privates', '.service_locator.TW01dUJ', 'get_ServiceLocator_TW01dUJService', true],
            'App\\Controller\\ActeController:new' => ['privates', '.service_locator.XupNM.k', 'get_ServiceLocator_XupNM_KService', true],
            'App\\Controller\\ActeController:show' => ['privates', '.service_locator.kR1hhmI', 'get_ServiceLocator_KR1hhmIService', true],
            'App\\Controller\\FactureController:delete' => ['privates', '.service_locator.U_2fDnU', 'get_ServiceLocator_U2fDnUService', true],
            'App\\Controller\\FactureController:edit' => ['privates', '.service_locator.U_2fDnU', 'get_ServiceLocator_U2fDnUService', true],
            'App\\Controller\\FactureController:index' => ['privates', '.service_locator.q.tFi0U', 'get_ServiceLocator_Q_TFi0UService', true],
            'App\\Controller\\FactureController:new' => ['privates', '.service_locator.TW01dUJ', 'get_ServiceLocator_TW01dUJService', true],
            'App\\Controller\\FactureController:show' => ['privates', '.service_locator.U_2fDnU', 'get_ServiceLocator_U2fDnUService', true],
            'App\\Controller\\MainController:actes' => ['privates', '.service_locator.TW01dUJ', 'get_ServiceLocator_TW01dUJService', true],
            'App\\Controller\\MainController:facture_acte' => ['privates', '.service_locator.QAM6fn.', 'get_ServiceLocator_QAM6fn_Service', true],
            'App\\Controller\\PatientController:delete' => ['privates', '.service_locator.mk9shxU', 'get_ServiceLocator_Mk9shxUService', true],
            'App\\Controller\\PatientController:edit' => ['privates', '.service_locator.mk9shxU', 'get_ServiceLocator_Mk9shxUService', true],
            'App\\Controller\\PatientController:index' => ['privates', '.service_locator.XupNM.k', 'get_ServiceLocator_XupNM_KService', true],
            'App\\Controller\\PatientController:show' => ['privates', '.service_locator.mk9shxU', 'get_ServiceLocator_Mk9shxUService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\ActeController::delete' => '?',
            'App\\Controller\\ActeController::edit' => '?',
            'App\\Controller\\ActeController::index' => '?',
            'App\\Controller\\ActeController::new' => '?',
            'App\\Controller\\ActeController::show' => '?',
            'App\\Controller\\FactureController::delete' => '?',
            'App\\Controller\\FactureController::edit' => '?',
            'App\\Controller\\FactureController::index' => '?',
            'App\\Controller\\FactureController::new' => '?',
            'App\\Controller\\FactureController::show' => '?',
            'App\\Controller\\MainController::actes' => '?',
            'App\\Controller\\MainController::facture_acte' => '?',
            'App\\Controller\\PatientController::delete' => '?',
            'App\\Controller\\PatientController::edit' => '?',
            'App\\Controller\\PatientController::index' => '?',
            'App\\Controller\\PatientController::show' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\ActeController:delete' => '?',
            'App\\Controller\\ActeController:edit' => '?',
            'App\\Controller\\ActeController:index' => '?',
            'App\\Controller\\ActeController:new' => '?',
            'App\\Controller\\ActeController:show' => '?',
            'App\\Controller\\FactureController:delete' => '?',
            'App\\Controller\\FactureController:edit' => '?',
            'App\\Controller\\FactureController:index' => '?',
            'App\\Controller\\FactureController:new' => '?',
            'App\\Controller\\FactureController:show' => '?',
            'App\\Controller\\MainController:actes' => '?',
            'App\\Controller\\MainController:facture_acte' => '?',
            'App\\Controller\\PatientController:delete' => '?',
            'App\\Controller\\PatientController:edit' => '?',
            'App\\Controller\\PatientController:index' => '?',
            'App\\Controller\\PatientController:show' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
