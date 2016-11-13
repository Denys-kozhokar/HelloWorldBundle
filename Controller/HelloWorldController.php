<?php

namespace Denis\HelloWorldBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * HelloWorld controller.
 *
 */
class HelloWorldController extends Controller
{


    public function helloworldAction($name = 'World')
    {

        return $this->render('HelloWorldBundle:HelloWorld:helloworld.html.twig', array(
            'name' => $name,
        ));
    }
}