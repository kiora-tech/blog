<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PostsController extends AbstractController
{
    /**
     * @Route("/posts/{id}", name="posts")
     */
    public function index($id)
    {
        return $this->render('posts/index.html.twig', compact('id'));
    }
}
