<?php

namespace Sinoeujobs\JobinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JobCategory
 */
class JobCategory
{
    /**
     * @var integer
     */
    private $jobCategoryId;

    /**
     * @var string
     */
    private $jobCategoryLabel;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->jobCategoryId;
    }

    /**
     * Set jobCategoryLabel
     *
     * @param string $jobCategoryLabel
     * @return JobCategory
     */
    public function setJobCategoryLabel($jobCategoryLabel)
    {
        $this->jobCategoryLabel = $jobCategoryLabel;

        return $this;
    }

    /**
     * Get jobCategoryLabel
     *
     * @return string 
     */
    public function getJobCategoryLabel()
    {
        return $this->jobCategoryLabel;
    }
}
