<?php

namespace App\DataFixtures;

use App\Entity\Projet;
use App\Entity\Categorie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Repository\CategorieRepository;

class ProjetFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $html = new Categorie();
        $html->setName('HTML');
        $manager->persist($html);

        $css = new Categorie();
        $css->setName('CSS');
        $manager->persist($css);

        $php = new Categorie();
        $php->setName('PHP');
        $manager->persist($php);

        $symfony = new Categorie();
        $symfony->setName('SYMFONY');
        $manager->persist($symfony);

        $twig = new Categorie();
        $twig->setName('Twig');
        $manager->persist($twig);

        $javascript = new Categorie();
        $javascript->setName('JavaScript');
        $manager->persist($javascript);
        
        $bootstrap = new Categorie();
        $bootstrap->setName('Bootstrap');
        $manager->persist($bootstrap);


        $reimsQuiz = new Projet();
        $reimsQuiz->setName('Reims Quiz');
        $reimsQuiz->setPicture('burgerquiz-601c0b8a097d9.png');
        $reimsQuiz->addTechnologie($html);
        $reimsQuiz->addTechnologie($css);
        $reimsQuiz->setDescription('Ce premier projet réalisé lors de ma formation consitait en l\'élaboration d\'une page web statique s\'inspirant du célèbre jeu le "Burger Quiz", sur le thème de la ville de Reims. Une contrainte technique m\'a été imposée, seul l\'HTML et le CSS était autorisé. Le jeu propose au joueur une succession de 10 questions à choix multiples avec un score');
        $manager->persist($reimsQuiz);

        $clap = new Projet();
        $clap->setName('Clap!');
        $clap->setPicture('CLAP-601c0f3d655ed.png');
        $clap->addTechnologie($html);
        $clap->addTechnologie($css);
        $clap->addTechnologie($php);
        $clap->addTechnologie($javascript);
        $clap->setDescription('Ce projet à été réalisé pour l\'assosiation "La Pellicule Ensorcelée" pour une durée d\'un mois. Ce site est un mixte entre Popcorn Garage et Pinterest, le joueur doit trouver le nom d\'un film grâce à une image. Plusieurs catégories de films y sont présentes et l\'utilisateur peut même ajouter ces propres références pour challenger d\'autres personnes !');
        $manager->persist($clap);

        $safeNight = new Projet();
        $safeNight->setName('Safe Night');
        $safeNight->setPicture('SafeNight-617a9fd790f42.png');
        $safeNight->addTechnologie($html);
        $safeNight->addTechnologie($css);
        $safeNight->addTechnologie($php);
        $safeNight->addTechnologie($twig);
        $safeNight->addTechnologie($javascript);
        $safeNight->addTechnologie($symfony);
        $safeNight->setDescription('Ce projet à été réalisé pour la NEOMA Business School de Reims pour une durée de deux mois. Cette application web d\'orgnanisation d\'événements et de soirées permet à ses utilisateurs d\'ajouter des gens à leurs listes d\'amis, de créer une soirée, d\'y inviter ces contacts. Une carte interactive est également disponible sur l\'application pour localiser les événements auxquels on participe. Un utilisateur peut également appuyer sur un bouton SOS pour alerter les urgences si une situation dangeureuse se profile sur le chemin du retour.');
        $manager->persist($safeNight);

        $saintEx = new Projet();
        $saintEx->setName('Hackathon: Saint-Ex');
        $saintEx->setPicture('SaintExpedition-601c0f6e80b5c.png');
        $saintEx->addTechnologie($html);
        $saintEx->addTechnologie($css);
        $saintEx->addTechnologie($php);
        $saintEx->addTechnologie($twig);
        $saintEx->addTechnologie($javascript);
        $saintEx->addTechnologie($symfony);
        $saintEx->setDescription('Première participation à un hackathon, organisé par Saint Ex (Reims). Ce site interactif permet aux visiteurs de naviguer de façon ludique à travers les différentes pièces de Saint Ex. Un descriptif de chaque salle accompagne le visiteur qui est guidé par un petit jeu de piste.
         Ce projet à remporté le 1er prix du Jury. (Travail réalisé en équipe)');
        $manager->persist($saintEx);

        $wiziFarm = new Projet();
        $wiziFarm->setName('Hackathon: Wizi-Farm');
        $wiziFarm->setPicture('FarmBook-601c0f99a78b1.png');
        $wiziFarm->addTechnologie($html);
        $wiziFarm->addTechnologie($css);
        $wiziFarm->addTechnologie($php);
        $wiziFarm->addTechnologie($twig);
        $wiziFarm->addTechnologie($javascript);
        $wiziFarm->addTechnologie($symfony);
        $wiziFarm->addTechnologie($bootstrap);
        $wiziFarm->setDescription('Seconde participation à un hackathon, organisé par l\'entreprise WiziFarm (Reims). Cette plateforme web permet aux agriculteurs de s\'inscrire et d\'ajouter leurs véhicules agricoles afin d\'organiser et de régulariser les échanges et des services de prêt de matériel entre agriculteurs');
        $manager->persist($wiziFarm);

        $webinaire = new Projet();
        $webinaire->setName('Plateforme de webinaire à la demande');
        $webinaire->setPicture('webinaire-617a9bcd8887f.png');
        $webinaire->addTechnologie($html);
        $webinaire->addTechnologie($css);
        $webinaire->addTechnologie($php);
        $webinaire->addTechnologie($twig);
        $webinaire->addTechnologie($javascript);
        $webinaire->addTechnologie($symfony);
        $webinaire->addTechnologie($bootstrap);
        $webinaire->setDescription('Cette plateforme de webinaire à la demande à été créée pour l\'entreprise Alain Renault Communication afin de permettre à toute personne de faire une demande de visualisation d\'un webinaire via un formulaire, la personne reçoit un mail avec le lien du webinaire complet. Une miniature de celui-ci est disponible avec une bande annonce à côté du formulaire de demande.
        Une interface destinée aux administrateurs permet de voir qui à demander quoi et quand, cela permet de savoir quel webinaire est le plus demandé et d\'établir des statistiques.');
        $manager->persist($webinaire);

        $saretec = new Projet();
        $saretec->setName('Escape Game Virtuel en 360°');
        $saretec->setPicture('welcomegame-617a9f3976783.png');
        $saretec->addTechnologie($html);
        $saretec->addTechnologie($css);
        $saretec->addTechnologie($php);
        $saretec->addTechnologie($javascript);
        $saretec->setDescription('Dans le cadre de mon stage chez ARC, j\'ai réalisé pour le compte de l\'entreprise Saretec un escape game virtuel destiné à intégrer les nouveaux collaborateurs. Des captations dans leurs locaux ont été réalisées grâce à une caméra 360° pour obtenir des images dans lesquelles les collaborateurs vont évoluer à travers différentes énigmes réalisées avec le logiciel Storyline, d\'autres énigmes comme des digicodes, des cadenas etc.... ont été réalisés en javascript. Tout cela est hébergé sur un site web et permet aux futurs collaborateurs de découvrir les locaux et les pratiques de l\'entreprise Saretec.');
        $manager->persist($saretec);
      
        $manager->flush();
    }
}