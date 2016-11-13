<?php

namespace Denis\HelloWorldBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HelloWorldBundle:Default:index.html.twig');
    }
}
