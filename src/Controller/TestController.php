<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{

    /**
     * @Route("/one")
     */
    public function index(): Response
    {
        return $this->render('base.html.twig');
    }

    /**
     * @Route("/two")
     */
    public function number(): Response
    {
        try {
            $number = random_int(0, 100);
            return new Response(
                '<html><body><h1>TWO</h1>random_int: ' . $number . '</body></html>'
            );
        } catch (\Exception $e) {
            return new Response(
                '<html><body>ERROR!</body></html>'
            );
        }
    }

    /**
     * @Route("/three")
     */
    public function twigTemplate(): Response
    {
        $variable = "test variable";
        return $this->render('test.html.twig', [
            'page_title' => 'THREE',
            'variable' => $variable,
        ]);
    }
}