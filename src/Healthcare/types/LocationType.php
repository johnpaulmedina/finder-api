<?php

namespace Healthcare\types;

/**
 * Class representing LocationType
 *
 *
 * XSD Type: LocationType
 */
class LocationType
{

    /**
     * @property string $zipCode
     */
    private $zipCode = null;

    /**
     * @property \Healthcare\types\CountyType $county
     */
    private $county = null;

    /**
     * Gets as zipCode
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Sets a new zipCode
     *
     * @param string $zipCode
     * @return self
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    /**
     * Gets as county
     *
     * @return \Healthcare\types\CountyType
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * Sets a new county
     *
     * @param \Healthcare\types\CountyType $county
     * @return self
     */
    public function setCounty(\Healthcare\types\CountyType $county)
    {
        $this->county = $county;
        return $this;
    }


}

