<?php
namespace RentBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use RentBundle\Entity\Client;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $userAdmin = new Client();
        $userAdmin->setUsername('client');
        $userAdmin->setPassword('test');

        $manager->persist($userAdmin);
        $manager->flush();

        $this->addReference('client-user', $userAdmin);
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 1;
    }
}