<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Leader extends \AppBundle\Entity\Leader implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Leader' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Leader' . "\0" . 'creator', '' . "\0" . 'AppBundle\\Entity\\Leader' . "\0" . 'created', '' . "\0" . 'AppBundle\\Entity\\Leader' . "\0" . 'editor', '' . "\0" . 'AppBundle\\Entity\\Leader' . "\0" . 'edited', '' . "\0" . 'AppBundle\\Entity\\Leader' . "\0" . 'deletor', '' . "\0" . 'AppBundle\\Entity\\Leader' . "\0" . 'deleted', '' . "\0" . 'AppBundle\\Entity\\Leader' . "\0" . 'name', '' . "\0" . 'AppBundle\\Entity\\Leader' . "\0" . 'group'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Leader' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Leader' . "\0" . 'creator', '' . "\0" . 'AppBundle\\Entity\\Leader' . "\0" . 'created', '' . "\0" . 'AppBundle\\Entity\\Leader' . "\0" . 'editor', '' . "\0" . 'AppBundle\\Entity\\Leader' . "\0" . 'edited', '' . "\0" . 'AppBundle\\Entity\\Leader' . "\0" . 'deletor', '' . "\0" . 'AppBundle\\Entity\\Leader' . "\0" . 'deleted', '' . "\0" . 'AppBundle\\Entity\\Leader' . "\0" . 'name', '' . "\0" . 'AppBundle\\Entity\\Leader' . "\0" . 'group'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Leader $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreated($created)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreated', [$created]);

        return parent::setCreated($created);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreated', []);

        return parent::getCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setEditor($editor)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEditor', [$editor]);

        return parent::setEditor($editor);
    }

    /**
     * {@inheritDoc}
     */
    public function getEditor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEditor', []);

        return parent::getEditor();
    }

    /**
     * {@inheritDoc}
     */
    public function setEdited($edited)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEdited', [$edited]);

        return parent::setEdited($edited);
    }

    /**
     * {@inheritDoc}
     */
    public function getEdited()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEdited', []);

        return parent::getEdited();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeletor($deletor)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeletor', [$deletor]);

        return parent::setDeletor($deletor);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeletor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeletor', []);

        return parent::getDeletor();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeleted($deleted)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeleted', [$deleted]);

        return parent::setDeleted($deleted);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeleted()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeleted', []);

        return parent::getDeleted();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreator(\AppBundle\Entity\LoginUser $creator = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreator', [$creator]);

        return parent::setCreator($creator);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreator()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreator', []);

        return parent::getCreator();
    }

    /**
     * {@inheritDoc}
     */
    public function setGroup(\AppBundle\Entity\Group $group = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGroup', [$group]);

        return parent::setGroup($group);
    }

    /**
     * {@inheritDoc}
     */
    public function getGroup()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroup', []);

        return parent::getGroup();
    }

}
