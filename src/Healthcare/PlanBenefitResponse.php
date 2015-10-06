<?php

namespace Healthcare;

/**
 * Class representing PlanBenefitResponse
 */
class PlanBenefitResponse
{

    /**
     * @property \Healthcare\types\ResponseHeaderType $responseHeader
     */
    private $responseHeader = null;

    /**
     * @property \Healthcare\types\PlanBenefitsType[] $planBenefits
     */
    private $planBenefits = null;

    /**
     * @property \Healthcare\PlanBenefitRequest $planBenefitRequest
     */
    private $planBenefitRequest = null;

    /**
     * Gets as responseHeader
     *
     * @return \Healthcare\types\ResponseHeaderType
     */
    public function getResponseHeader()
    {
        return $this->responseHeader;
    }

    /**
     * Sets a new responseHeader
     *
     * @param \Healthcare\types\ResponseHeaderType $responseHeader
     * @return self
     */
    public function setResponseHeader(\Healthcare\types\ResponseHeaderType $responseHeader)
    {
        $this->responseHeader = $responseHeader;
        return $this;
    }

    /**
     * Adds as planBenefit
     *
     * @return self
     * @param \Healthcare\types\PlanBenefitsType $planBenefit
     */
    public function addToPlanBenefits(\Healthcare\types\PlanBenefitsType $planBenefit)
    {
        $this->planBenefits[] = $planBenefit;
        return $this;
    }

    /**
     * isset planBenefits
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPlanBenefits($index)
    {
        return isset($this->planBenefits[$index]);
    }

    /**
     * unset planBenefits
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPlanBenefits($index)
    {
        unset($this->planBenefits[$index]);
    }

    /**
     * Gets as planBenefits
     *
     * @return \Healthcare\types\PlanBenefitsType[]
     */
    public function getPlanBenefits()
    {
        return $this->planBenefits;
    }

    /**
     * Sets a new planBenefits
     *
     * @param \Healthcare\types\PlanBenefitsType[] $planBenefits
     * @return self
     */
    public function setPlanBenefits(array $planBenefits)
    {
        $this->planBenefits = $planBenefits;
        return $this;
    }

    /**
     * Gets as planBenefitRequest
     *
     * @return \Healthcare\PlanBenefitRequest
     */
    public function getPlanBenefitRequest()
    {
        return $this->planBenefitRequest;
    }

    /**
     * Sets a new planBenefitRequest
     *
     * @param \Healthcare\PlanBenefitRequest $planBenefitRequest
     * @return self
     */
    public function setPlanBenefitRequest(\Healthcare\PlanBenefitRequest $planBenefitRequest)
    {
        $this->planBenefitRequest = $planBenefitRequest;
        return $this;
    }


}

