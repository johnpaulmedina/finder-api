<?php

namespace Healthcare\ZipCodeValidationResponse;

/**
 * Class representing CountiesAType
 */
class CountiesAType
{

    /**
     * @property \Healthcare\types\CountyType[] $county
     */
    private $county = null;

    /**
     * Adds as county
     *
     * @return self
     * @param \Healthcare\types\CountyType $county
     */
    public function addToCounty(\Healthcare\types\CountyType $county)
    {
        $this->county[] = $county;
        return $this;
    }

    /**
     * isset county
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCounty($index)
    {
        return isset($this->county[$index]);
    }

    /**
     * unset county
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCounty($index)
    {
        unset($this->county[$index]);
    }

    /**
     * Gets as county
     *
     * @return \Healthcare\types\CountyType[]
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * Sets a new county
     *
     * @param \Healthcare\types\CountyType[] $county
     * @return self
     */
    public function setCounty(array $county)
    {
        $this->county = $county;
        return $this;
    }


}

