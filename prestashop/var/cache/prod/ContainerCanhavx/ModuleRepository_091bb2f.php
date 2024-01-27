<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderd28d5 = null;
    private $initializerac93f = null;
    private static $publicProperties54df9 = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'getList', array(), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'getInstalledModules', array(), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'getMustBeConfiguredModules', array(), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'getUpgradableModules', array(), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'getModule', array('moduleName' => $moduleName), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'setActionUrls', array('collection' => $collection), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        return $this->valueHolderd28d5->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializerac93f = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolderd28d5) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolderd28d5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolderd28d5->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializerac93f && ($this->initializerac93f->__invoke($valueHolderd28d5, $this, '__get', ['name' => $name], $this->initializerac93f) || 1) && $this->valueHolderd28d5 = $valueHolderd28d5;
        if (isset(self::$publicProperties54df9[$name])) {
            return $this->valueHolderd28d5->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
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
