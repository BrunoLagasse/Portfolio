<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    Private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder; 
    }
    
    public function load(ObjectManager $manager)
    {
        $bruno = new User();
        $bruno->setEmail('bruno@gmail.com');
        $encodedPassword = $this->encoder->encodePassword($bruno,'123456');
        $bruno->setPassword($encodedPassword);
        $manager->persist($bruno);

        $manager->flush();
    }
}
