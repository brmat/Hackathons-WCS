<?php

namespace LicoboxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LicoboxBundle:Default:index.html.twig');
    }
}
