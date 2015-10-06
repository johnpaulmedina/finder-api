<?php

namespace Healthcare\types;

/**
 * Class representing ProviderTypeFilterAnalysisType
 *
 *
 * XSD Type: ProviderTypeFilterAnalysisType
 */
class ProviderTypeFilterAnalysisType
{

    /**
     * @property string $providerType
     */
    private $providerType = null;

    /**
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * Gets as providerType
     *
     * @return string
     */
    public function getProviderType()
    {
        return $this->providerType;
    }

    /**
     * Sets a new providerType
     *
     * @param string $providerType
     * @return self
     */
    public function setProviderType($providerType)
    {
        $this->providerType = $providerType;
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

