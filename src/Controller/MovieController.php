<?php

namespace App\Controller;


use App\Entity\Movie;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MovieController extends AbstractController
{
    public function __construct(private readonly EntityManagerInterface $entityManager)
    {
    }

    #[Route('/movies', name: 'app_controlador_peliculas')]
    public function index():Response
    {
        //para poder acceder al MovieRepository que es el lugar donde se guardan las queries
        $movies = $this->entityManager->getRepository(Movie::class)->findAll();
        return $this->render('movie/index.html.twig',['movies' => $movies, 'title' => 'Peliculas']
        );
    }
}
