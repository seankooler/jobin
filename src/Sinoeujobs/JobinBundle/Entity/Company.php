<?php

namespace Sinoeujobs\JobinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Company
 */
class Company
{
    /**
     * @var integer
     */
    private $companyId;

    /**
     * @var string
     */
    private $companyName;

    /**
     * @var string
     */
    private $companyWebsite;

    /**
     * @var string
     */
    private $companyLogo;

    /**
     * @var boolean
     */
    private $companyIsActived;

    /**
     * @var \DateTime
     */
    private $companyCreatedAt;

    /**
     * @var \DateTime
     */
    private $companyUpdatedAt;

    /**
     * @var \DateTime
     */
    private $companyAccessUntil;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $addressId;

    /**
     * @var \Sinoeujobs\JobinBundle\Entity\Address
     */
    private $address;

    /**
     * @var \Sinoeujobs\JobinBundle\Entity\User
     */
    private $user;


    /**
     * Get companyId
     *
     * @return integer 
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * Set companyName
     *
     * @param string $companyName
     * @return Company
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Get companyName
     *
     * @return string 
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set companyWebsite
     *
     * @param string $companyWebsite
     * @return Company
     */
    public function setCompanyWebsite($companyWebsite)
    {
        $this->companyWebsite = $companyWebsite;

        return $this;
    }

    /**
     * Get companyWebsite
     *
     * @return string 
     */
    public function getCompanyWebsite()
    {
        return $this->companyWebsite;
    }

    /**
     * Set companyLogo
     *
     * @param string $companyLogo
     * @return Company
     */
    public function setCompanyLogo($companyLogo)
    {
        $this->companyLogo = $companyLogo;

        return $this;
    }

    /**
     * Get companyLogo
     *
     * @return string 
     */
    public function getCompanyLogo()
    {
        return $this->companyLogo;
    }

    /**
     * Set companyIsActived
     *
     * @param boolean $companyIsActived
     * @return Company
     */
    public function setCompanyIsActived($companyIsActived)
    {
        $this->companyIsActived = $companyIsActived;

        return $this;
    }

    /**
     * Get companyIsActived
     *
     * @return boolean 
     */
    public function getCompanyIsActived()
    {
        return $this->companyIsActived;
    }

    /**
     * Set companyCreatedAt
     *
     * @return Company
     */
    public function setCompanyCreatedAt()
    {
        if (!$this->getCompanyCreatedAt()) {
            $this->companyCreatedAt = new \DateTime();
        }

        return $this;
    }

    /**
     * Get companyCreatedAt
     *
     * @return \DateTime 
     */
    public function getCompanyCreatedAt()
    {
        return $this->companyCreatedAt;
    }

    /**
     * Set companyUpdatedAt
     *
     * @return Company
     */
    public function setCompanyUpdatedAt()
    {
        $this->companyUpdatedAt = new \DateTime();

        return $this;
    }

    /**
     * Get companyUpdatedAt
     *
     * @return \DateTime 
     */
    public function getCompanyUpdatedAt()
    {
        return $this->companyUpdatedAt;
    }

    /**
     * Set companyAccessUntil
     *
     * @param \DateTime $companyAccessUntil
     * @return Company
     */
    public function setCompanyAccessUntil($companyAccessUntil)
    {
        $this->companyAccessUntil = $companyAccessUntil;

        return $this;
    }

    /**
     * Get companyAccessUntil
     *
     * @return \DateTime 
     */
    public function getCompanyAccessUntil()
    {
        return $this->companyAccessUntil;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return Company
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

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
     * Set addressId
     *
     * @param integer $addressId
     * @return Company
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

    /**
     * Set address
     *
     * @param \Sinoeujobs\JobinBundle\Entity\Address $address
     * @return Company
     */
    public function setAddress(\Sinoeujobs\JobinBundle\Entity\Address $address = null)
    {
        $this->address = $address;

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
     * Set user
     *
     * @param \Sinoeujobs\JobinBundle\Entity\User $user
     * @return Company
     */
    public function setUser(\Sinoeujobs\JobinBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Sinoeujobs\JobinBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
