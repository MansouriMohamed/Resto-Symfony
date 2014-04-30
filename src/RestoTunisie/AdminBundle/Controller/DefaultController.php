<?php

namespace RestoTunisie\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AdminBundle:Default:index.html.twig', array());
    }
    
    public function dashboardAction()
    {
        return $this->render('AdminBundle:Default:dashboard.html.twig', array());
    }
}
