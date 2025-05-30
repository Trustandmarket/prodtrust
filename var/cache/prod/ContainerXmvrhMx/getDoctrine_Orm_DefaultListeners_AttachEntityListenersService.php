<?php

namespace ContainerXmvrhMx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_DefaultListeners_AttachEntityListenersService extends App_KernelProdContainer
{
    /*
     * Gets the private 'doctrine.orm.default_listeners.attach_entity_listeners' shared service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['doctrine.orm.default_listeners.attach_entity_listeners'] = $instance = new \Doctrine\ORM\Tools\AttachEntityListenersListener();

        $instance->addEntityListener('App\\Entity\\Abonnement', 'App\\EventListener\\AbonnementPrePersist', 'prePersist');
        $instance->addEntityListener('App\\Entity\\Departement', 'App\\EventListener\\DepartementPreRemove', 'preRemove');
        $instance->addEntityListener('App\\Entity\\User', 'App\\EventListener\\UserPreUpdate', 'preUpdate');

        return $instance;
    }
}
