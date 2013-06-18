<?php
namespace Cannibal\Bundle\AddressBundle\Entity;

/**
 * This class contains data and functionality for phone numbers
 */
class PhoneNumber
{
    const TYPE_LANDLINE = 0;
    const TYPE_MOBILE = 1;

    /**
     * @var string $countryCode
     */
    private $countryCode;

    /**
     * @var string $number
     */
    private $number;

    /**
     * @var string $numberCanonical
     */
    private $numberCanonical;

    /**
     * @var string $template
     */
    private $template;

    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer type
     */
    private $type;

    public function __construct()
    {
        $this->id = null;
        $this->template = null;
        $this->numberCanonical = null;
        $this->number = null;
        $this->countryCode = null;
        $this->type = null;
    }

    /**
     * This function sets the type of the phone number.
     *
     * @param int $type
     * @return mixed
     */
    public function setType($type)
    {
        switch($type) {
            case static::TYPE_MOBILE:
            case static::TYPE_LANDLINE:
                $this->type = $type;
                break;
        }

        return $type;
    }

    /**
     * This function returns the type of the phonenumber
     *
     * @return int|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * This function returns the type as a string
     *
     * @return string
     */
    public function getTypeString()
    {
        $out = 'Unknown';
        switch($this->type) {
            case static::TYPE_LANDLINE:
                $out = 'Landline';
                break;
            case static::TYPE_MOBILE:
                $out = 'Mobile';
                break;
        }
        return $out;
    }


    /**
     * Set countryCode
     *
     * @param string $countryCode
     * @return PhoneNumber
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * Get countryCode
     *
     * @return string 
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Set number
     *
     * @param string $number
     * @return PhoneNumber
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Get number
     *
     * @return string 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set numberCanonical
     *
     * @param string $numberCanonical
     * @return PhoneNumber
     */
    public function setNumberCanonical($numberCanonical)
    {
        $this->numberCanonical = $numberCanonical;
        return $this;
    }

    /**
     * Get numberCanonical
     *
     * @return string 
     */
    public function getNumberCanonical()
    {
        return $this->numberCanonical;
    }

    /**
     * Set template
     *
     * @param string $template
     * @return PhoneNumber
     */
    public function setTemplate($template)
    {
        $this->template = $template;
        return $this;
    }

    /**
     * Get template
     *
     * @return string 
     */
    public function getTemplate()
    {
        return $this->template;
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

    public function getNumberString()
    {
        if(isset($this->template))
        {
            $out = 'templated';
        }
        else {
            $out = sprintf('(%s) %s', $this->getCountryCode(), $this->getNumber());
        }
        return $out;
    }
}