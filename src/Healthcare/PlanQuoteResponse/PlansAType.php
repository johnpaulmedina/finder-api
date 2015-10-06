<?php

namespace Healthcare\PlanQuoteResponse;

/**
 * Class representing PlansAType
 */
class PlansAType
{

    /**
     * @property \Healthcare\types\PlanType[] $plan
     */
    private $plan = null;

    /**
     * Adds as plan
     *
     * @return self
     * @param \Healthcare\types\PlanType $plan
     */
    public function addToPlan(\Healthcare\types\PlanType $plan)
    {
        $this->plan[] = $plan;
        return $this;
    }

    /**
     * isset plan
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPlan($index)
    {
        return isset($this->plan[$index]);
    }

    /**
     * unset plan
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPlan($index)
    {
        unset($this->plan[$index]);
    }

    /**
     * Gets as plan
     *
     * @return \Healthcare\types\PlanType[]
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * Sets a new plan
     *
     * @param \Healthcare\types\PlanType[] $plan
     * @return self
     */
    public function setPlan(array $plan)
    {
        $this->plan = $plan;
        return $this;
    }


}

