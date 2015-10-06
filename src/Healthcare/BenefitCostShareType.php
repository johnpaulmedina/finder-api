<?php

namespace Healthcare;

/**
 * Class representing BenefitCostShareType
 *
 *
 * XSD Type: BenefitCostShareType
 */
class BenefitCostShareType
{

    /**
     * @property \Healthcare\CoPayInsuranceCoverageType $coPayInNetworkTier1
     */
    private $coPayInNetworkTier1 = null;

    /**
     * @property \Healthcare\CoPayInsuranceCoverageType $coInsuranceInNetworkTier1
     */
    private $coInsuranceInNetworkTier1 = null;

    /**
     * Gets as coPayInNetworkTier1
     *
     * @return \Healthcare\CoPayInsuranceCoverageType
     */
    public function getCoPayInNetworkTier1()
    {
        return $this->coPayInNetworkTier1;
    }

    /**
     * Sets a new coPayInNetworkTier1
     *
     * @param \Healthcare\CoPayInsuranceCoverageType $coPayInNetworkTier1
     * @return self
     */
    public function setCoPayInNetworkTier1(\Healthcare\CoPayInsuranceCoverageType $coPayInNetworkTier1)
    {
        $this->coPayInNetworkTier1 = $coPayInNetworkTier1;
        return $this;
    }

    /**
     * Gets as coInsuranceInNetworkTier1
     *
     * @return \Healthcare\CoPayInsuranceCoverageType
     */
    public function getCoInsuranceInNetworkTier1()
    {
        return $this->coInsuranceInNetworkTier1;
    }

    /**
     * Sets a new coInsuranceInNetworkTier1
     *
     * @param \Healthcare\CoPayInsuranceCoverageType $coInsuranceInNetworkTier1
     * @return self
     */
    public function setCoInsuranceInNetworkTier1(\Healthcare\CoPayInsuranceCoverageType $coInsuranceInNetworkTier1)
    {
        $this->coInsuranceInNetworkTier1 = $coInsuranceInNetworkTier1;
        return $this;
    }


}

