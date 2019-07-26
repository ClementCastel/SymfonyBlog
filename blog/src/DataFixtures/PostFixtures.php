<?php

namespace App\DataFixtures;

use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class PostFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');


        for ($i = 0; $i < 100; $i++)
        {
            $post = new Post();
            $post->setTitle($faker->text(24));
            $post->setContent($faker->realText(600));

            $manager->persist($post);
        }



        $manager->flush();
    }
}
