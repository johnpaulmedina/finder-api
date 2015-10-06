<?php

namespace Healthcare\types;

/**
 * Class representing AnnualOutOfPocketFilterAnalysisType
 *
 *
 * XSD Type: AnnualOutOfPocketFilterAnalysisType
 */
class AnnualOutOfPocketFilterAnalysisType
{

    /**
     * @property string $filter
     */
    private $filter = null;

    /**
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * Gets as filter
     *
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Sets a new filter
     *
     * @param string $filter
     * @return self
     */
    public function setFilter($filter)
    {
        $this->filter = $filter;
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

