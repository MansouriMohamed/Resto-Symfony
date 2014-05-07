<?php

namespace restaurantTunisie\PidevSiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PidevSiteBundle:Default:index.html.twig', array());
    }
    
    public function detailsAction()
    {
        return $this->render('PidevSiteBundle:Default:details.html.twig', array());
    }
    public function listeAction()
    {
        return $this->render('PidevSiteBundle:Default:liste.html.twig', array());
    }
    
}
