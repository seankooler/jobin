<?php
namespace Sinoeujobs\JobinBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Sinoeujobs\JobinBundle\Entity\JobCategory;

class LoadJobCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $it = new JobCategory();
        $it->setJobCategoryLabel('IT');

        $marketing = new JobCategory();
        $marketing->setJobCategoryLabel('Marketing');

        $commercial = new JobCategory();
        $commercial->setJobCategoryLabel('Commercial');

        $education = new JobCategory();
        $education->setJobCategoryLabel('Education');

        $em->persist($it);
        $em->persist($marketing);
        $em->persist($commercial);
        $em->persist($education);
        $em->flush();

        $this->addReference('category-it', $it);
        $this->addReference('category-marketing', $marketing);
        $this->addReference('category-commercial', $commercial);
        $this->addReference('category-education', $education);
    }

    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}