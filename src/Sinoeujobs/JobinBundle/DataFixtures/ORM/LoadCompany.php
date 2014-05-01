<?php
namespace Sinoeujobs\JobinBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Sinoeujobs\JobinBundle\Entity\Company;

class LoadCompanyData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $sensioLabs = new Company();
        $sensioLabs->setCompanyName('Sensio Labs');
        $sensioLabs->setCompanyLogo('sensio-labs.gif');
        $sensioLabs->setCompanyWebsite('http://www.sensiolabs.com/');
        $sensioLabs->setCompanyIsActived(true);
        $sensioLabs->setCompanyAccessUntil(new \DateTime('+100 days'));
        $sensioLabs->setAddress($em->merge($this->getReference('address-sensio')));
        $sensioLabs->setUser($em->merge($this->getReference('user-fabien')));

        $sinoeujobs = new Company();
        $sinoeujobs->setCompanyName('Sinoeujobs');
        $sinoeujobs->setCompanyLogo('sinoeujobs.gif');
        $sinoeujobs->setCompanyWebsite('http://www.sinoeujobs.com/');
        $sinoeujobs->setCompanyIsActived(true);
        $sinoeujobs->setCompanyAccessUntil(null);
        $sinoeujobs->setAddress($em->merge($this->getReference('address-sinoeujobs')));
        $sinoeujobs->setUser($em->merge($this->getReference('user-bin')));

        $em->persist($sensioLabs);
        $em->persist($sensioLabs);
        $em->flush();

        $this->addReference('company-sensio-labs', $sensioLabs);
        $this->addReference('company-sinoeujobs', $sinoeujobs);
    }

    public function getOrder()
    {
        return 5; // the order in which fixtures will be loaded
    }
}