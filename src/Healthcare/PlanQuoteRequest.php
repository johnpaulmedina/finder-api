<?php

namespace Healthcare;

/**
 * Class representing PlanQuoteRequest
 */
class PlanQuoteRequest
{

    /**
     * @property \Healthcare\types\EnrolleeType[] $enrollees
     */
    private $enrollees = null;

    /**
     * @property \Healthcare\types\LocationType $location
     */
    private $location = null;

    /**
     * @property \DateTime $insuranceEffectiveDate
     */
    private $insuranceEffectiveDate = null;

    /**
     * @property string $market
     */
    private $market = null;

    /**
     * @property boolean $isFilterAnalysisRequiredIndicator
     */
    private $isFilterAnalysisRequiredIndicator = null;

    /**
     * @property \Healthcare\types\PaginationInformationType $paginationInformation
     */
    private $paginationInformation = null;

    /**
     * @property \Healthcare\types\PlanSortOrderType $sortOrder
     */
    private $sortOrder = null;

    /**
     * @property \Healthcare\types\PlanFilterType $filter
     */
    private $filter = null;

    /**
     * @property string[] $comparePlans
     */
    private $comparePlans = null;

    /**
     * Adds as enrollees
     *
     * @return self
     * @param \Healthcare\types\EnrolleeType $enrollees
     */
    public function addToEnrollees(\Healthcare\types\EnrolleeType $enrollees)
    {
        $this->enrollees[] = $enrollees;
        return $this;
    }

    /**
     * isset enrollees
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEnrollees($index)
    {
        return isset($this->enrollees[$index]);
    }

    /**
     * unset enrollees
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEnrollees($index)
    {
        unset($this->enrollees[$index]);
    }

    /**
     * Gets as enrollees
     *
     * @return \Healthcare\types\EnrolleeType[]
     */
    public function getEnrollees()
    {
        return $this->enrollees;
    }

    /**
     * Sets a new enrollees
     *
     * @param \Healthcare\types\EnrolleeType[] $enrollees
     * @return self
     */
    public function setEnrollees(array $enrollees)
    {
        $this->enrollees = $enrollees;
        return $this;
    }

    /**
     * Gets as location
     *
     * @return \Healthcare\types\LocationType
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * @param \Healthcare\types\LocationType $location
     * @return self
     */
    public function setLocation(\Healthcare\types\LocationType $location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Gets as insuranceEffectiveDate
     *
     * @return \DateTime
     */
    public function getInsuranceEffectiveDate()
    {
        return $this->insuranceEffectiveDate;
    }

    /**
     * Sets a new insuranceEffectiveDate
     *
     * @param \DateTime $insuranceEffectiveDate
     * @return self
     */
    public function setInsuranceEffectiveDate(\DateTime $insuranceEffectiveDate)
    {
        $this->insuranceEffectiveDate = $insuranceEffectiveDate;
        return $this;
    }

    /**
     * Gets as market
     *
     * @return string
     */
    public function getMarket()
    {
        return $this->market;
    }

    /**
     * Sets a new market
     *
     * @param string $market
     * @return self
     */
    public function setMarket($market)
    {
        $this->market = $market;
        return $this;
    }

    /**
     * Gets as isFilterAnalysisRequiredIndicator
     *
     * @return boolean
     */
    public function getIsFilterAnalysisRequiredIndicator()
    {
        return $this->isFilterAnalysisRequiredIndicator;
    }

    /**
     * Sets a new isFilterAnalysisRequiredIndicator
     *
     * @param boolean $isFilterAnalysisRequiredIndicator
     * @return self
     */
    public function setIsFilterAnalysisRequiredIndicator($isFilterAnalysisRequiredIndicator)
    {
        $this->isFilterAnalysisRequiredIndicator = $isFilterAnalysisRequiredIndicator;
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
     * Gets as sortOrder
     *
     * @return \Healthcare\types\PlanSortOrderType
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Sets a new sortOrder
     *
     * @param \Healthcare\types\PlanSortOrderType $sortOrder
     * @return self
     */
    public function setSortOrder(\Healthcare\types\PlanSortOrderType $sortOrder)
    {
        $this->sortOrder = $sortOrder;
        return $this;
    }

    /**
     * Gets as filter
     *
     * @return \Healthcare\types\PlanFilterType
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Sets a new filter
     *
     * @param \Healthcare\types\PlanFilterType $filter
     * @return self
     */
    public function setFilter(\Healthcare\types\PlanFilterType $filter)
    {
        $this->filter = $filter;
        return $this;
    }

    /**
     * Adds as planId
     *
     * @return self
     * @param string $planId
     */
    public function addToComparePlans($planId)
    {
        $this->comparePlans[] = $planId;
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
     * @return string[]
     */
    public function getComparePlans()
    {
        return $this->comparePlans;
    }

    /**
     * Sets a new comparePlans
     *
     * @param string $comparePlans
     * @return self
     */
    public function setComparePlans(array $comparePlans)
    {
        $this->comparePlans = $comparePlans;
        return $this;
    }


}

