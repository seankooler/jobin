<?php
namespace Sinoeujobs\JobinBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Sinoeujobs\JobinBundle\Entity\JobType;

class LoadJobTypeData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $fullTime = new JobType();
        $fullTime->setJobTypeLabel('full time');

        $partTime = new JobType();
        $partTime->setJobTypeLabel('part time');

        $internship = new JobType();
        $internship->setJobTypeLabel('internship');

        $em->persist($fullTime);
        $em->persist($partTime);
        $em->persist($internship);
        $em->flush();

        $this->addReference('type-full-time', $fullTime);
        $this->addReference('type-part-time', $partTime);
        $this->addReference('type-internship', $internship);
    }

    public function getOrder()
    {
        return 3; // the order in which fixtures will be loaded
    }
}