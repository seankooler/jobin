<?php
namespace Sinoeujobs\JobinBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Sinoeujobs\JobinBundle\Entity\Address;

class LoadJobCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {

        $sensioLab = new Address();
        $sensioLab->setAddressProvince('Hauts-de-Seine');
        $sensioLab->setAddressPostCode('92115');
        $sensioLab->setAddressCity('Clichy');
        $sensioLab->setAddressLine1('92-98, Boulevard Victor Hugo');
        $sensioLab->setCountryId($em->merge($this->getReference('country-france')));

        $sensioLab = new Address();
        $sensioLab->setAddressProvince('Hauts-de-Seine');
        $sensioLab->setAddressPostCode('92115');
        $sensioLab->setAddressCity('Clichy');
        $sensioLab->setAddressLine1('92-98, Boulevard Victor Hugo');
        $sensioLab->setCountryId($em->merge($this->getReference('country-france')));

        $em->persist($sensioLab);
        $em->flush();

        $this->addReference('address-sensio', $sensioLab);
        $this->addReference('category-marketing', $marketing);
        $this->addReference('category-commercial', $commercial);
        $this->addReference('category-education', $education);
    }

    public function getOrder()
    {
        return 3; // the order in which fixtures will be loaded
    }
}