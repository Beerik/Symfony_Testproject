<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    //php 8.0+ use attributes -> #[Route('/lucky/number')]
    /**
     * @Route("/lucky/number", name="app_lucky_number")
     */
    public function number(): Response
    {
        $number = random_int(0, 100);

        //simple response when not extending AbstractController
        // return new Response(
        //     '<html><body>Lucky number: ' . $number . '</body></html>'
        // );

        //using twig templates instead: ~/templates/lucky/number.html.twig
        return $this->render('lucky/number.html.twig', ['number' => $number,]);
    }
}
