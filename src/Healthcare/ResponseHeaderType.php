<?php

namespace Healthcare;

/**
 * Class representing ResponseHeaderType
 *
 *
 * XSD Type: ResponseHeaderType
 */
class ResponseHeaderType
{

    /**
     * @property string $returnCode
     */
    private $returnCode = null;

    /**
     * @property string[] $errorMessage
     */
    private $errorMessage = null;

    /**
     * Gets as returnCode
     *
     * @return string
     */
    public function getReturnCode()
    {
        return $this->returnCode;
    }

    /**
     * Sets a new returnCode
     *
     * @param string $returnCode
     * @return self
     */
    public function setReturnCode($returnCode)
    {
        $this->returnCode = $returnCode;
        return $this;
    }

    /**
     * Adds as errorMessage
     *
     * @return self
     * @param string $errorMessage
     */
    public function addToErrorMessage($errorMessage)
    {
        $this->errorMessage[] = $errorMessage;
        return $this;
    }

    /**
     * isset errorMessage
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetErrorMessage($index)
    {
        return isset($this->errorMessage[$index]);
    }

    /**
     * unset errorMessage
     *
     * @param scalar $index
     * @return void
     */
    public function unsetErrorMessage($index)
    {
        unset($this->errorMessage[$index]);
    }

    /**
     * Gets as errorMessage
     *
     * @return string[]
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * Sets a new errorMessage
     *
     * @param string[] $errorMessage
     * @return self
     */
    public function setErrorMessage(array $errorMessage)
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }


}

