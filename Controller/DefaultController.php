<?php

namespace Equinoxe\OryxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function standaloneAction()
    {
        return $this->render('OryxBundle:Default:standalone.html.twig');
    }
    
    public function integratedAction()
    {
        return $this->render('OryxBundle:Default:integrated.html.twig');
    }
}
