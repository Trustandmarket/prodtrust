<?php

namespace ContainerXmvrhMx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getToolsMetaService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Service\ToolsMeta' shared autowired service.
     *
     * @return \App\Service\ToolsMeta
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Service\\ToolsMeta'] = new \App\Service\ToolsMeta(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')), ($container->services['router'] ?? $container->getRouterService()), ($container->privates['mailer.mailer'] ?? $container->load('getMailer_MailerService')));
    }
}
