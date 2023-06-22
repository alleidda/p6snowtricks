<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Image;
use App\Entity\Trick;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ImageFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        for($img = 1; $img <= 100; $img++){
            $image = new Image();
            $image->setName($faker->image(null, 640, 480));
            $image->setIsMain(0);
            $image->setPath($faker->url());
            $trick = $this->getReference('trc-'.rand(1, 10));
            $image->setTrick($trick);
            $manager->persist($image);
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            TrickFixtures::class
        ];  
    }
}