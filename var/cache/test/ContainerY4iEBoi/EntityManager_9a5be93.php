<?php

namespace ContainerY4iEBoi;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9470c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8fa78 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesfabad = [
        
    ];

    public function getConnection()
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'getConnection', array(), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'getMetadataFactory', array(), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'getExpressionBuilder', array(), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'beginTransaction', array(), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'getCache', array(), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'transactional', array('func' => $func), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'commit', array(), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->commit();
    }

    public function rollback()
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'rollback', array(), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'getClassMetadata', array('className' => $className), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'createQuery', array('dql' => $dql), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'createNamedQuery', array('name' => $name), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'createQueryBuilder', array(), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'flush', array('entity' => $entity), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'clear', array('entityName' => $entityName), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->clear($entityName);
    }

    public function close()
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'close', array(), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->close();
    }

    public function persist($entity)
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'persist', array('entity' => $entity), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'remove', array('entity' => $entity), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'refresh', array('entity' => $entity), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'detach', array('entity' => $entity), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'merge', array('entity' => $entity), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'contains', array('entity' => $entity), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'getEventManager', array(), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'getConfiguration', array(), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'isOpen', array(), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'getUnitOfWork', array(), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'getProxyFactory', array(), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'initializeObject', array('obj' => $obj), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'getFilters', array(), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'isFiltersStateClean', array(), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'hasFilters', array(), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return $this->valueHolder9470c->hasFilters();
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

        $instance->initializer8fa78 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9470c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9470c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9470c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, '__get', ['name' => $name], $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        if (isset(self::$publicPropertiesfabad[$name])) {
            return $this->valueHolder9470c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9470c;

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

        $targetObject = $this->valueHolder9470c;
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
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9470c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9470c;
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
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, '__isset', array('name' => $name), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9470c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9470c;
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
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, '__unset', array('name' => $name), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9470c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9470c;
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
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, '__clone', array(), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        $this->valueHolder9470c = clone $this->valueHolder9470c;
    }

    public function __sleep()
    {
        $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, '__sleep', array(), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;

        return array('valueHolder9470c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8fa78 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8fa78;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8fa78 && ($this->initializer8fa78->__invoke($valueHolder9470c, $this, 'initializeProxy', array(), $this->initializer8fa78) || 1) && $this->valueHolder9470c = $valueHolder9470c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9470c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9470c;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
