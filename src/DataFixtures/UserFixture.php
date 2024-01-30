<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = (new User())
            ->setEmail('admin@test.com')
            ->setFirstName('Test')
            ->setLastName('Admin')
            ->setPassword('aA123456');

        $manager->persist($user);
        $manager->flush();
    }
}
