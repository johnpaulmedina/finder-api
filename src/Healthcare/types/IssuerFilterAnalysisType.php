<?php

namespace Healthcare\types;

/**
 * Class representing IssuerFilterAnalysisType
 *
 *
 * XSD Type: IssuerFilterAnalysisType
 */
class IssuerFilterAnalysisType
{

    /**
     * @property string $issuerID
     */
    private $issuerID = null;

    /**
     * @property string $issuerName
     */
    private $issuerName = null;

    /**
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * Gets as issuerID
     *
     * @return string
     */
    public function getIssuerID()
    {
        return $this->issuerID;
    }

    /**
     * Sets a new issuerID
     *
     * @param string $issuerID
     * @return self
     */
    public function setIssuerID($issuerID)
    {
        $this->issuerID = $issuerID;
        return $this;
    }

    /**
     * Gets as issuerName
     *
     * @return string
     */
    public function getIssuerName()
    {
        return $this->issuerName;
    }

    /**
     * Sets a new issuerName
     *
     * @param string $issuerName
     * @return self
     */
    public function setIssuerName($issuerName)
    {
        $this->issuerName = $issuerName;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * @param integer $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }


}

