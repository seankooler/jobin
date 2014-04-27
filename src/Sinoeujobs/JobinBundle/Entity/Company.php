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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->companyId;
    }

    /**
     * Set companyName
     *
     * @param string $companyName
     * @return company
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
     * @return company
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
     * @return company
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
     * @return company
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
     * Set companyAccessUntil
     *
     * @param \DateTime $companyAccessUntil
     * @return company
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
     * @return company
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
     * @return company
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
