<?php

namespace ContainerXmvrhMx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEntityUpdaterService extends App_KernelProdContainer
{
    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Orm\EntityUpdater' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Orm\EntityUpdater
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityUpdater'] = new \EasyCorp\Bundle\EasyAdminBundle\Orm\EntityUpdater(($container->privates['property_accessor'] ?? $container->getPropertyAccessorService()));
    }
}
