<?php

namespace Folinus\Bundle\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('FolinusBlogBundle:Default:index.html.twig', array('name' => $name));
    }
}
