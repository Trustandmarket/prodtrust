<?php

namespace ContainerXmvrhMx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChatControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\ChatController' shared autowired service.
     *
     * @return \App\Controller\ChatController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\ChatController'] = $instance = new \App\Controller\ChatController(($container->privates['App\\Service\\ServiceManager'] ?? $container->load('getServiceManagerService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')), ($container->privates['App\\Service\\ToolsMeta'] ?? $container->load('getToolsMetaService')));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\ChatController', $container));

        return $instance;
    }
}
