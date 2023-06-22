<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Video;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class VideoFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        for($vid = 1; $vid <= 100; $vid++){
         $video = new Video();
         $video->setName($faker->image(null, 640, 480));
         $trick = $this->getReference('trc-'.rand(1, 10));
         $video->setUrl($faker->url());
         $video->setTrick($trick);
         $manager->persist($video);
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
