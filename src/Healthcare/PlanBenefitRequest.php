<?php

namespace Healthcare;

/**
 * Class representing PlanBenefitRequest
 */
class PlanBenefitRequest
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
     * @property string[] $planIds
     */
    private $planIds = null;

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
     * Adds as planId
     *
     * @return self
     * @param string $planId
     */
    public function addToPlanIds($planId)
    {
        $this->planIds[] = $planId;
        return $this;
    }

    /**
     * isset planIds
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPlanIds($index)
    {
        return isset($this->planIds[$index]);
    }

    /**
     * unset planIds
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPlanIds($index)
    {
        unset($this->planIds[$index]);
    }

    /**
     * Gets as planIds
     *
     * @return string[]
     */
    public function getPlanIds()
    {
        return $this->planIds;
    }

    /**
     * Sets a new planIds
     *
     * @param string $planIds
     * @return self
     */
    public function setPlanIds(array $planIds)
    {
        $this->planIds = $planIds;
        return $this;
    }


}

