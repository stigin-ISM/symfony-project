<?php

namespace App\DataFixtures;

use App\Entity\Cars;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class carFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $car = new Cars();
        $car->setMake('BMW');
        $car->setModel('M8');
        $car->setYear(2022);
        $car->setColor("Light Blue");
        $car->setSeller("Iven");
        $car->setDescription("Rarely driven- used by the elderly ");
        $car->setImagePath("https://www.bmw.de/content/dam/bmw/common/all-models/m-series/m8-coupe/2022/onepager/bmw-m8-coupe-onepager-sp-desktop.jpg/jcr:content/renditions/cq5dam.resized.img.1680.large.time1642518221018.jpg");
        $manager->persist($car);

        $car2 = new Cars();
        $car2->setMake('VW');
        $car2->setModel('Golf');
        $car2->setYear(2010);
        $car2->setColor("Pink");
        $car2->setSeller("Richard");
        $car2->setDescription("Mr.Big wagon");
        $car2->setImagePath("https://www.autopfister.ch/wp-content/uploads/sites/8/2018/01/pink_golf.jpg");
        $manager->persist($car2);

        $manager->flush();


    }
}
