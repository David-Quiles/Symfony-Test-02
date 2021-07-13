<?php

namespace ContainerYtLUN06;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6463e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere2d13 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties59d3c = [
        
    ];

    public function getConnection()
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'getConnection', array(), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return $this->valueHolder6463e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'getMetadataFactory', array(), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return $this->valueHolder6463e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'getExpressionBuilder', array(), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return $this->valueHolder6463e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'beginTransaction', array(), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return $this->valueHolder6463e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'getCache', array(), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return $this->valueHolder6463e->getCache();
    }

    public function transactional($func)
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'transactional', array('func' => $func), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return $this->valueHolder6463e->transactional($func);
    }

    public function commit()
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'commit', array(), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return $this->valueHolder6463e->commit();
    }

    public function rollback()
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'rollback', array(), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return $this->valueHolder6463e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'getClassMetadata', array('className' => $className), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return $this->valueHolder6463e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'createQuery', array('dql' => $dql), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return $this->valueHolder6463e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'createNamedQuery', array('name' => $name), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return $this->valueHolder6463e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return $this->valueHolder6463e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return $this->valueHolder6463e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'createQueryBuilder', array(), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return $this->valueHolder6463e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'flush', array('entity' => $entity), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return $this->valueHolder6463e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return $this->valueHolder6463e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return $this->valueHolder6463e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return $this->valueHolder6463e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'clear', array('entityName' => $entityName), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return $this->valueHolder6463e->clear($entityName);
    }

    public function close()
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'close', array(), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return $this->valueHolder6463e->close();
    }

    public function persist($entity)
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'persist', array('entity' => $entity), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return $this->valueHolder6463e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'remove', array('entity' => $entity), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return $this->valueHolder6463e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'refresh', array('entity' => $entity), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return $this->valueHolder6463e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'detach', array('entity' => $entity), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return $this->valueHolder6463e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'merge', array('entity' => $entity), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return $this->valueHolder6463e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return $this->valueHolder6463e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return $this->valueHolder6463e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'getRepository', array('entityName' => $entityName), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return $this->valueHolder6463e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'contains', array('entity' => $entity), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return $this->valueHolder6463e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'getEventManager', array(), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return $this->valueHolder6463e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'getConfiguration', array(), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return $this->valueHolder6463e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'isOpen', array(), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return $this->valueHolder6463e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'getUnitOfWork', array(), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return $this->valueHolder6463e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return $this->valueHolder6463e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return $this->valueHolder6463e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'getProxyFactory', array(), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return $this->valueHolder6463e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'initializeObject', array('obj' => $obj), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return $this->valueHolder6463e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'getFilters', array(), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return $this->valueHolder6463e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'isFiltersStateClean', array(), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return $this->valueHolder6463e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'hasFilters', array(), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return $this->valueHolder6463e->hasFilters();
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

        $instance->initializere2d13 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6463e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6463e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6463e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, '__get', ['name' => $name], $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        if (isset(self::$publicProperties59d3c[$name])) {
            return $this->valueHolder6463e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6463e;

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

        $targetObject = $this->valueHolder6463e;
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
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6463e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6463e;
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
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, '__isset', array('name' => $name), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6463e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6463e;
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
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, '__unset', array('name' => $name), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6463e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6463e;
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
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, '__clone', array(), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        $this->valueHolder6463e = clone $this->valueHolder6463e;
    }

    public function __sleep()
    {
        $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, '__sleep', array(), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;

        return array('valueHolder6463e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere2d13 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere2d13;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere2d13 && ($this->initializere2d13->__invoke($valueHolder6463e, $this, 'initializeProxy', array(), $this->initializere2d13) || 1) && $this->valueHolder6463e = $valueHolder6463e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6463e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6463e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
