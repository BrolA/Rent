<?php
namespace RentBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use RentBundle\Entity\Rent;

class LoadRentData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $rent1 = new Rent();
        $rent1->setCar($this->getReference('car1-user'));
        $rent1->setClient($this->getReference('client1-user'));
        $rent1->setDataWypozyczenia(2013-12-10);
        $rent1->setDataOddania(2013-12-16);
        $rent1->setKwotaOdKlienta(300);

        $rent2 = new Rent();
        $rent2->setCar($this->getReference('car2-user'));
        $rent2->setClient($this->getReference('client2-user'));
        $rent2->setDataWypozyczenia(2013-12-10);
        $rent2->setDataOddania(2013-12-17);
        $rent2->setKwotaOdKlienta(302);

        $rent3 = new Rent();
        $rent3->setCar($this->getReference('car3-user'));
        $rent3->setClient($this->getReference('client3-user'));
        $rent3->setDataWypozyczenia(2013-12-05);
        $rent3->setDataOddania(2013-12-16);
        $rent3->setKwotaOdKlienta(303);

        $rent4 = new Rent();
        $rent4->setCar($this->getReference('car4-user'));
        $rent4->setClient($this->getReference('client4-user'));
        $rent4->setDataWypozyczenia(2013-12-10);
        $rent4->setDataOddania(2013-12-20);
        $rent4->setKwotaOdKlienta(400);

        $rent5 = new Rent();
        $rent5->setCar($this->getReference('car5-user'));
        $rent5->setClient($this->getReference('client5-user'));
        $rent5->setDataWypozyczenia(2013-12-10);
        $rent5->setDataOddania(2013-12-31);
        $rent5->setKwotaOdKlienta(500);
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 2;
    }
}