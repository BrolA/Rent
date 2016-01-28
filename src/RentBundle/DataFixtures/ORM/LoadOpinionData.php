<?php
namespace RentBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use RentBundle\Entity\Opinion;

class LoadOpinionData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $opinion1 = new Opinion();
        $opinion1->setTytul('Super');
        $opinion1->setDataDodania(2013-12-16);
        $opinion1->setOpinia('miodzio');
        $opinion1->setCar($this->getReference('car1-user'));
        $opinion1->setClient($this->getReference('client1-user'));

        $opinion2 = new Opinion();
        $opinion2->setTytul('no no');
        $opinion2->setDataDodania(2014-12-16);
        $opinion2->setOpinia('mhm');
        $opinion2->setCar($this->getReference('car2-user'));
        $opinion2->setClient($this->getReference('client2-user'));

        $opinion3 = new Opinion();
        $opinion3->setTytul('tak');
        $opinion3->setDataDodania(2015-12-16);
        $opinion3->setOpinia('nie');
        $opinion3->setCar($this->getReference('car3-user'));
        $opinion3->setClient($this->getReference('client3-user'));

        $opinion4 = new Opinion();
        $opinion4->setTytul('jeeeeee');
        $opinion4->setDataDodania(2012-12-16);
        $opinion4->setOpinia('aha');
        $opinion4->setCar($this->getReference('car4-user'));
        $opinion4->setClient($this->getReference('client4-user'));

        $opinion5 = new Opinion();
        $opinion5->setTytul('oj oj ');
        $opinion5->setDataDodania(2013-12-15);
        $opinion5->setOpinia('nie no żartuję');
        $opinion5->setCar($this->getReference('car5-user'));
        $opinion5->setClient($this->getReference('client5-user'));
        
        $manager->persist($opinion1);
        $manager->persist($opinion2);
        $manager->persist($opinion3);
        $manager->persist($opinion4);
        $manager->persist($opinion5);
        $manager->flush();
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 2;
    }
}