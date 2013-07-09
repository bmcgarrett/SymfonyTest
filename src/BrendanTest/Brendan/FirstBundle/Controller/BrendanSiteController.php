<?php

namespace BrendanTest\Brendan\FirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BrendanSiteController extends Controller
{
    public function landingAction()
    {
        return $this->render('FirstBundle:BrendanSite:layout.html.twig', array('title' => "Symfony2",
            'nav' => array('MongoDB' => '/Mongo','SQLite' => '/SQLite')));
    }
}