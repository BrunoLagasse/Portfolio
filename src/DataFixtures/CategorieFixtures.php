<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategorieFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $html = new Categorie();
        $html->setName('HTML');
        $manager->persist($html);

        $css = new Categorie();
        $css->setName('CSS');
        $manager->persist($css);

        $PHP = new Categorie();
        $PHP->setName('PHP');
        $manager->persist($PHP);

        $twig = new Categorie();
        $twig->setName('TWIG');
        $manager->persist($twig);

        $symfony = new Categorie();
        $symfony->setName('SYMFONY');
        $manager->persist($symfony);

        $bootstrap = new Categorie();
        $bootstrap->setName('Bootstrap');
        $manager->persist($bootstrap);
      
        $manager->flush();
    }
}