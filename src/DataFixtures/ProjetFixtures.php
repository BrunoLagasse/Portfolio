<?php

namespace App\DataFixtures;

use App\Entity\Projet;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Repository\CategorieRepository;

class ProjetFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $reimsQuiz = new Projet();
        $reimsQuiz->setName('Reims Quiz');
        $reimsQuiz->setPicture('burgerquiz-601c0b8a097d9.png');
        $reimsQuiz->setDescription('Ce premier projet réalisé lors de ma formation consitait à l\'élaboration d\'une page web statique s\'inspirant du célèbre jeu le "Burger Quiz", sur le thème de la ville de Reims. Une contrainte technique m\'a été imposée, seul l\'HTML et le CSS était autorisé.');
        $manager->persist($reimsQuiz);

        $clap = new Projet();
        $clap->setName('Clap!');
        $clap->setPicture('CLAP-601c0f3d655ed.png');
        $manager->persist($clap);

        $safeNight = new Projet();
        $safeNight->setName('Safe Night');
        $safeNight->setPicture('safenight-601c0f7f79b53.png');
        $manager->persist($safeNight);

        $saintEx = new Projet();
        $saintEx->setName('Hackathon: Saint-Ex');
        $saintEx->setPicture('SaintExpedition-601c0f6e80b5c.png');
        $manager->persist($saintEx);

        $wiziFarm = new Projet();
        $wiziFarm->setName('Hackathon: Wizi-Farm');
        $wiziFarm->setPicture('FarmBook-601c0f99a78b1.png');
        $manager->persist($wiziFarm);
      
        $manager->flush();
    }
}