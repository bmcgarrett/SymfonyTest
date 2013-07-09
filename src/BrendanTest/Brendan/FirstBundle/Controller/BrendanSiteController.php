<?php

namespace BrendanTest\Brendan\FirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BrendanSiteController extends Controller
{
    public function landingAction()
    {
        return $this->render('FirstBundle:BrendanSite:home.html.twig', array('title' => "Symfony2"));
    }

    public function mongoAction()
    {
        return $this->render('FirstBundle:BrendanSite:mongo.html.twig', array('title' => "Mongo"));
    }

    public function sqliteAction()
    {
        return $this->render('FirstBundle:BrendanSite:sqlite.html.twig', array('title' => "SQLite"));
    }

}