<?php

namespace Healthcare;

/**
 * Class representing PlanQuoteResponse
 */
class PlanQuoteResponse
{

    /**
     * @property \Healthcare\types\ResponseHeaderType $responseHeader
     */
    private $responseHeader = null;

    /**
     * @property integer $totalEligiblePlansQuantity
     */
    private $totalEligiblePlansQuantity = null;

    /**
     * @property \Healthcare\types\PaginationInformationType $paginationInformation
     */
    private $paginationInformation = null;

    /**
     * @property \Healthcare\types\PlanType[] $plans
     */
    private $plans = null;

    /**
     * @property \Healthcare\types\PlanFilterAnalysisType $filterAnalysis
     */
    private $filterAnalysis = null;

    /**
     * @property \Healthcare\types\PlanType[] $comparePlans
     */
    private $comparePlans = null;

    /**
     * @property \Healthcare\PlanQuoteRequest $planQuoteRequest
     */
    private $planQuoteRequest = null;

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
     * Gets as totalEligiblePlansQuantity
     *
     * @return integer
     */
    public function getTotalEligiblePlansQuantity()
    {
        return $this->totalEligiblePlansQuantity;
    }

    /**
     * Sets a new totalEligiblePlansQuantity
     *
     * @param integer $totalEligiblePlansQuantity
     * @return self
     */
    public function setTotalEligiblePlansQuantity($totalEligiblePlansQuantity)
    {
        $this->totalEligiblePlansQuantity = $totalEligiblePlansQuantity;
        return $this;
    }

    /**
     * Gets as paginationInformation
     *
     * @return \Healthcare\types\PaginationInformationType
     */
    public function getPaginationInformation()
    {
        return $this->paginationInformation;
    }

    /**
     * Sets a new paginationInformation
     *
     * @param \Healthcare\types\PaginationInformationType $paginationInformation
     * @return self
     */
    public function setPaginationInformation(\Healthcare\types\PaginationInformationType $paginationInformation)
    {
        $this->paginationInformation = $paginationInformation;
        return $this;
    }

    /**
     * Adds as plan
     *
     * @return self
     * @param \Healthcare\types\PlanType $plan
     */
    public function addToPlans(\Healthcare\types\PlanType $plan)
    {
        $this->plans[] = $plan;
        return $this;
    }

    /**
     * isset plans
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPlans($index)
    {
        return isset($this->plans[$index]);
    }

    /**
     * unset plans
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPlans($index)
    {
        unset($this->plans[$index]);
    }

    /**
     * Gets as plans
     *
     * @return \Healthcare\types\PlanType[]
     */
    public function getPlans()
    {
        return $this->plans;
    }

    /**
     * Sets a new plans
     *
     * @param \Healthcare\types\PlanType[] $plans
     * @return self
     */
    public function setPlans(array $plans)
    {
        $this->plans = $plans;
        return $this;
    }

    /**
     * Gets as filterAnalysis
     *
     * @return \Healthcare\types\PlanFilterAnalysisType
     */
    public function getFilterAnalysis()
    {
        return $this->filterAnalysis;
    }

    /**
     * Sets a new filterAnalysis
     *
     * @param \Healthcare\types\PlanFilterAnalysisType $filterAnalysis
     * @return self
     */
    public function setFilterAnalysis(\Healthcare\types\PlanFilterAnalysisType $filterAnalysis)
    {
        $this->filterAnalysis = $filterAnalysis;
        return $this;
    }

    /**
     * Adds as plan
     *
     * @return self
     * @param \Healthcare\types\PlanType $plan
     */
    public function addToComparePlans(\Healthcare\types\PlanType $plan)
    {
        $this->comparePlans[] = $plan;
        return $this;
    }

    /**
     * isset comparePlans
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetComparePlans($index)
    {
        return isset($this->comparePlans[$index]);
    }

    /**
     * unset comparePlans
     *
     * @param scalar $index
     * @return void
     */
    public function unsetComparePlans($index)
    {
        unset($this->comparePlans[$index]);
    }

    /**
     * Gets as comparePlans
     *
     * @return \Healthcare\types\PlanType[]
     */
    public function getComparePlans()
    {
        return $this->comparePlans;
    }

    /**
     * Sets a new comparePlans
     *
     * @param \Healthcare\types\PlanType[] $comparePlans
     * @return self
     */
    public function setComparePlans(array $comparePlans)
    {
        $this->comparePlans = $comparePlans;
        return $this;
    }

    /**
     * Gets as planQuoteRequest
     *
     * @return \Healthcare\PlanQuoteRequest
     */
    public function getPlanQuoteRequest()
    {
        return $this->planQuoteRequest;
    }

    /**
     * Sets a new planQuoteRequest
     *
     * @param \Healthcare\PlanQuoteRequest $planQuoteRequest
     * @return self
     */
    public function setPlanQuoteRequest(\Healthcare\PlanQuoteRequest $planQuoteRequest)
    {
        $this->planQuoteRequest = $planQuoteRequest;
        return $this;
    }


}

