<?php

namespace ContainerXmvrhMx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWpTermTaxonomyCrudController4Service extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Admin\ToutesCategories\WpTermTaxonomyCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\ToutesCategories\WpTermTaxonomyCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Admin\\ToutesCategories\\WpTermTaxonomyCrudController'] = $instance = new \App\Controller\Admin\ToutesCategories\WpTermTaxonomyCrudController(($container->privates['App\\Service\\ServiceManager'] ?? $container->load('getServiceManagerService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')), (isset($container->factories['service_container']['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator']) ? $container->factories['service_container']['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator']() : $container->getAdminUrlGeneratorService()));

        $instance->setContainer(($container->privates['.service_locator.UIrHhwh'] ?? $container->load('get_ServiceLocator_UIrHhwhService'))->withContext('App\\Controller\\Admin\\ToutesCategories\\WpTermTaxonomyCrudController', $container));

        return $instance;
    }
}
