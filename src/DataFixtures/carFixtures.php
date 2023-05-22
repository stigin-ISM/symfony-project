<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class carFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $car = new Cars();

    }
}
