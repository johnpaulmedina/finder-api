<?php

namespace Healthcare\types;

/**
 * Class representing MetalTierFilterAnalysisType
 *
 *
 * XSD Type: MetalTierFilterAnalysisType
 */
class MetalTierFilterAnalysisType
{

    /**
     * @property string $metalTierType
     */
    private $metalTierType = null;

    /**
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * Gets as metalTierType
     *
     * @return string
     */
    public function getMetalTierType()
    {
        return $this->metalTierType;
    }

    /**
     * Sets a new metalTierType
     *
     * @param string $metalTierType
     * @return self
     */
    public function setMetalTierType($metalTierType)
    {
        $this->metalTierType = $metalTierType;
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

