<?php

namespace App\DataFixtures;

use App\Entity\Users;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class userFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new Users();
        $user->setFistName("stigin");
        $user->setLastName("starview");
        $user->setEmail("mail.com");
        $user->setAge(28);
        $user->setCountry("Deutschland");
        

        $manager->persist($user);
        $manager->flush();
    }
}