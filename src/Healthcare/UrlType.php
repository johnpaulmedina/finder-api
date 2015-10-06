<?php

namespace Healthcare;

/**
 * Class representing UrlType
 *
 *
 * XSD Type: UrlType
 */
class UrlType
{

    /**
     * @property string $uRLCode
     */
    private $uRLCode = null;

    /**
     * @property string $uRLAddress
     */
    private $uRLAddress = null;

    /**
     * @property string $alternateText
     */
    private $alternateText = null;

    /**
     * Gets as uRLCode
     *
     * @return string
     */
    public function getURLCode()
    {
        return $this->uRLCode;
    }

    /**
     * Sets a new uRLCode
     *
     * @param string $uRLCode
     * @return self
     */
    public function setURLCode($uRLCode)
    {
        $this->uRLCode = $uRLCode;
        return $this;
    }

    /**
     * Gets as uRLAddress
     *
     * @return string
     */
    public function getURLAddress()
    {
        return $this->uRLAddress;
    }

    /**
     * Sets a new uRLAddress
     *
     * @param string $uRLAddress
     * @return self
     */
    public function setURLAddress($uRLAddress)
    {
        $this->uRLAddress = $uRLAddress;
        return $this;
    }

    /**
     * Gets as alternateText
     *
     * @return string
     */
    public function getAlternateText()
    {
        return $this->alternateText;
    }

    /**
     * Sets a new alternateText
     *
     * @param string $alternateText
     * @return self
     */
    public function setAlternateText($alternateText)
    {
        $this->alternateText = $alternateText;
        return $this;
    }


}

