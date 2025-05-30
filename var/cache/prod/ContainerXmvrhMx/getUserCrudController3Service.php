<?php

namespace ContainerXmvrhMx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserCrudController3Service extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Admin\UserCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\UserCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Admin\\UserCrudController'] = $instance = new \App\Controller\Admin\UserCrudController(($container->privates['App\\Service\\ServiceManager'] ?? $container->load('getServiceManagerService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')), (isset($container->factories['service_container']['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator']) ? $container->factories['service_container']['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator']() : $container->getAdminUrlGeneratorService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->privates['App\\Security\\EmailVerifier'] ?? $container->load('getEmailVerifierService')), ($container->privates['App\\Service\\Payment'] ?? $container->load('getPaymentService')));

        $instance->setContainer(($container->privates['.service_locator.UIrHhwh'] ?? $container->load('get_ServiceLocator_UIrHhwhService'))->withContext('App\\Controller\\Admin\\UserCrudController', $container));

        return $instance;
    }
}
