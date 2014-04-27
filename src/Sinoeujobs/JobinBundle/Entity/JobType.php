<?php

namespace Sinoeujobs\JobinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JobType
 */
class JobType
{
    /**
     * @var integer
     */
    private $jobTypeId;

    /**
     * @var string
     */
    private $jobTypeLabel;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->jobTypeId;
    }

    /**
     * Set jobTypeLabel
     *
     * @param string $jobTypeLabel
     * @return JobType
     */
    public function setJobTypeLabel($jobTypeLabel)
    {
        $this->jobTypeLabel = $jobTypeLabel;

        return $this;
    }

    /**
     * Get jobTypeLabel
     *
     * @return string 
     */
    public function getJobTypeLabel()
    {
        return $this->jobTypeLabel;
    }
}
