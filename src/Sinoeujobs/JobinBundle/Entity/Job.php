<?php

namespace Sinoeujobs\JobinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Job
 */
class Job
{
    /**
     * @var integer
     */
    private $jobId;

    /**
     * @var string
     */
    private $jobTitle;

    /**
     * @var string
     */
    private $jobSlug;

    /**
     * @var string
     */
    private $jobCompanyName;

    /**
     * @var string
     */
    private $jobCompanyLogo;

    /**
     * @var string
     */
    private $jobDescription;

    /**
     * @var string
     */
    private $jobApply;

    /**
     * @var \DateTime
     */
    private $jobCreatedAt;

    /**
     * @var \DateTime
     */
    private $jobUpdatedAt;

    /**
     * @var \DateTime
     */
    private $jobExporesAt;

    /**
     * @var boolean
     */
    private $jobIsApproved;

    /**
     * @var boolean
     */
    private $jobIsActive;

    /**
     * @var boolean
     */
    private $jobIsFilled;

    /**
     * @var integer
     */
    private $jobTypeId;

    /**
     * @var integer
     */
    private $jobCategoryId;

    /**
     * @var integer
     */
    private $ownerId;

    /**
     * @var integer
     */
    private $addressId;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->jobId;
    }

    /**
     * Set jobTitle
     *
     * @param string $jobTitle
     * @return Job
     */
    public function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;

        return $this;
    }

    /**
     * Get jobTitle
     *
     * @return string 
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * Set jobSlug
     *
     * @param string $jobSlug
     * @return Job
     */
    public function setJobSlug($jobSlug)
    {
        $this->jobSlug = $jobSlug;

        return $this;
    }

    /**
     * Get jobSlug
     *
     * @return string 
     */
    public function getJobSlug()
    {
        return $this->jobSlug;
    }

    /**
     * Set jobCompanyName
     *
     * @param string $jobCompanyName
     * @return Job
     */
    public function setJobCompanyName($jobCompanyName)
    {
        $this->jobCompanyName = $jobCompanyName;

        return $this;
    }

    /**
     * Get jobCompanyName
     *
     * @return string 
     */
    public function getJobCompanyName()
    {
        return $this->jobCompanyName;
    }

    /**
     * Set jobCompanyLogo
     *
     * @param string $jobCompanyLogo
     * @return Job
     */
    public function setJobCompanyLogo($jobCompanyLogo)
    {
        $this->jobCompanyLogo = $jobCompanyLogo;

        return $this;
    }

    /**
     * Get jobCompanyLogo
     *
     * @return string 
     */
    public function getJobCompanyLogo()
    {
        return $this->jobCompanyLogo;
    }

    /**
     * Set jobDescription
     *
     * @param string $jobDescription
     * @return Job
     */
    public function setJobDescription($jobDescription)
    {
        $this->jobDescription = $jobDescription;

        return $this;
    }

    /**
     * Get jobDescription
     *
     * @return string 
     */
    public function getJobDescription()
    {
        return $this->jobDescription;
    }

    /**
     * Set jobApply
     *
     * @param string $jobApply
     * @return Job
     */
    public function setJobApply($jobApply)
    {
        $this->jobApply = $jobApply;

        return $this;
    }

    /**
     * Get jobApply
     *
     * @return string 
     */
    public function getJobApply()
    {
        return $this->jobApply;
    }

    /**
     * Set jobCreatedAt
     *
     * @param \DateTime $jobCreatedAt
     * @return Job
     */
    public function setJobCreatedAt($jobCreatedAt)
    {
        $this->jobCreatedAt = $jobCreatedAt;

        return $this;
    }

    /**
     * Get jobCreatedAt
     *
     * @return \DateTime 
     */
    public function getJobCreatedAt()
    {
        return $this->jobCreatedAt;
    }

    /**
     * Set jobUpdatedAt
     *
     * @param \DateTime $jobUpdatedAt
     * @return Job
     */
    public function setJobUpdatedAt($jobUpdatedAt)
    {
        $this->jobUpdatedAt = $jobUpdatedAt;

        return $this;
    }

    /**
     * Get jobUpdatedAt
     *
     * @return \DateTime 
     */
    public function getJobUpdatedAt()
    {
        return $this->jobUpdatedAt;
    }

    /**
     * Set jobExporesAt
     *
     * @param \DateTime $jobExporesAt
     * @return Job
     */
    public function setJobExporesAt($jobExporesAt)
    {
        $this->jobExporesAt = $jobExporesAt;

        return $this;
    }

    /**
     * Get jobExporesAt
     *
     * @return \DateTime 
     */
    public function getJobExporesAt()
    {
        return $this->jobExporesAt;
    }

    /**
     * Set jobIsApproved
     *
     * @param boolean $jobIsApproved
     * @return Job
     */
    public function setJobIsApproved($jobIsApproved)
    {
        $this->jobIsApproved = $jobIsApproved;

        return $this;
    }

    /**
     * Get jobIsApproved
     *
     * @return boolean 
     */
    public function getJobIsApproved()
    {
        return $this->jobIsApproved;
    }

    /**
     * Set jobIsActive
     *
     * @param boolean $jobIsActive
     * @return Job
     */
    public function setJobIsActive($jobIsActive)
    {
        $this->jobIsActive = $jobIsActive;

        return $this;
    }

    /**
     * Get jobIsActive
     *
     * @return boolean 
     */
    public function getJobIsActive()
    {
        return $this->jobIsActive;
    }

    /**
     * Set jobIsFilled
     *
     * @param boolean $jobIsFilled
     * @return Job
     */
    public function setJobIsFilled($jobIsFilled)
    {
        $this->jobIsFilled = $jobIsFilled;

        return $this;
    }

    /**
     * Get jobIsFilled
     *
     * @return boolean 
     */
    public function getJobIsFilled()
    {
        return $this->jobIsFilled;
    }

    /**
     * Set jobTypeId
     *
     * @param integer $jobTypeId
     * @return Job
     */
    public function setJobTypeId($jobTypeId)
    {
        $this->jobTypeId = $jobTypeId;

        return $this;
    }

    /**
     * Get jobTypeId
     *
     * @return integer 
     */
    public function getJobTypeId()
    {
        return $this->jobTypeId;
    }

    /**
     * Set jobCategoryId
     *
     * @param integer $jobCategoryId
     * @return Job
     */
    public function setJobCategoryId($jobCategoryId)
    {
        $this->jobCategoryId = $jobCategoryId;

        return $this;
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
     * Set ownerId
     *
     * @param integer $ownerId
     * @return Job
     */
    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;

        return $this;
    }

    /**
     * Get ownerId
     *
     * @return integer 
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }

    /**
     * Set addressId
     *
     * @param integer $addressId
     * @return Job
     */
    public function setAddressId($addressId)
    {
        $this->addressId = $addressId;

        return $this;
    }

    /**
     * Get addressId
     *
     * @return integer 
     */
    public function getAddressId()
    {
        return $this->addressId;
    }
}
