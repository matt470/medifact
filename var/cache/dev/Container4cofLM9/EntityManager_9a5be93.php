<?php

namespace Container4cofLM9;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd8b64 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5566f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4219d = [
        
    ];

    public function getConnection()
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'getConnection', array(), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return $this->valueHolderd8b64->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'getMetadataFactory', array(), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return $this->valueHolderd8b64->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'getExpressionBuilder', array(), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return $this->valueHolderd8b64->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'beginTransaction', array(), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return $this->valueHolderd8b64->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'getCache', array(), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return $this->valueHolderd8b64->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'transactional', array('func' => $func), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return $this->valueHolderd8b64->transactional($func);
    }

    public function commit()
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'commit', array(), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return $this->valueHolderd8b64->commit();
    }

    public function rollback()
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'rollback', array(), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return $this->valueHolderd8b64->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'getClassMetadata', array('className' => $className), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return $this->valueHolderd8b64->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'createQuery', array('dql' => $dql), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return $this->valueHolderd8b64->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'createNamedQuery', array('name' => $name), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return $this->valueHolderd8b64->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return $this->valueHolderd8b64->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return $this->valueHolderd8b64->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'createQueryBuilder', array(), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return $this->valueHolderd8b64->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'flush', array('entity' => $entity), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return $this->valueHolderd8b64->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return $this->valueHolderd8b64->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return $this->valueHolderd8b64->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return $this->valueHolderd8b64->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'clear', array('entityName' => $entityName), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return $this->valueHolderd8b64->clear($entityName);
    }

    public function close()
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'close', array(), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return $this->valueHolderd8b64->close();
    }

    public function persist($entity)
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'persist', array('entity' => $entity), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return $this->valueHolderd8b64->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'remove', array('entity' => $entity), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return $this->valueHolderd8b64->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'refresh', array('entity' => $entity), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return $this->valueHolderd8b64->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'detach', array('entity' => $entity), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return $this->valueHolderd8b64->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'merge', array('entity' => $entity), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return $this->valueHolderd8b64->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return $this->valueHolderd8b64->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return $this->valueHolderd8b64->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return $this->valueHolderd8b64->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'contains', array('entity' => $entity), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return $this->valueHolderd8b64->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'getEventManager', array(), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return $this->valueHolderd8b64->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'getConfiguration', array(), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return $this->valueHolderd8b64->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'isOpen', array(), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return $this->valueHolderd8b64->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'getUnitOfWork', array(), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return $this->valueHolderd8b64->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return $this->valueHolderd8b64->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return $this->valueHolderd8b64->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'getProxyFactory', array(), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return $this->valueHolderd8b64->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'initializeObject', array('obj' => $obj), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return $this->valueHolderd8b64->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'getFilters', array(), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return $this->valueHolderd8b64->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'isFiltersStateClean', array(), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return $this->valueHolderd8b64->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'hasFilters', array(), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return $this->valueHolderd8b64->hasFilters();
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

        $instance->initializer5566f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd8b64) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd8b64 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd8b64->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, '__get', ['name' => $name], $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        if (isset(self::$publicProperties4219d[$name])) {
            return $this->valueHolderd8b64->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd8b64;

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

        $targetObject = $this->valueHolderd8b64;
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
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd8b64;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd8b64;
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
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, '__isset', array('name' => $name), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd8b64;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd8b64;
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
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, '__unset', array('name' => $name), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd8b64;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd8b64;
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
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, '__clone', array(), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        $this->valueHolderd8b64 = clone $this->valueHolderd8b64;
    }

    public function __sleep()
    {
        $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, '__sleep', array(), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;

        return array('valueHolderd8b64');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5566f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5566f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5566f && ($this->initializer5566f->__invoke($valueHolderd8b64, $this, 'initializeProxy', array(), $this->initializer5566f) || 1) && $this->valueHolderd8b64 = $valueHolderd8b64;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd8b64;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd8b64;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
