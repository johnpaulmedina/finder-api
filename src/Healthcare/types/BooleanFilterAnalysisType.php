<?php

namespace Healthcare\types;

/**
 * Class representing BooleanFilterAnalysisType
 *
 *
 * XSD Type: BooleanFilterAnalysisType
 */
class BooleanFilterAnalysisType
{

    /**
     * @property boolean $indicator
     */
    private $indicator = null;

    /**
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * Gets as indicator
     *
     * @return boolean
     */
    public function getIndicator()
    {
        return $this->indicator;
    }

    /**
     * Sets a new indicator
     *
     * @param boolean $indicator
     * @return self
     */
    public function setIndicator($indicator)
    {
        $this->indicator = $indicator;
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

