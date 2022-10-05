<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends AbstractController
{
    // $uri = $_SERVER['REQUEST_URI'];

    /**
     * @Route("/", name="home")
     */
    public function requestresponse(): Response
    {

        $uri = $_SERVER['REQUEST_URI'];
        $foo = null;
        // $foo = $_GET['foo'];

        header('Content-Type: text/html');
        echo 'The URI requested is: ' . $uri;
        echo 'The value of the "foo" parameter is: ' . $foo;

        return new Response(
            '<html><body></body></html>'
        );
    }
}
