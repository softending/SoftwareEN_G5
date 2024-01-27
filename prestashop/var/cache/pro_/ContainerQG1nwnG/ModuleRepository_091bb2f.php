<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera9416 = null;
    private $initializerb8f96 = null;
    private static $publicProperties4f07e = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'getList', array(), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'getInstalledModules', array(), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'getMustBeConfiguredModules', array(), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'getUpgradableModules', array(), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'getModule', array('moduleName' => $moduleName), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'setActionUrls', array('collection' => $collection), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        return $this->valueHoldera9416->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializerb8f96 = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHoldera9416) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHoldera9416 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHoldera9416->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializerb8f96 && ($this->initializerb8f96->__invoke($valueHoldera9416, $this, '__get', ['name' => $name], $this->initializerb8f96) || 1) && $this->valueHoldera9416 = $valueHoldera9416;
        if (isset(self::$publicProperties4f07e[$name])) {
            return $this->valueHoldera9416->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
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
