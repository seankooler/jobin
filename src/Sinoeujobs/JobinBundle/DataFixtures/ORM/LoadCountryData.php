<?php
namespace Sinoeujobs\JobinBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Sinoeujobs\JobinBundle\Entity\Country;

class LoadCountryData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $france = new Country();
        $france->setCountryName('France');
        $france->setCountryCode('fr');

        $china = new Country();
        $china->setCountryName('China');
        $china->setCountryCode('cn');

        $belg = new Country();
        $belg->setCountryName('Belg');
        $belg->setCountryCode('be');

        $switzerland = new Country();
        $switzerland->setCountryName('Switzerland');
        $switzerland->setCountryCode('ch');

        $em->persist($france);
        $em->persist($china);
        $em->persist($belg);
        $em->persist($switzerland);
        $em->flush();

        $this->addReference('country-france', $france);
        $this->addReference('country-china', $china);
        $this->addReference('country-belg', $belg);
        $this->addReference('country-switzerland', $switzerland);
    }

    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}