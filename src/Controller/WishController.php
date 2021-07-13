<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/wish", name="wish_")
 */
class WishController extends AbstractController
{
    /**
     * @Route("", name="list")
     */
    public function list(): Response
    {
        // todo: afficher la liste des choses à faire

        return $this->render('wish/list.html.twig', [

        ]);
    }

    /**
     * @Route("/details/{id}", name="details")
     */
    public function details(int $id): Response
    {
        // todo: afficher les détails sur une idée de chose à faire

        return $this->render('wish/details.html.twig');
    }
}
