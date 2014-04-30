<?php

namespace Sinoeujobs\JobinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Address
 */
class Address
{
    /**
     * @var integer
     */
    private $addressId;

    /**
     * @var string
     */
    private $addressProvince;

    /**
     * @var string
     */
    private $addressPostCode;

    /**
     * @var string
     */
    private $addressCity;

    /**
     * @var string
     */
    private $addressLine1;

    /**
     * @var string
     */
    private $addressLine2;

    /**
     * @var string
     */
    private $addressLine3;

    /**
     * @var integer
     */
    private $countryId;

    /**
     * @var string
     */
    private $manyToOne;


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
     * Set addressProvince
     *
     * @param string $addressProvince
     * @return Address
     */
    public function setAddressProvince($addressProvince)
    {
        $this->addressProvince = $addressProvince;

        return $this;
    }

    /**
     * Get addressProvince
     *
     * @return string 
     */
    public function getAddressProvince()
    {
        return $this->addressProvince;
    }

    /**
     * Set addressPostCode
     *
     * @param string $addressPostCode
     * @return Address
     */
    public function setAddressPostCode($addressPostCode)
    {
        $this->addressPostCode = $addressPostCode;

        return $this;
    }

    /**
     * Get addressPostCode
     *
     * @return string 
     */
    public function getAddressPostCode()
    {
        return $this->addressPostCode;
    }

    /**
     * Set addressCity
     *
     * @param string $addressCity
     * @return Address
     */
    public function setAddressCity($addressCity)
    {
        $this->addressCity = $addressCity;

        return $this;
    }

    /**
     * Get addressCity
     *
     * @return string 
     */
    public function getAddressCity()
    {
        return $this->addressCity;
    }

    /**
     * Set addressLine1
     *
     * @param string $addressLine1
     * @return Address
     */
    public function setAddressLine1($addressLine1)
    {
        $this->addressLine1 = $addressLine1;

        return $this;
    }

    /**
     * Get addressLine1
     *
     * @return string 
     */
    public function getAddressLine1()
    {
        return $this->addressLine1;
    }

    /**
     * Set addressLine2
     *
     * @param string $addressLine2
     * @return Address
     */
    public function setAddressLine2($addressLine2)
    {
        $this->addressLine2 = $addressLine2;

        return $this;
    }

    /**
     * Get addressLine2
     *
     * @return string 
     */
    public function getAddressLine2()
    {
        return $this->addressLine2;
    }

    /**
     * Set addressLine3
     *
     * @param string $addressLine3
     * @return Address
     */
    public function setAddressLine3($addressLine3)
    {
        $this->addressLine3 = $addressLine3;

        return $this;
    }

    /**
     * Get addressLine3
     *
     * @return string 
     */
    public function getAddressLine3()
    {
        return $this->addressLine3;
    }

    /**
     * Set countryId
     *
     * @param integer $countryId
     * @return Address
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;

        return $this;
    }

    /**
     * Get countryId
     *
     * @return integer 
     */
    public function getCountryId()
    {
        return $this->countryId;
    }
	
    /**
     * @var \Sinoeujobs\JobinBundle\Entity\Country
     */
    private $country;


    /**
     * Set country
     *
     * @param \Sinoeujobs\JobinBundle\Entity\Country $country
     * @return Address
     */
    public function setCountry(\Sinoeujobs\JobinBundle\Entity\Country $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \Sinoeujobs\JobinBundle\Entity\Country 
     */
    public function getCountry()
    {
        return $this->country;
    }
}
