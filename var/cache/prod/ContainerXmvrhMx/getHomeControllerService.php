<?php

namespace ContainerXmvrhMx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHomeControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\HomeController' shared autowired service.
     *
     * @return \App\Controller\HomeController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\HomeController'] = $instance = new \App\Controller\HomeController(($container->privates['App\\Service\\ServiceManager'] ?? $container->load('getServiceManagerService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')), ($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->privates['App\\Service\\Payment'] ?? $container->load('getPaymentService')), ($container->privates['App\\Service\\ToolsMeta'] ?? $container->load('getToolsMetaService')));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\HomeController', $container));

        return $instance;
    }
}
