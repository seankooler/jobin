<?php
namespace Sinoeujobs\JobinBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Sinoeujobs\JobinBundle\Entity\User;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $bin = new User();
        $bin->setUserLogin('seankooler@hotmail.com');
        $bin->setUserPass('831004');
        $bin->setUserEmail('seankooler@hotmail.com');
        $bin->setUserFirstName('Bin');
        $bin->setUserLastName('XIAO');
        $bin->setUserActivationKey('55640042ce576');
        $bin->setUserStatus(2);

        $shuren = new User();
        $shuren->setUserLogin('surenren@hotmail.com');
        $shuren->setUserPass('840821');
        $shuren->setUserEmail('surenren@hotmail.com');
        $shuren->setUserFirstName('Shuren');
        $shuren->setUserLastName('SUN');
        $shuren->setUserActivationKey('55640042ce536');
        $shuren->setUserStatus(2);

        $fabien = new User();
        $fabien->setUserLogin('fabien@sensiolabs.com');
        $fabien->setUserPass('123456');
        $fabien->setUserEmail('fabien@sensiolabs.com');
        $fabien->setUserFirstName('Fabien');
        $fabien->setUserLastName('Potencier');
        $fabien->setUserActivationKey('53640042ce536');
        $fabien->setUserStatus(2);

        $em->persist($bin);
        $em->persist($shuren);
        $em->persist($fabien);
        $em->flush();

        $this->addReference('user-bin', $bin);
        $this->addReference('user-shuren', $shuren);
        $this->addReference('user-fabien', $fabien);
    }

    public function getOrder()
    {
        return 5; // the order in which fixtures will be loaded
    }
}