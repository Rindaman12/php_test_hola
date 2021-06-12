<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setName('Admin');
        $user->setUsername('admin');
        $password="adminpassword";
        $algo= HASH_HMAC;
        $user->setPassword(password_hash($password, $algo));
        $user->setRoles('ADMIN');
        $manager->persist($user);

        $manager->flush();
    }
}
