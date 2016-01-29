<?php
namespace RentBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use RentBundle\Entity\Client;

class LoadClientData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $client1 = new Client();
        $client1->setImie('Jan');
        $client1->setNazwisko('Kowalski');

        $client2 = new Client();
        $client2->setImie('Jan');
        $client2->setNazwisko('Nowak');
        
        $client3 = new Client();
        $client3->setImie('John');
        $client3->setNazwisko('Smith');

        $client4 = new Client();
        $client4->setImie('Janusz');
        $client4->setNazwisko('Kowal');

        $client5 = new Client();
        $client5->setImie('Grażyna');
        $client5->setNazwisko('Kowal');
        
        $manager->persist($client1);
        $manager->persist($client2);
        $manager->persist($client3);
        $manager->persist($client4);
        $manager->persist($client5);
        $manager->flush();

        $this->addReference('client1-user', $client1);
        $this->addReference('client2-user', $client2);
        $this->addReference('client3-user', $client3);
        $this->addReference('client4-user', $client4);
        $this->addReference('client5-user', $client5);
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 1;
    }
}