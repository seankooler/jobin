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
    private $id;

    /**
     * @var string
     */
    private $jobTypeLabel;


    /**
     * Get jobTypeId
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
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
     * Add jobs
     *
     * @param \Sinoeujobs\JobinBundle\Entity\Job $jobs
     * @return JobType
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

    public function __toString()
    {
        return $this->getJobTypeLabel() ? $this->getJobTypeLabel() : "";
    }
}
