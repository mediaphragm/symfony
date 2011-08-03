<?php

/*
 * This file is part of the MediaphragmVisitorBundle.
 * 
 * (c) Mediaphragm <http://www.mediaphragm.com>
 * 
 */

namespace Mediaphragm\VisitorsBundle\Model;

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
    protected $username;
	
	/**
	* @return string
	*/
    function getUsername()
    {
        return $this->username;
    }
}