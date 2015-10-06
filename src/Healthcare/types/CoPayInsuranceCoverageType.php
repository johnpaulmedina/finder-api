<?php

namespace Healthcare\types;

/**
 * Class representing CoPayInsuranceCoverageType
 *
 *
 * XSD Type: CoPayInsuranceCoverageType
 */
class CoPayInsuranceCoverageType
{

    /**
     * @property string $benefit
     */
    private $benefit = null;

    /**
     * @property float $amount
     */
    private $amount = null;

    /**
     * @property integer $percent
     */
    private $percent = null;

    /**
     * Gets as benefit
     *
     * @return string
     */
    public function getBenefit()
    {
        return $this->benefit;
    }

    /**
     * Sets a new benefit
     *
     * @param string $benefit
     * @return self
     */
    public function setBenefit($benefit)
    {
        $this->benefit = $benefit;
        return $this;
    }

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
     * Gets as percent
     *
     * @return integer
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Sets a new percent
     *
     * @param integer $percent
     * @return self
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;
        return $this;
    }


}

