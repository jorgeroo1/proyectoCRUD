<?php

namespace App\DataFixtures;

use App\Entity\Country;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CountryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $country1 = new Country();
        $country1->setName('France');
        $manager->persist($country1);

        $country2 = new Country();
        $country2->setName('Italy');
        $manager->persist($country2);

        $country3 = new Country();
        $country3->setName('Germany');
        $manager->persist($country3);

        $country4 = new Country();
        $country4->setName('Spain');
        $manager->persist($country4);

        $country5 = new Country();
        $country5->setName('United Kingdom');
        $manager->persist($country5);

        $country6 = new Country();
        $country6->setName('Japan');
        $manager->persist($country6);

        $manager->flush();

        //añades referencias para poder llamarlas desde la entidad Movie ya que tenemos campos son Country
        $this->addReference('country1', $country1);
        $this->addReference('country2', $country2);
        $this->addReference('country3', $country3);
        $this->addReference('country4', $country4);
        $this->addReference('country5', $country5);
        $this->addReference('country6', $country6);
    }
}
