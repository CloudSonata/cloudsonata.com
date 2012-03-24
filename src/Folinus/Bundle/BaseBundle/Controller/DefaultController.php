<?php

namespace Folinus\Bundle\BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('FolinusBaseBundle:Default:index.html.twig');
    }
}
