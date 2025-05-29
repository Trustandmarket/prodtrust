<?php

namespace ContainerXmvrhMx;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderc75ee = null;
    private $initializer5e3ff = null;
    private static $publicPropertiesd977e = [
        
    ];
    public function getConnection()
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'getConnection', array(), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'getMetadataFactory', array(), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'getExpressionBuilder', array(), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'beginTransaction', array(), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'getCache', array(), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->getCache();
    }
    public function transactional($func)
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'transactional', array('func' => $func), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'wrapInTransaction', array('func' => $func), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'commit', array(), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->commit();
    }
    public function rollback()
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'rollback', array(), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'getClassMetadata', array('className' => $className), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'createQuery', array('dql' => $dql), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'createNamedQuery', array('name' => $name), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'createQueryBuilder', array(), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'flush', array('entity' => $entity), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'clear', array('entityName' => $entityName), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->clear($entityName);
    }
    public function close()
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'close', array(), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->close();
    }
    public function persist($entity)
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'persist', array('entity' => $entity), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'remove', array('entity' => $entity), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->remove($entity);
    }
    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->refresh($entity, $lockMode);
    }
    public function detach($entity)
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'detach', array('entity' => $entity), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'merge', array('entity' => $entity), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'contains', array('entity' => $entity), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'getEventManager', array(), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'getConfiguration', array(), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'isOpen', array(), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'getUnitOfWork', array(), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'getProxyFactory', array(), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'initializeObject', array('obj' => $obj), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->initializeObject($obj);
    }
    public function isUninitializedObject($obj) : bool
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->isUninitializedObject($obj);
    }
    public function getFilters()
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'getFilters', array(), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'isFiltersStateClean', array(), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'hasFilters', array(), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return $this->valueHolderc75ee->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer5e3ff = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;
        if (! $this->valueHolderc75ee) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc75ee = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderc75ee->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, '__get', ['name' => $name], $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        if (isset(self::$publicPropertiesd977e[$name])) {
            return $this->valueHolderc75ee->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc75ee;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderc75ee;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc75ee;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderc75ee;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, '__isset', array('name' => $name), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc75ee;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderc75ee;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, '__unset', array('name' => $name), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc75ee;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderc75ee;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, '__clone', array(), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        $this->valueHolderc75ee = clone $this->valueHolderc75ee;
    }
    public function __sleep()
    {
        $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, '__sleep', array(), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
        return array('valueHolderc75ee');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(?\Closure $initializer = null) : void
    {
        $this->initializer5e3ff = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5e3ff;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer5e3ff && ($this->initializer5e3ff->__invoke($valueHolderc75ee, $this, 'initializeProxy', array(), $this->initializer5e3ff) || 1) && $this->valueHolderc75ee = $valueHolderc75ee;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc75ee;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc75ee;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
