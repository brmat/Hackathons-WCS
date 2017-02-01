<?php

namespace FindMeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PartieController extends Controller
{
    public function indexAction()
    {
        return $this->render('FindMeBundle:Default:partie.html.twig');
    }
}