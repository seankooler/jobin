<?php
namespace Sinoeujobs\JobinBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Sinoeujobs\JobinBundle\Entity\Address;

class LoadAddressData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {

        $sensioLab = new Address();
        $sensioLab->setAddressProvince('Hauts-de-Seine');
        $sensioLab->setAddressPostCode('92115');
        $sensioLab->setAddressCity('Clichy');
        $sensioLab->setAddressLine1('92-98, Boulevard Victor Hugo');
        $sensioLab->setCountry($em->merge($this->getReference('country-france')));

        $sinoeujobs = new Address();
        $sinoeujobs->setAddressProvince('Hauts-de-Seine');
        $sinoeujobs->setAddressPostCode('92400');
        $sinoeujobs->setAddressCity('Courbevoie');
        $sinoeujobs->setAddressLine1('116, Avenue de la République');
        $sinoeujobs->setCountry($em->merge($this->getReference('country-france')));

        $bin = new Address();
        $bin->setAddressPostCode('200434');
        $bin->setAddressCity('Shanghai');
        $bin->setAddressLine1('Room 309, No. 2');
        $bin->setAddressLine2('Lane 567, Che Zhan Bei road');
        $bin->setCountry($em->merge($this->getReference('country-china')));

        $em->persist($sensioLab);
        $em->persist($sinoeujobs);
        $em->persist($bin);
        $em->flush();

        $this->addReference('address-sensio', $sensioLab);
        $this->addReference('address-sinoeujobs', $sinoeujobs);
        $this->addReference('address-bin', $bin);
    }

    public function getOrder()
    {
        return 4; // the order in which fixtures will be loaded
    }
}