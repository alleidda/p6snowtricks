<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Comment;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class CommentFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        for($com = 1; $com <= 100; $com++){
         $comment = new Comment();
         $comment->setContent($faker->text());
         $trick = $this->getReference('trc-'.rand(1, 10));
         $users = $this->getReference('usr-'.rand(1, 5));
         $comment->setTrick($trick);
         $comment->setUser($users);
         $manager->persist($comment);
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            UsersFixtures::class
        ];  
    }
    
}
