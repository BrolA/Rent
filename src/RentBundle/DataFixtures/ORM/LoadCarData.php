<?php
namespace RentBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use RentBundle\Entity\Car;

class LoadCarData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $car1 = new Car();
        $car1->setZdjecie('/../public_html/web/bundles/framework/images/ford_czerwony.jpg');
        $car1->setModel('Ford');
        $car1->setKategoria('Osobowy');
        $car1->setKolor('Czerwony');
        $car1->setCenaDoba(100);
        $car1->setWypozyczony(true);

        $car2 = new Car();
        $car2->setZdjecie('/../public_html/web/bundles/framework/images/fiat_bialy.jpg');
        $car2->setModel('Fiat');
        $car2->setKategoria('Dostawczy');
        $car2->setKolor('Biały');
        $car2->setCenaDoba(200);
        $car2->setWypozyczony(true);

        $car3 = new Car();
        $car3->setZdjecie('/../public_html/web/bundles/framework/images/bmw_czarne.jpg');
        $car3->setModel('BMW');
        $car3->setKategoria('Sportowy');
        $car3->setKolor('Czarny');
        $car3->setCenaDoba(300);
        $car3->setWypozyczony(true);

        $car4 = new Car();
        $car4->setZdjecie('/../public_html/web/bundles/framework/images/jeep_zielony.jpg');
        $car4->setModel('Jeep');
        $car4->setKategoria('Terenowy');
        $car4->setKolor('Zielony');
        $car4->setCenaDoba(150);
        $car4->setWypozyczony(true);

        $car5 = new Car();
        $car5->setZdjecie('/../public_html/web/bundles/framework/images/skoda_srebrna.jpg');
        $car5->setModel('Skoda');
        $car5->setKategoria('Limuzyna');
        $car5->setKolor('Srebrny');
        $car5->setCenaDoba(500);
        $car5->setWypozyczony(true);

        $manager->persist($car1);
        $manager->persist($car2);
        $manager->persist($car3);
        $manager->persist($car4);
        $manager->persist($car5);
        $manager->flush();

        $this->addReference('car1-user', $car1);
        $this->addReference('car2-user', $car2);
        $this->addReference('car3-user', $car3);
        $this->addReference('car4-user', $car4);
        $this->addReference('car5-user', $car5);
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 1;
    }
}