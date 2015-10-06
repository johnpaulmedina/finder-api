<?php

namespace Healthcare;

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
     * @property \Healthcare\CountyType $county
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
     * @return \Healthcare\CountyType
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * Sets a new county
     *
     * @param \Healthcare\CountyType $county
     * @return self
     */
    public function setCounty(\Healthcare\CountyType $county)
    {
        $this->county = $county;
        return $this;
    }


}

