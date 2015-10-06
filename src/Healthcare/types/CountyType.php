<?php

namespace Healthcare\types;

/**
 * Class representing CountyType
 *
 *
 * XSD Type: CountyType
 */
class CountyType
{

    /**
     * @property string $fipsCode
     */
    private $fipsCode = null;

    /**
     * @property string $countyName
     */
    private $countyName = null;

    /**
     * @property string $stateCode
     */
    private $stateCode = null;

    /**
     * Gets as fipsCode
     *
     * @return string
     */
    public function getFipsCode()
    {
        return $this->fipsCode;
    }

    /**
     * Sets a new fipsCode
     *
     * @param string $fipsCode
     * @return self
     */
    public function setFipsCode($fipsCode)
    {
        $this->fipsCode = $fipsCode;
        return $this;
    }

    /**
     * Gets as countyName
     *
     * @return string
     */
    public function getCountyName()
    {
        return $this->countyName;
    }

    /**
     * Sets a new countyName
     *
     * @param string $countyName
     * @return self
     */
    public function setCountyName($countyName)
    {
        $this->countyName = $countyName;
        return $this;
    }

    /**
     * Gets as stateCode
     *
     * @return string
     */
    public function getStateCode()
    {
        return $this->stateCode;
    }

    /**
     * Sets a new stateCode
     *
     * @param string $stateCode
     * @return self
     */
    public function setStateCode($stateCode)
    {
        $this->stateCode = $stateCode;
        return $this;
    }


}

