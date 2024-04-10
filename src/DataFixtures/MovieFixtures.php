<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $movie1 = new Movie();
        $movie1->setTitle('The Great Gatsby');
        $movie1->setDescription('A great movie about love');
        $movie1->setRuntime(120);
        $movie1-> setBudget(200000);
        $movie1->setPoster('esto es un poster');
        $movie1->setReleaseDate(new \DateTime('2020-01-01'));
        //como setGenre requiere de un dato de tipo Genre obtenemos este dato gracias a la referencia que hemos
        //anteriormente en el GenreFixtures
        $movie1->setGenre($this->getReference('genre1'));
        $movie1->setCountry($this->getReference('country1'));
        $manager->persist($movie1);


        $manager->flush();
    }
}
