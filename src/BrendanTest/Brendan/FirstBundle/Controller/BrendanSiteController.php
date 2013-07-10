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
        // Configuration
        $dbhost = 'localhost';
        $dbname = 'myusert';

        // Connect to test database
        $m = new \Mongo("mongodb://$dbhost");
        $db = $m->$dbname;

        // Get the users collection
        $myUsers = $db->myusers;

        $myUsersList = $myUsers->find();

        return $this->render('FirstBundle:BrendanSite:mongo.html.twig', array('title' => "Mongo",'myUsers' => $myUsersList ));
    }

    public function sqliteAction()
    {
        return $this->render('FirstBundle:BrendanSite:sqlite.html.twig', array('title' => "SQLite"));
    }

}