<?php

namespace App\Controller;

use App\Repository\PostRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="post.index", methods={"GET"})
     */
    public function index(PostRepository $postRepository, PaginatorInterface $paginator, Request $request): Response
    {

        $query = $postRepository->findAllQuery();

        $properties = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1), /*page number*/
            12 /*limit per page*/
        );

        return $this->render('index.html.twig', [
            'posts' => $properties
        ]);
    }

    /**
     * @Route("/{slug}-{id}", name="post.show", methods={"GET"}, requirements={"slug":"[a-z0-9\-]*"})
     */
    public function show($slug, $id, PostRepository $postRepository): Response
    {
        $post = $postRepository->find($id);

        return $this->render('post.html.twig', [
            'post' => $post,
        ]);
    }
}