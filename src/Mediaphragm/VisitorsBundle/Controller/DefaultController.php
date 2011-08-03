<?php

namespace Mediaphragm\VisitorsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('MediaphragmVisitorsBundle:Default:index.html.twig', array('name' => $name));
    }
}
