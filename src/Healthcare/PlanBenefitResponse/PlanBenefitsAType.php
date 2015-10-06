<?php

namespace Healthcare\PlanBenefitResponse;

/**
 * Class representing PlanBenefitsAType
 */
class PlanBenefitsAType
{

    /**
     * @property \Healthcare\types\PlanBenefitsType[] $planBenefit
     */
    private $planBenefit = null;

    /**
     * Adds as planBenefit
     *
     * @return self
     * @param \Healthcare\types\PlanBenefitsType $planBenefit
     */
    public function addToPlanBenefit(\Healthcare\types\PlanBenefitsType $planBenefit)
    {
        $this->planBenefit[] = $planBenefit;
        return $this;
    }

    /**
     * isset planBenefit
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPlanBenefit($index)
    {
        return isset($this->planBenefit[$index]);
    }

    /**
     * unset planBenefit
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPlanBenefit($index)
    {
        unset($this->planBenefit[$index]);
    }

    /**
     * Gets as planBenefit
     *
     * @return \Healthcare\types\PlanBenefitsType[]
     */
    public function getPlanBenefit()
    {
        return $this->planBenefit;
    }

    /**
     * Sets a new planBenefit
     *
     * @param \Healthcare\types\PlanBenefitsType[] $planBenefit
     * @return self
     */
    public function setPlanBenefit(array $planBenefit)
    {
        $this->planBenefit = $planBenefit;
        return $this;
    }


}

