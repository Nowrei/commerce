<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Article;


class ProduitController extends AbstractController
{
    public function index(): Response
    {
        $repository = $this->getDoctrine()->getRepository(Article::class);
        $articles = $repository->findAll();

        return $this->render('produit/index.html.twig', [
            'articles' => $articles,
        ]);
    }
}
