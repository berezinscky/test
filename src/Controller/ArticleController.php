<?php

namespace App\Controller;

//use Symfony\Component\Routing\Annotation\Route; //-можно и так
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response("My first page already!");
    }

    /**
     * @Route("/Привет/{name}")
     */
    public function hello($name)
    {
        return new Response("Привет! $name!");
    }

    /**
     * @Route("/simplicity")
     */
    public function simple()
    {
        return new Response('Просто! Легко! Прекрасно!');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf(
            'Future page to show the article: %s',
            $slug
        ));
    }
}
?>