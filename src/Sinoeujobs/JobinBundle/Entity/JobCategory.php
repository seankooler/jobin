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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $jobs;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->jobs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get jobCategoryId
     *
     * @return integer 
     */
    public function getJobCategoryId()
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

    /**
     * Add jobs
     *
     * @param \Sinoeujobs\JobinBundle\Entity\Job $jobs
     * @return JobCategory
     */
    public function addJob(\Sinoeujobs\JobinBundle\Entity\Job $jobs)
    {
        $this->jobs[] = $jobs;

        return $this;
    }

    /**
     * Remove jobs
     *
     * @param \Sinoeujobs\JobinBundle\Entity\Job $jobs
     */
    public function removeJob(\Sinoeujobs\JobinBundle\Entity\Job $jobs)
    {
        $this->jobs->removeElement($jobs);
    }

    /**
     * Get jobs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getJobs()
    {
        return $this->jobs;
    }
}
