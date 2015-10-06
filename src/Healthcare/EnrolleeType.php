<?php

namespace Healthcare;

/**
 * Class representing EnrolleeType
 *
 *
 * XSD Type: EnrolleeType
 */
class EnrolleeType
{

    /**
     * @property \DateTime $dateOfBirth
     */
    private $dateOfBirth = null;

    /**
     * @property string $gender
     */
    private $gender = null;

    /**
     * @property integer $tobaccoLastUsedMonths
     */
    private $tobaccoLastUsedMonths = null;

    /**
     * @property string $relation
     */
    private $relation = null;

    /**
     * @property boolean $inHouseholdIndicator
     */
    private $inHouseholdIndicator = null;

    /**
     * Gets as dateOfBirth
     *
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * Sets a new dateOfBirth
     *
     * @param \DateTime $dateOfBirth
     * @return self
     */
    public function setDateOfBirth(\DateTime $dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
        return $this;
    }

    /**
     * Gets as gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Sets a new gender
     *
     * @param string $gender
     * @return self
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * Gets as tobaccoLastUsedMonths
     *
     * @return integer
     */
    public function getTobaccoLastUsedMonths()
    {
        return $this->tobaccoLastUsedMonths;
    }

    /**
     * Sets a new tobaccoLastUsedMonths
     *
     * @param integer $tobaccoLastUsedMonths
     * @return self
     */
    public function setTobaccoLastUsedMonths($tobaccoLastUsedMonths)
    {
        $this->tobaccoLastUsedMonths = $tobaccoLastUsedMonths;
        return $this;
    }

    /**
     * Gets as relation
     *
     * @return string
     */
    public function getRelation()
    {
        return $this->relation;
    }

    /**
     * Sets a new relation
     *
     * @param string $relation
     * @return self
     */
    public function setRelation($relation)
    {
        $this->relation = $relation;
        return $this;
    }

    /**
     * Gets as inHouseholdIndicator
     *
     * @return boolean
     */
    public function getInHouseholdIndicator()
    {
        return $this->inHouseholdIndicator;
    }

    /**
     * Sets a new inHouseholdIndicator
     *
     * @param boolean $inHouseholdIndicator
     * @return self
     */
    public function setInHouseholdIndicator($inHouseholdIndicator)
    {
        $this->inHouseholdIndicator = $inHouseholdIndicator;
        return $this;
    }


}

