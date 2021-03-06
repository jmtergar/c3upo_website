<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \AppBundle\Entity\User implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'captchaCode', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'name', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'lastname', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'phone', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'email', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'username', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'centre', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'centre_tmp', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'department', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'department_tmp', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'group', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'groupName_tmp', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'groupCode_tmp', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'groupWebsite_tmp', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'groupLeader_tmp', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'position', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'softwareSpecifications', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'description', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'isClusterUser', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'isActive', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'isInDistributionList', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'registerdate', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'usingTime', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'editor', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'edited', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'deletor', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'deleted'];
        }

        return ['__isInitialized__', 'captchaCode', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'name', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'lastname', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'phone', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'email', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'username', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'centre', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'centre_tmp', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'department', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'department_tmp', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'group', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'groupName_tmp', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'groupCode_tmp', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'groupWebsite_tmp', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'groupLeader_tmp', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'position', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'softwareSpecifications', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'description', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'isClusterUser', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'isActive', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'isInDistributionList', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'registerdate', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'usingTime', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'editor', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'edited', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'deletor', '' . "\0" . 'AppBundle\\Entity\\User' . "\0" . 'deleted'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
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
    public function setLastname($lastname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastname', [$lastname]);

        return parent::setLastname($lastname);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastname', []);

        return parent::getLastname();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhone($phone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhone', [$phone]);

        return parent::setPhone($phone);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhone', []);

        return parent::getPhone();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsername($username)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', [$username]);

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function setCentreTmp($centreTmp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCentreTmp', [$centreTmp]);

        return parent::setCentreTmp($centreTmp);
    }

    /**
     * {@inheritDoc}
     */
    public function getCentreTmp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCentreTmp', []);

        return parent::getCentreTmp();
    }

    /**
     * {@inheritDoc}
     */
    public function setDepartmentTmp($departmentTmp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDepartmentTmp', [$departmentTmp]);

        return parent::setDepartmentTmp($departmentTmp);
    }

    /**
     * {@inheritDoc}
     */
    public function getDepartmentTmp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepartmentTmp', []);

        return parent::getDepartmentTmp();
    }

    /**
     * {@inheritDoc}
     */
    public function setGroupNameTmp($groupNameTmp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGroupNameTmp', [$groupNameTmp]);

        return parent::setGroupNameTmp($groupNameTmp);
    }

    /**
     * {@inheritDoc}
     */
    public function getGroupNameTmp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroupNameTmp', []);

        return parent::getGroupNameTmp();
    }

    /**
     * {@inheritDoc}
     */
    public function setGroupCodeTmp($groupCodeTmp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGroupCodeTmp', [$groupCodeTmp]);

        return parent::setGroupCodeTmp($groupCodeTmp);
    }

    /**
     * {@inheritDoc}
     */
    public function getGroupCodeTmp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroupCodeTmp', []);

        return parent::getGroupCodeTmp();
    }

    /**
     * {@inheritDoc}
     */
    public function setGroupWebsiteTmp($groupWebsiteTmp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGroupWebsiteTmp', [$groupWebsiteTmp]);

        return parent::setGroupWebsiteTmp($groupWebsiteTmp);
    }

    /**
     * {@inheritDoc}
     */
    public function getGroupWebsiteTmp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroupWebsiteTmp', []);

        return parent::getGroupWebsiteTmp();
    }

    /**
     * {@inheritDoc}
     */
    public function setGroupLeaderTmp($groupLeaderTmp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGroupLeaderTmp', [$groupLeaderTmp]);

        return parent::setGroupLeaderTmp($groupLeaderTmp);
    }

    /**
     * {@inheritDoc}
     */
    public function getGroupLeaderTmp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroupLeaderTmp', []);

        return parent::getGroupLeaderTmp();
    }

    /**
     * {@inheritDoc}
     */
    public function setPosition($position)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPosition', [$position]);

        return parent::setPosition($position);
    }

    /**
     * {@inheritDoc}
     */
    public function getPosition()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPosition', []);

        return parent::getPosition();
    }

    /**
     * {@inheritDoc}
     */
    public function setSoftwareSpecifications($softwareSpecifications)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSoftwareSpecifications', [$softwareSpecifications]);

        return parent::setSoftwareSpecifications($softwareSpecifications);
    }

    /**
     * {@inheritDoc}
     */
    public function getSoftwareSpecifications()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSoftwareSpecifications', []);

        return parent::getSoftwareSpecifications();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsClusterUser($isClusterUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsClusterUser', [$isClusterUser]);

        return parent::setIsClusterUser($isClusterUser);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsClusterUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsClusterUser', []);

        return parent::getIsClusterUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setRegisterdate($registerdate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRegisterdate', [$registerdate]);

        return parent::setRegisterdate($registerdate);
    }

    /**
     * {@inheritDoc}
     */
    public function getRegisterdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRegisterdate', []);

        return parent::getRegisterdate();
    }

    /**
     * {@inheritDoc}
     */
    public function setCentre(\AppBundle\Entity\Centre $centre = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCentre', [$centre]);

        return parent::setCentre($centre);
    }

    /**
     * {@inheritDoc}
     */
    public function getCentre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCentre', []);

        return parent::getCentre();
    }

    /**
     * {@inheritDoc}
     */
    public function setDepartment(\AppBundle\Entity\Department $department = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDepartment', [$department]);

        return parent::setDepartment($department);
    }

    /**
     * {@inheritDoc}
     */
    public function getDepartment()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepartment', []);

        return parent::getDepartment();
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

    /**
     * {@inheritDoc}
     */
    public function getCaptchaCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCaptchaCode', []);

        return parent::getCaptchaCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setCaptchaCode($captchaCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCaptchaCode', [$captchaCode]);

        return parent::setCaptchaCode($captchaCode);
    }

    /**
     * {@inheritDoc}
     */
    public function setUsingTime(\AppBundle\Entity\UsingTime $usingTime = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsingTime', [$usingTime]);

        return parent::setUsingTime($usingTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsingTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsingTime', []);

        return parent::getUsingTime();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsActive($isActive)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsActive', [$isActive]);

        return parent::setIsActive($isActive);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsActive', []);

        return parent::getIsActive();
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
    public function setIsInDistributionList($isInDistributionList)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsInDistributionList', [$isInDistributionList]);

        return parent::setIsInDistributionList($isInDistributionList);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsInDistributionList()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsInDistributionList', []);

        return parent::getIsInDistributionList();
    }

}
