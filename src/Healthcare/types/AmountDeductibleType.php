<?php

namespace Healthcare\types;

/**
 * Class representing AmountDeductibleType
 *
 *
 * XSD Type: AmountDeductibleType
 */
class AmountDeductibleType
{

    /**
     * @property float $amount
     */
    private $amount = null;

    /**
     * @property string $notApplicable
     */
    private $notApplicable = null;

    /**
     * Gets as amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as notApplicable
     *
     * @return string
     */
    public function getNotApplicable()
    {
        return $this->notApplicable;
    }

    /**
     * Sets a new notApplicable
     *
     * @param string $notApplicable
     * @return self
     */
    public function setNotApplicable($notApplicable)
    {
        $this->notApplicable = $notApplicable;
        return $this;
    }


}

