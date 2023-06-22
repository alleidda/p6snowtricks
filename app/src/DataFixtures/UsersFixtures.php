<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Users;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UsersFixtures extends Fixture
{

    public function __construct(private UserPasswordHasherInterface $passwordEncoder,
    private SluggerInterface $slugger)
    {

    }
    
    public function load(ObjectManager $manager): void
    {
        $admin = new Users();
        $admin->setEmail('admin@demo.fr');
        $admin->setLastname('Amouzoun');
        $admin->setFirstname('Addiëlla');
        $admin->setUsername('Addi');
        $admin->setPassword(
            $this->passwordEncoder->hashPassword($admin, 'azerty')
        );
        $admin->setPicture('photo');

        $admin->setRoles(['ROLE_ADMIN']);

         $manager->persist($admin);

        $faker = Factory::create('fr_FR');
        for ($usr = 1; $usr <= 5; $usr++) {
            $admin = new Users();
            $admin->setEmail($faker->email);
            $admin->setLastname($faker->lastname);
            $admin->setFirstname($faker->firstname);
            $admin->setUsername($faker->username);
            $admin->setPassword(
                $this->passwordEncoder->hashPassword($admin, 'azerty')
            );
            $admin->setPicture($faker->image);

            $this->setReference('usr-'.$usr, $admin);
            $manager->persist($admin);
        }

        $manager->flush();
    }
}
