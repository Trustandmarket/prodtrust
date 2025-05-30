<?php

namespace ContainerXmvrhMx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserUniqueDataRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\UserUniqueDataRepository' shared autowired service.
     *
     * @return \App\Repository\UserUniqueDataRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\UserUniqueDataRepository'] = new \App\Repository\UserUniqueDataRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
