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
    private $jobCompanyWebsite;

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
    private $jobExpiresAt;

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
     * @var \Sinoeujobs\JobinBundle\Entity\Address
     */
    private $address;

    /**
     * @var \Sinoeujobs\JobinBundle\Entity\JobCategory
     */
    private $jobCategory;

    /**
     * @var \Sinoeujobs\JobinBundle\Entity\JobType
     */
    private $jobType;


    /**
     * Get jobId
     *
     * @return integer 
     */
    public function getJobId()
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
     * Set jobCompanyWebsite
     *
     * @param string $jobCompanyWebsite
     * @return Job
     */
    public function setJobCompanyWebsite($jobCompanyWebsite)
    {
        $this->jobCompanyWebsite = $jobCompanyWebsite;

        return $this;
    }

    /**
     * Get jobCompanyWebsite
     *
     * @return string
     */
    public function getJobCompanyWebsite()
    {
        return $this->jobCompanyWebsite;
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
     * @return Job
     */
    public function setJobCreatedAt()
    {
        if (!$this->getJobCreatedAt()) {
            $this->jobCreatedAt = new \DateTime();
        }
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
     * @return Job
     */
    public function setJobUpdatedAt()
    {
        $this->jobUpdatedAt = new \DateTime();

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
     * Set jobExpiresAt
     *
     * @param \DateTime $jobExpiresAt
     * @return Job
     */
    public function setJobExpiresAt($jobExpiresAt)
    {
        $this->jobExpiresAt = $jobExpiresAt;

        return $this;
    }

    /**
     * Get jobExpiresAt
     *
     * @return \DateTime 
     */
    public function getJobExpiresAt()
    {
        return $this->jobExpiresAt;
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
    private function setJobTypeId($jobTypeId)
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
    private function setJobCategoryId($jobCategoryId)
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
    private function setOwnerId($ownerId)
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
    private  function setAddressId($addressId)
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

    /**
     * Set address
     *
     * @param \Sinoeujobs\JobinBundle\Entity\Address $address
     * @return Job
     */
    public function setAddress(\Sinoeujobs\JobinBundle\Entity\Address $address = null)
    {
        $this->address = $address;
        $this->setAddressId($this->address->getAddressId());

        return $this;
    }

    /**
     * Get address
     *
     * @return \Sinoeujobs\JobinBundle\Entity\Address 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set jobCategory
     *
     * @param \Sinoeujobs\JobinBundle\Entity\JobCategory $jobCategory
     * @return Job
     */
    public function setJobCategory(\Sinoeujobs\JobinBundle\Entity\JobCategory $jobCategory = null)
    {
        $this->jobCategory = $jobCategory;
        $this->setJobCategoryId($this->jobCategory->getJobCategoryId());

        return $this;
    }

    /**
     * Get jobCategory
     *
     * @return \Sinoeujobs\JobinBundle\Entity\JobCategory 
     */
    public function getJobCategory()
    {
        return $this->jobCategory;
    }

    /**
     * Set jobType
     *
     * @param \Sinoeujobs\JobinBundle\Entity\JobType $jobType
     * @return Job
     */
    public function setJobType(\Sinoeujobs\JobinBundle\Entity\JobType $jobType = null)
    {
        $this->jobType = $jobType;
        $this->setJobTypeId($this->jobType->getJobTypeId());

        return $this;
    }

    /**
     * Get jobType
     *
     * @return \Sinoeujobs\JobinBundle\Entity\JobType 
     */
    public function getJobType()
    {
        return $this->jobType;
    }
    /**
     * @var \Sinoeujobs\JobinBundle\Entity\User
     */
    private $owner;


    /**
     * Set owner
     *
     * @param \Sinoeujobs\JobinBundle\Entity\User $owner
     * @return Job
     */
    public function setOwner(\Sinoeujobs\JobinBundle\Entity\User $owner = null)
    {
        $this->owner = $owner;
        $this->setOwnerId($this->owner->getUserId());

        return $this;
    }

    /**
     * Get owner
     *
     * @return \Sinoeujobs\JobinBundle\Entity\User 
     */
    public function getOwner()
    {
        return $this->owner;
    }
}
