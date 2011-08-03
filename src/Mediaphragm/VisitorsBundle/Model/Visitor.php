<?php

/*
 * This file is part of the MediaphragmVisitorBundle.
 * 
 * (c) Mediaphragm <http://www.mediaphragm.com>
 * 
 */

namespace Mediaphragm\VisitorsBundle\Model;

use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Storage visitor object
 * 
 * @author Christophe Willemsen <christophe.willemsen@mediphragm.com>
 * 
 */

abstract class Visitor
{
    protected $id;
    
    /**
     * @var string
     */
    protected $ip;
    
    /**
     * @var string
     */
    protected $uri;
    
    /**
     * @var datetime
     */
    protected $dtg;
    
    public function __construct()
    {
        
    }
    
    /**
     * Returns the visitor unique id
     * 
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }
    
    /**
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }
    
    /**
     * @return datetime
     */
    public function getDateTime()
    {
        return \DateTime($this->dtg);
    }
    
    /**
     * Sets the ip
     * 
     * @param string $ip
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    }
    
    /**
     * Sets the URI
     * 
     * @param string $uri
     */
    public function setUri($uri)
    {
        $this->uri = $uri;
    }
    
    /**
     * Sets the last update datetime info
     * 
     * @param datetime $dtg
     */
    public function setDtg(\DateTime $dtg)
    {
        $this->dtg = $dtg;
    }
}