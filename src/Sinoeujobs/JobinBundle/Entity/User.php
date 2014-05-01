<?php

namespace Sinoeujobs\JobinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 */
class User
{
    /**
     * @var integer
     */
    private $userId;

    /**
     * @var string
     */
    private $userLogin;

    /**
     * @var string
     */
    private $userPass;

    /**
     * @var string
     */
    private $userEmail;

    /**
     * @var \DateTime
     */
    private $userRegistered;

    /**
     * @var string
     */
    private $userActivationKey;

    /**
     * @var integer
     */
    private $userStatus;


    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set userLogin
     *
     * @param string $userLogin
     * @return User
     */
    public function setUserLogin($userLogin)
    {
        $this->userLogin = $userLogin;

        return $this;
    }

    /**
     * Get userLogin
     *
     * @return string 
     */
    public function getUserLogin()
    {
        return $this->userLogin;
    }

    /**
     * Set userPass
     *
     * @param string $userPass
     *
     * @todo encrypt password
     * @return User
     */
    public function setUserPass($userPass)
    {
        $this->userPass = $userPass;

        return $this;
    }

    /**
     * Get userPass
     *
     * @return string 
     */
    public function getUserPass()
    {
        return $this->userPass;
    }

    /**
     * Set userEmail
     *
     * @param string $userEmail
     * @return User
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    /**
     * Get userEmail
     *
     * @return string 
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * Set userRegistered
     *
     * @return User
     */
    public function setUserRegistered()
    {
        if (!$this->getUserRegistered()) {
            $this->userRegistered = new \DateTime();
        }

        return $this;
    }

    /**
     * Get userRegistered
     *
     * @return \DateTime 
     */
    public function getUserRegistered()
    {
        return $this->userRegistered;
    }

    /**
     * Set userActivationKey
     *
     * @param string $userActivationKey
     * @return User
     */
    public function setUserActivationKey($userActivationKey)
    {
        $this->userActivationKey = $userActivationKey;

        return $this;
    }

    /**
     * Get userActivationKey
     *
     * @return string 
     */
    public function getUserActivationKey()
    {
        return $this->userActivationKey;
    }

    /**
     * Set userStatus
     *
     * @param integer $userStatus
     * @return User
     */
    public function setUserStatus($userStatus)
    {
        $this->userStatus = $userStatus;

        return $this;
    }

    /**
     * Get userStatus
     *
     * @return integer 
     */
    public function getUserStatus()
    {
        return $this->userStatus;
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
     * @return User
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
