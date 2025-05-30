<?php

namespace ContainerXmvrhMx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Dbal_DefaultConnection_EventManagerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'doctrine.dbal.default_connection.event_manager' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\ContainerAwareEventManager
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['doctrine.dbal.default_connection.event_manager'] = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Gedmo\\Blameable\\BlameableListener' => ['privates', 'Gedmo\\Blameable\\BlameableListener', 'getBlameableListenerService', true],
            'Gedmo\\Sluggable\\SluggableListener' => ['privates', 'Gedmo\\Sluggable\\SluggableListener', 'getSluggableListenerService', true],
            'Gedmo\\Timestampable\\TimestampableListener' => ['privates', 'Gedmo\\Timestampable\\TimestampableListener', 'getTimestampableListenerService', true],
            'doctrine.orm.default_listeners.attach_entity_listeners' => ['privates', 'doctrine.orm.default_listeners.attach_entity_listeners', 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService', true],
            'doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_subscriber' => ['privates', 'doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_subscriber', 'getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaSubscriberService', true],
            'doctrine.orm.listeners.doctrine_token_provider_schema_subscriber' => ['privates', 'doctrine.orm.listeners.doctrine_token_provider_schema_subscriber', 'getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService', true],
            'doctrine.orm.listeners.pdo_cache_adapter_doctrine_schema_subscriber' => ['privates', 'doctrine.orm.listeners.pdo_cache_adapter_doctrine_schema_subscriber', 'getDoctrine_Orm_Listeners_PdoCacheAdapterDoctrineSchemaSubscriberService', true],
        ], [
            'Gedmo\\Blameable\\BlameableListener' => '?',
            'Gedmo\\Sluggable\\SluggableListener' => '?',
            'Gedmo\\Timestampable\\TimestampableListener' => '?',
            'doctrine.orm.default_listeners.attach_entity_listeners' => '?',
            'doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_subscriber' => '?',
            'doctrine.orm.listeners.doctrine_token_provider_schema_subscriber' => '?',
            'doctrine.orm.listeners.pdo_cache_adapter_doctrine_schema_subscriber' => '?',
        ]), [0 => 'doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_subscriber', 1 => 'doctrine.orm.listeners.pdo_cache_adapter_doctrine_schema_subscriber', 2 => 'doctrine.orm.listeners.doctrine_token_provider_schema_subscriber', 3 => [0 => [0 => 'prePersist'], 1 => 'Gedmo\\Timestampable\\TimestampableListener'], 4 => [0 => [0 => 'onFlush'], 1 => 'Gedmo\\Timestampable\\TimestampableListener'], 5 => [0 => [0 => 'loadClassMetadata'], 1 => 'Gedmo\\Timestampable\\TimestampableListener'], 6 => [0 => [0 => 'prePersist'], 1 => 'Gedmo\\Blameable\\BlameableListener'], 7 => [0 => [0 => 'onFlush'], 1 => 'Gedmo\\Blameable\\BlameableListener'], 8 => [0 => [0 => 'loadClassMetadata'], 1 => 'Gedmo\\Blameable\\BlameableListener'], 9 => [0 => [0 => 'prePersist'], 1 => 'Gedmo\\Sluggable\\SluggableListener'], 10 => [0 => [0 => 'onFlush'], 1 => 'Gedmo\\Sluggable\\SluggableListener'], 11 => [0 => [0 => 'loadClassMetadata'], 1 => 'Gedmo\\Sluggable\\SluggableListener'], 12 => [0 => [0 => 'loadClassMetadata'], 1 => 'doctrine.orm.default_listeners.attach_entity_listeners']]);
    }
}
