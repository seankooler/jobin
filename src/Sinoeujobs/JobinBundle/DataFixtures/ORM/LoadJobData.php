<?php
namespace Sinoeujobs\JobinBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Ibw\JobeetBundle\Entity\Job;

class LoadJobData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $job_sensio_labs = new Job();
        $job_sensio_labs->setJobCategory($em->merge($this->getReference('category-it')));
        $job_sensio_labs->setJobType($em->merge($this->getReference('type-full-time')));
        $job_sensio_labs->setJobCompanyName('Sensio Labs');
        $job_sensio_labs->setJobCompanyLogo('sensio-labs.gif');
        $job_sensio_labs->setJobCompanyWebsite('http://www.sensiolabs.com/');
        $job_sensio_labs->setJobTitle('Web Developer');
        $job_sensio_labs->setJobDescription('You\'ve already developed websites with symfony and you want to work with Open-Source technologies. You have a minimum of 3 years experience in web development with PHP or Java and you wish to participate to development of Web 2.0 sites using the best frameworks available.');
        $job_sensio_labs->setJobApply('Send your resume to fabien.potencier [at] sensio.com');
        $job_sensio_labs->setJobIsApproved(true);
        $job_sensio_labs->setJobIsActive(true);
        $job_sensio_labs->setJobIsFilled(false);
        $job_sensio_labs->setOwner($em->merge($this->getReference('user-bin-xiao')));
        $job_sensio_labs->setJobExpiresAt(new \DateTime('+30 days'));

        $job_sinoeujobs = new Job();
        $job_sinoeujobs->setJobCategory($em->merge($this->getReference('category-marketing')));
        $job_sinoeujobs->getJobType($em->merge($this->getReference('type-internship')));
        $job_sinoeujobs->setJobCompanyName('Sinoeujobs');
        $job_sinoeujobs->setJobCompanyLogo('sinoeujobs.gif');
        $job_sinoeujobs->setJobCompanyWebsite('http://www.sinoeujobs.com/');
        $job_sinoeujobs->setJobTitle('Marketing Developer');
        $job_sinoeujobs->setJobDescription('You have a minimum of 3 years experience in web marketing. You are interested in working in a start-up company.');
        $job_sinoeujobs->setJobApply('Send your resume to info@sinoeujobs.com');
        $job_sinoeujobs->setJobIsApproved(true);
        $job_sinoeujobs->setJobIsActive(true);
        $job_sinoeujobs->setJobIsFilled(false);
        $job_sinoeujobs->setOwner($em->merge($this->getReference('user-shu-ren')));
        $job_sinoeujobs->setJobExpiresAt(new \DateTime('+40 days'));

        $em->persist($job_sensio_labs);
        $em->persist($job_sinoeujobs);
        $em->flush();
    }

    public function getOrder()
    {
        return 7; // the order in which fixtures will be loaded
    }
}