<?php

namespace Healthcare;

/**
 * Class representing ZipCodeValidationResponse
 */
class ZipCodeValidationResponse
{

    /**
     * @property \Healthcare\types\ResponseHeaderType $responseHeader
     */
    private $responseHeader = null;

    /**
     * @property \Healthcare\types\CountyType[] $counties
     */
    private $counties = null;

    /**
     * @property \Healthcare\ZipCodeValidationRequest $zipCodeValidationRequest
     */
    private $zipCodeValidationRequest = null;

    /**
     * Gets as responseHeader
     *
     * @return \Healthcare\types\ResponseHeaderType
     */
    public function getResponseHeader()
    {
        return $this->responseHeader;
    }

    /**
     * Sets a new responseHeader
     *
     * @param \Healthcare\types\ResponseHeaderType $responseHeader
     * @return self
     */
    public function setResponseHeader(\Healthcare\types\ResponseHeaderType $responseHeader)
    {
        $this->responseHeader = $responseHeader;
        return $this;
    }

    /**
     * Adds as county
     *
     * @return self
     * @param \Healthcare\types\CountyType $county
     */
    public function addToCounties(\Healthcare\types\CountyType $county)
    {
        $this->counties[] = $county;
        return $this;
    }

    /**
     * isset counties
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCounties($index)
    {
        return isset($this->counties[$index]);
    }

    /**
     * unset counties
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCounties($index)
    {
        unset($this->counties[$index]);
    }

    /**
     * Gets as counties
     *
     * @return \Healthcare\types\CountyType[]
     */
    public function getCounties()
    {
        return $this->counties;
    }

    /**
     * Sets a new counties
     *
     * @param \Healthcare\types\CountyType[] $counties
     * @return self
     */
    public function setCounties(array $counties)
    {
        $this->counties = $counties;
        return $this;
    }

    /**
     * Gets as zipCodeValidationRequest
     *
     * @return \Healthcare\ZipCodeValidationRequest
     */
    public function getZipCodeValidationRequest()
    {
        return $this->zipCodeValidationRequest;
    }

    /**
     * Sets a new zipCodeValidationRequest
     *
     * @param \Healthcare\ZipCodeValidationRequest $zipCodeValidationRequest
     * @return self
     */
    public function setZipCodeValidationRequest(\Healthcare\ZipCodeValidationRequest $zipCodeValidationRequest)
    {
        $this->zipCodeValidationRequest = $zipCodeValidationRequest;
        return $this;
    }


}

