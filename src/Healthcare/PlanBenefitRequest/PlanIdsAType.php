<?php

namespace Healthcare\PlanBenefitRequest;

/**
 * Class representing PlanIdsAType
 */
class PlanIdsAType
{

    /**
     * @property string[] $planId
     */
    private $planId = null;

    /**
     * Adds as planId
     *
     * @return self
     * @param string $planId
     */
    public function addToPlanId($planId)
    {
        $this->planId[] = $planId;
        return $this;
    }

    /**
     * isset planId
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPlanId($index)
    {
        return isset($this->planId[$index]);
    }

    /**
     * unset planId
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPlanId($index)
    {
        unset($this->planId[$index]);
    }

    /**
     * Gets as planId
     *
     * @return string[]
     */
    public function getPlanId()
    {
        return $this->planId;
    }

    /**
     * Sets a new planId
     *
     * @param string $planId
     * @return self
     */
    public function setPlanId(array $planId)
    {
        $this->planId = $planId;
        return $this;
    }


}

