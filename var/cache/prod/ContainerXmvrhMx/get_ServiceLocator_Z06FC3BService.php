<?php

namespace ContainerXmvrhMx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Z06FC3BService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.z06FC3B' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.z06FC3B'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'tokenStorage' => ['services', '.container.private.security.token_storage', 'get_Container_Private_Security_TokenStorageService', false],
            'translator' => ['services', 'translator', 'getTranslatorService', false],
        ], [
            'tokenStorage' => '?',
            'translator' => '?',
        ]);
    }
}
