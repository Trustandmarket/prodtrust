<?php

namespace ContainerXmvrhMx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMakeAdminDashboardCommand_LazyService extends App_KernelProdContainer
{
    /*
     * Gets the private '.EasyCorp\Bundle\EasyAdminBundle\Command\MakeAdminDashboardCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeAdminDashboardCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('make:admin:dashboard', [], 'Creates a new EasyAdmin Dashboard class', false, function () use ($container): \EasyCorp\Bundle\EasyAdminBundle\Command\MakeAdminDashboardCommand {
            return ($container->services['EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeAdminDashboardCommand'] ?? $container->load('getMakeAdminDashboardCommandService'));
        });
    }
}
