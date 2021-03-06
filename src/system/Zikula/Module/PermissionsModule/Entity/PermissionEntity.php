<?php
/**
 * Copyright Zikula Foundation 2009 - Zikula Application Framework
 *
 * This work is contributed to the Zikula Foundation under one or more
 * Contributor Agreements and licensed to You under the following license:
 *
 * @license GNU/LGPLv3 (or at your option, any later version).
 * @package Zikula
 *
 * Please see the NOTICE file distributed with this source code for further
 * information regarding copyright and licensing.
 */

namespace Zikula\Module\PermissionsModule\Entity;

use Zikula\Core\Doctrine\EntityAccess;
use Doctrine\ORM\Mapping as ORM;

/**
 * Permission entity class.
 *
 * We use annotations to define the entity mappings to database (see http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/basic-mapping.html).
 *
 * @ORM\Entity
 * @ORM\Table(name="group_perms")
 */
class PermissionEntity extends EntityAccess
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $pid;

    /**
     * @ORM\Column(type="integer")
     */
    private $gid;

    /**
     * @ORM\Column(type="integer")
     */
    private $sequence;

    /**
     * @ORM\Column(type="integer")
     */
    private $realm;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $component;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $instance;

    /**
     * @ORM\Column(type="integer")
     */
    private $level;

    /**
     * @ORM\Column(type="integer")
     */
    private $bond;


    /**
     * constructor
     */
    public function __construct()
    {
        $this->gid = 0;
        $this->sequence = 0;
        $this->realm = 0;
        $this->component = '';
        $this->instance = '';
        $this->level = 0;
        $this->bond = 0;
    }

    /**
     * get the pid of the permission
     *
     * @return integer the permission's pid
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * set the pid for the permission
     *
     * @param integer $pid the permission's pid
     */
    public function setPid($pid)
    {
        $this->pid = $pid;
    }

    /**
     * get the gid of the permission
     *
     * @return integer the permission's gid
     */
    public function getGid()
    {
        return $this->gid;
    }

    /**
     * set the gid for the permission
     *
     * @param integer $gid the permission's gid
     */
    public function setGid($gid)
    {
        $this->gid = $gid;
    }

    /**
     * get the sequence of the permission
     *
     * @return integer the permission's sequence
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * set the sequence for the permission
     *
     * @param integer $sequence the permission's sequence
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;
    }

    /**
     * get the realm of the permission
     *
     * @return integer the permission's realm
     */
    public function getRealm()
    {
        return $this->realm;
    }

    /**
     * set the realm for the permission
     *
     * @param integer $realm the permission's realm
     */
    public function setRealm($realm)
    {
        $this->realm = $realm;
    }

    /**
     * get the component of the permission
     *
     * @return string the permission's component
     */
    public function getComponent()
    {
        return $this->component;
    }

    /**
     * set the component for the permission
     *
     * @param string $component the permission's component
     */
    public function setComponent($component)
    {
        $this->component = $component;
    }

    /**
     * get the instance of the permission
     *
     * @return string the permission's instance
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * set the instance for the permission
     *
     * @param string $instance the permission's instance
     */
    public function setInstance($instance)
    {
        $this->instance = $instance;
    }

    /**
     * get the level of the permission
     *
     * @return integer the permission's level
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * set the level for the permission
     *
     * @param integer $level the permission's level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }

    /**
     * get the bond of the permission
     *
     * @return integer the permission's bond
     */
    public function getBond()
    {
        return $this->bond;
    }

    /**
     * set the bond for the permission
     *
     * @param integer $bond the permission's bond
     */
    public function setBond($bond)
    {
        $this->bond = $bond;
    }
}