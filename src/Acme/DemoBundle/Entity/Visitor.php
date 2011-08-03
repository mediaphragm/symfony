<?php

namespace Acme\DemoBundle\Entity;

use Mediaphragm\VisitorsBundle\Entity\Visitor as BaseVisitor;
use Doctrine\ORM\Mapping as ORM;

/**

 * @ORM\Entity
 * @ORM\Table(name="mediaphragm_visitors")
 */
class Visitor extends BaseVisitor
{
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    public function __construct()
    {
        parent::construct();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}