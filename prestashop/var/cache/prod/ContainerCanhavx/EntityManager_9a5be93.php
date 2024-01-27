<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderd28d5 = null;
    private $initializerac93f = null;
    private static $publicProperties54df9 = [
        
    ];
    public function getConnection()
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'getConnection', array(), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'getMetadataFactory', array(), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'getExpressionBuilder', array(), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'beginTransaction', array(), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'getCache', array(), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->getCache();
    }
    public function transactional($func)
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'transactional', array('func' => $func), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'wrapInTransaction', array('func' => $func), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'commit', array(), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->commit();
    }
    public function rollback()
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'rollback', array(), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'getClassMetadata', array('className' => $className), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'createQuery', array('dql' => $dql), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'createNamedQuery', array('name' => $name), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'createQueryBuilder', array(), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'flush', array('entity' => $entity), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'clear', array('entityName' => $entityName), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->clear($entityName);
    }
    public function close()
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'close', array(), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->close();
    }
    public function persist($entity)
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'persist', array('entity' => $entity), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'remove', array('entity' => $entity), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'refresh', array('entity' => $entity), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'detach', array('entity' => $entity), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'merge', array('entity' => $entity), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'getRepository', array('entityName' => $entityName), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'contains', array('entity' => $entity), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'getEventManager', array(), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'getConfiguration', array(), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'isOpen', array(), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'getUnitOfWork', array(), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'getProxyFactory', array(), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'initializeObject', array('obj' => $obj), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'getFilters', array(), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'isFiltersStateClean', array(), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'hasFilters', array(), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerac93f = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderd28d5) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd28d5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderd28d5->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, '__get', ['name' => $name], $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        if (isset(self::$publicProperties54df9[$name])) {
            return $this->valueHolderd28d5->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd28d5;
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
        $targetObject = $this->valueHolderd28d5;
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
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd28d5;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderd28d5;
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
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, '__isset', array('name' => $name), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd28d5;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderd28d5;
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
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, '__unset', array('name' => $name), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd28d5;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderd28d5;
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
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, '__clone', array(), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        $this->valueHolderd28d5 = clone $this->valueHolderd28d5;
    }
    public function __sleep()
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, '__sleep', array(), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return array('valueHolderd28d5');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerac93f = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerac93f;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'initializeProxy', array(), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd28d5;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd28d5;
    }
}
