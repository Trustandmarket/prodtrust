<?php

namespace ContainerXmvrhMx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExtTranslationWpUsermetaRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\ExtTranslationWpUsermetaRepository' shared autowired service.
     *
     * @return \App\Repository\ExtTranslationWpUsermetaRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\ExtTranslationWpUsermetaRepository'] = new \App\Repository\ExtTranslationWpUsermetaRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
