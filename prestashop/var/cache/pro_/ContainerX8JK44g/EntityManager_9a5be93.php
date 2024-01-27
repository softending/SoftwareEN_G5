<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera9416 = null;
    private $initializerb8f96 = null;
    private static $publicProperties4f07e = [
        
    ];
    public function getConnection()
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'getConnection', array(), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'getMetadataFactory', array(), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'getExpressionBuilder', array(), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'beginTransaction', array(), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'getCache', array(), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->getCache();
    }
    public function transactional($func)
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'transactional', array('func' => $func), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'commit', array(), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->commit();
    }
    public function rollback()
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'rollback', array(), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'getClassMetadata', array('className' => $className), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'createQuery', array('dql' => $dql), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'createNamedQuery', array('name' => $name), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'createQueryBuilder', array(), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'flush', array('entity' => $entity), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'clear', array('entityName' => $entityName), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->clear($entityName);
    }
    public function close()
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'close', array(), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->close();
    }
    public function persist($entity)
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'persist', array('entity' => $entity), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'remove', array('entity' => $entity), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'refresh', array('entity' => $entity), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'detach', array('entity' => $entity), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'merge', array('entity' => $entity), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'contains', array('entity' => $entity), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'getEventManager', array(), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'getConfiguration', array(), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'isOpen', array(), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'getUnitOfWork', array(), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'getProxyFactory', array(), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'initializeObject', array('obj' => $obj), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'getFilters', array(), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'isFiltersStateClean', array(), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'hasFilters', array(), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerb8f96 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHoldera9416) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera9416 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHoldera9416->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, '__get', ['name' => $name], $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        if (isset(self::$publicProperties4f07e[$name])) {
            return $this->valueHoldera9416->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera9416;
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
        $targetObject = $this->valueHoldera9416;
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
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera9416;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldera9416;
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
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, '__isset', array('name' => $name), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera9416;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHoldera9416;
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
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, '__unset', array('name' => $name), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera9416;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldera9416;
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
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, '__clone', array(), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        $this->valueHoldera9416 = clone $this->valueHoldera9416;
    }
    public function __sleep()
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, '__sleep', array(), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return array('valueHoldera9416');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb8f96 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb8f96;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'initializeProxy', array(), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera9416;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera9416;
    }
}
