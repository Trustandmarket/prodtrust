<?php

namespace ContainerXmvrhMx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Esmk6IFService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.esmk6IF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.esmk6IF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'batchActionDto' => ['privates', '.errored..service_locator.esmk6IF.EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\BatchActionDto', NULL, 'Cannot autowire service ".service_locator.esmk6IF": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\BatchActionDto" but no such service exists.'],
            'context' => ['privates', '.errored..service_locator.esmk6IF.EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext', NULL, 'Cannot autowire service ".service_locator.esmk6IF": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext" but no such service exists.'],
        ], [
            'batchActionDto' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\BatchActionDto',
            'context' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext',
        ]);
    }
}
