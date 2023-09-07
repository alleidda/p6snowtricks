<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Trick;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\String\Slugger\SluggerInterface;

class TrickFixtures extends Fixture
{

  
    public function __construct(private SluggerInterface $slugger){}

    public function load(ObjectManager $manager): void
    {
        
        $faker = Factory::create('fr_FR');

        for($trc = 1; $trc <= 10; $trc++){
            $trick = new Trick();
            $trick->setName($faker->text(15));
            $trick->setDescription($faker->text());
            $trick->setSlug($this->slugger->slug($trick->getName())->lower());
           
            //On va chercher une référence de catégorie

           
            $category = $this->getReference('cat-'. rand(1, 3));
            $trick->setCategory($category);
            $users = $this->getReference('usr-'. rand(1, 5));
            $trick->setUsers($users);

            $this->setReference('trc-'.$trc, $trick);
            $manager->persist($trick);
        }

        $manager->flush();
    }
}