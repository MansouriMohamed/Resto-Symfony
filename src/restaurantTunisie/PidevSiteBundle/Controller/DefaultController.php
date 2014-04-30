<?php

namespace restaurantTunisie\PidevSiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PidevSiteBundle:Default:index.html.twig', array());
    }
    public function page1Action()
    {
        return $this->render('PidevSiteBundle:Default:1.html.twig', array());
    }
    public function page2Action()
    {
        return $this->render('PidevSiteBundle:Default:2.html.twig', array());
    }
    public function page3Action()
    {
        return $this->render('PidevSiteBundle:Default:3.html.twig', array());
    }
    public function page4Action()
    {
        return $this->render('PidevSiteBundle:Default:4.html.twig', array());
    }
    public function pageAction()
    {
        return $this->render('PidevSiteBundle:Default:@.html.twig', array());
    }
}
