<?php
namespace Cannibal\Bundle\AddressBundle\Entity;

/**
 * This class contains functionality for storing addresses
 */
class Address
{
    /**
     * @var integer $id
     */
    private $id;


    /**
     * @var string $designation
     */
    private $designation;

    /**
     * @var string $street
     */
    private $street;

    /**
     * @var string $city
     */
    private $city;

    /**
     * @var string $county
     */
    private $county;

    /**
     * @var string $country
     */
    private $country;

    /**
     * @var string $postcode
     */
    private $postCode;

    public function __construct()
    {
        $this->id = null;
        $this->street = null;
        $this->city = null;
        $this->country = null;
        $this->postCode = null;
        $this->county = null;
        $this->designation = null;
    }

    public function setDesignation($designation)
    {
        $this->designation = $designation;
    }

    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set street
     *
     * @param string $street
     * @return Address
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * Get street
     *
     * @return string 
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Address
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set county
     *
     * @param string $county
     * @return Address
     */
    public function setCounty($county)
    {
        $this->county = $county;
        return $this;
    }

    /**
     * Get county
     *
     * @return string 
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Address
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set postcode
     *
     * @param string $postcode
     * @return Address
     */
    public function setPostcode($postcode)
    {
        $this->postCode = $postcode;
        return $this;
    }

    /**
     * Get postcode
     *
     * @return string 
     */
    public function getPostcode()
    {
        return $this->postCode;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}