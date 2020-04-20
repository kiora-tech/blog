<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/posts",name="posts")
 */
class PostsController extends AbstractController
{
    /**
     * @Route("/", methods={"GET"})
     * @param int $id
     * @return Response
     */
    public function list(ArticleRepository $repository): Response
    {
        return $this->render('posts/index.html.twig', ['articles'=> $repository->findAll()]);
    }

    /**
     * @Route("/{id}", name="_show", methods={"GET"}, requirements={"id": "\d+"})
     * @param Article $article
     * @return Response
     */
    public function show(Article $article): Response
    {
        return $this->render('posts/show.html.twig', compact('article'));
    }

    /**
     * @Route("/test")
     * @return Response
     */
    public function test(): Response
    {
        return $this->render('posts/test.html.twig');
    }
}
