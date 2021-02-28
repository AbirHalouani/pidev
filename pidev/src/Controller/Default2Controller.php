<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Default2Controller extends AbstractController
{
    /**
     * @Route("/back-end", name="default2")
     */
    public function index(): Response
    {
        return $this->render('default2/index.html.twig', [
            'controller_name' => 'Default2Controller',
        ]);
    }
}
