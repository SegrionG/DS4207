<?php

namespace ContainerZ29xQGL;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera9ac4 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1c600 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties215b4 = [
        
    ];

    public function getConnection()
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'getConnection', array(), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'getMetadataFactory', array(), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'getExpressionBuilder', array(), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'beginTransaction', array(), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'getCache', array(), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'transactional', array('func' => $func), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'wrapInTransaction', array('func' => $func), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'commit', array(), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->commit();
    }

    public function rollback()
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'rollback', array(), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'getClassMetadata', array('className' => $className), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'createQuery', array('dql' => $dql), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'createNamedQuery', array('name' => $name), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'createQueryBuilder', array(), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'flush', array('entity' => $entity), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'clear', array('entityName' => $entityName), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->clear($entityName);
    }

    public function close()
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'close', array(), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->close();
    }

    public function persist($entity)
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'persist', array('entity' => $entity), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'remove', array('entity' => $entity), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'refresh', array('entity' => $entity), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'detach', array('entity' => $entity), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'merge', array('entity' => $entity), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'contains', array('entity' => $entity), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'getEventManager', array(), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'getConfiguration', array(), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'isOpen', array(), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'getUnitOfWork', array(), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'getProxyFactory', array(), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'initializeObject', array('obj' => $obj), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'getFilters', array(), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'isFiltersStateClean', array(), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'hasFilters', array(), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return $this->valueHoldera9ac4->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer1c600 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera9ac4) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera9ac4 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera9ac4->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, '__get', ['name' => $name], $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        if (isset(self::$publicProperties215b4[$name])) {
            return $this->valueHoldera9ac4->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera9ac4;

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

        $targetObject = $this->valueHoldera9ac4;
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
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera9ac4;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera9ac4;
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
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, '__isset', array('name' => $name), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera9ac4;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera9ac4;
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
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, '__unset', array('name' => $name), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera9ac4;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera9ac4;
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
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, '__clone', array(), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        $this->valueHoldera9ac4 = clone $this->valueHoldera9ac4;
    }

    public function __sleep()
    {
        $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, '__sleep', array(), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;

        return array('valueHoldera9ac4');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1c600 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1c600;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1c600 && ($this->initializer1c600->__invoke($valueHoldera9ac4, $this, 'initializeProxy', array(), $this->initializer1c600) || 1) && $this->valueHoldera9ac4 = $valueHoldera9ac4;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera9ac4;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera9ac4;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
