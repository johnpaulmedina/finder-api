<?php

namespace Healthcare\types;

/**
 * Class representing PlanFilterType
 *
 *
 * XSD Type: PlanFilterType
 */
class PlanFilterType
{

    /**
     * @property string[] $providerTypes
     */
    private $providerTypes = null;

    /**
     * @property string[] $issuers
     */
    private $issuers = null;

    /**
     * @property string[] $metalLevel
     */
    private $metalLevel = null;

    /**
     * @property string[] $annualDeductibleFilterRange
     */
    private $annualDeductibleFilterRange = null;

    /**
     * @property string[] $annualOutOfPocketFilterRange
     */
    private $annualOutOfPocketFilterRange = null;

    /**
     * @property string[] $baseRateFilterRange
     */
    private $baseRateFilterRange = null;

    /**
     * @property boolean $hSAEligibleIndicator
     */
    private $hSAEligibleIndicator = null;

    /**
     * @property boolean $domesticPartnerIndicator
     */
    private $domesticPartnerIndicator = null;

    /**
     * @property boolean $sameSexIndicator
     */
    private $sameSexIndicator = null;

    /**
     * @property boolean $maternityCoverageIndicator
     */
    private $maternityCoverageIndicator = null;

    /**
     * @property boolean $mentalCoverageIndicator
     */
    private $mentalCoverageIndicator = null;

    /**
     * @property boolean $substanceAbuseCoverageIndicator
     */
    private $substanceAbuseCoverageIndicator = null;

    /**
     * @property boolean $dentalCoverageIndicator
     */
    private $dentalCoverageIndicator = null;

    /**
     * @property boolean $visionCoverageIndicator
     */
    private $visionCoverageIndicator = null;

    /**
     * @property boolean $wellnessPorgramCoverageIndicator
     */
    private $wellnessPorgramCoverageIndicator = null;

    /**
     * @property boolean $drugCoverageIndicator
     */
    private $drugCoverageIndicator = null;

    /**
     * @property boolean $childOnlyCoverageIndicator
     */
    private $childOnlyCoverageIndicator = null;

    /**
     * Adds as providerTypes
     *
     * @return self
     * @param string $providerTypes
     */
    public function addToProviderTypes($providerTypes)
    {
        $this->providerTypes[] = $providerTypes;
        return $this;
    }

    /**
     * isset providerTypes
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProviderTypes($index)
    {
        return isset($this->providerTypes[$index]);
    }

    /**
     * unset providerTypes
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProviderTypes($index)
    {
        unset($this->providerTypes[$index]);
    }

    /**
     * Gets as providerTypes
     *
     * @return string[]
     */
    public function getProviderTypes()
    {
        return $this->providerTypes;
    }

    /**
     * Sets a new providerTypes
     *
     * @param string $providerTypes
     * @return self
     */
    public function setProviderTypes(array $providerTypes)
    {
        $this->providerTypes = $providerTypes;
        return $this;
    }

    /**
     * Adds as issuers
     *
     * @return self
     * @param string $issuers
     */
    public function addToIssuers($issuers)
    {
        $this->issuers[] = $issuers;
        return $this;
    }

    /**
     * isset issuers
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetIssuers($index)
    {
        return isset($this->issuers[$index]);
    }

    /**
     * unset issuers
     *
     * @param scalar $index
     * @return void
     */
    public function unsetIssuers($index)
    {
        unset($this->issuers[$index]);
    }

    /**
     * Gets as issuers
     *
     * @return string[]
     */
    public function getIssuers()
    {
        return $this->issuers;
    }

    /**
     * Sets a new issuers
     *
     * @param string $issuers
     * @return self
     */
    public function setIssuers(array $issuers)
    {
        $this->issuers = $issuers;
        return $this;
    }

    /**
     * Adds as metalLevel
     *
     * @return self
     * @param string $metalLevel
     */
    public function addToMetalLevel($metalLevel)
    {
        $this->metalLevel[] = $metalLevel;
        return $this;
    }

    /**
     * isset metalLevel
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMetalLevel($index)
    {
        return isset($this->metalLevel[$index]);
    }

    /**
     * unset metalLevel
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMetalLevel($index)
    {
        unset($this->metalLevel[$index]);
    }

    /**
     * Gets as metalLevel
     *
     * @return string[]
     */
    public function getMetalLevel()
    {
        return $this->metalLevel;
    }

    /**
     * Sets a new metalLevel
     *
     * @param string $metalLevel
     * @return self
     */
    public function setMetalLevel(array $metalLevel)
    {
        $this->metalLevel = $metalLevel;
        return $this;
    }

    /**
     * Adds as annualDeductibleFilterRange
     *
     * @return self
     * @param string $annualDeductibleFilterRange
     */
    public function addToAnnualDeductibleFilterRange($annualDeductibleFilterRange)
    {
        $this->annualDeductibleFilterRange[] = $annualDeductibleFilterRange;
        return $this;
    }

    /**
     * isset annualDeductibleFilterRange
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAnnualDeductibleFilterRange($index)
    {
        return isset($this->annualDeductibleFilterRange[$index]);
    }

    /**
     * unset annualDeductibleFilterRange
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAnnualDeductibleFilterRange($index)
    {
        unset($this->annualDeductibleFilterRange[$index]);
    }

    /**
     * Gets as annualDeductibleFilterRange
     *
     * @return string[]
     */
    public function getAnnualDeductibleFilterRange()
    {
        return $this->annualDeductibleFilterRange;
    }

    /**
     * Sets a new annualDeductibleFilterRange
     *
     * @param string $annualDeductibleFilterRange
     * @return self
     */
    public function setAnnualDeductibleFilterRange(array $annualDeductibleFilterRange)
    {
        $this->annualDeductibleFilterRange = $annualDeductibleFilterRange;
        return $this;
    }

    /**
     * Adds as annualOutOfPocketFilterRange
     *
     * @return self
     * @param string $annualOutOfPocketFilterRange
     */
    public function addToAnnualOutOfPocketFilterRange($annualOutOfPocketFilterRange)
    {
        $this->annualOutOfPocketFilterRange[] = $annualOutOfPocketFilterRange;
        return $this;
    }

    /**
     * isset annualOutOfPocketFilterRange
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAnnualOutOfPocketFilterRange($index)
    {
        return isset($this->annualOutOfPocketFilterRange[$index]);
    }

    /**
     * unset annualOutOfPocketFilterRange
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAnnualOutOfPocketFilterRange($index)
    {
        unset($this->annualOutOfPocketFilterRange[$index]);
    }

    /**
     * Gets as annualOutOfPocketFilterRange
     *
     * @return string[]
     */
    public function getAnnualOutOfPocketFilterRange()
    {
        return $this->annualOutOfPocketFilterRange;
    }

    /**
     * Sets a new annualOutOfPocketFilterRange
     *
     * @param string $annualOutOfPocketFilterRange
     * @return self
     */
    public function setAnnualOutOfPocketFilterRange(array $annualOutOfPocketFilterRange)
    {
        $this->annualOutOfPocketFilterRange = $annualOutOfPocketFilterRange;
        return $this;
    }

    /**
     * Adds as baseRateFilterRange
     *
     * @return self
     * @param string $baseRateFilterRange
     */
    public function addToBaseRateFilterRange($baseRateFilterRange)
    {
        $this->baseRateFilterRange[] = $baseRateFilterRange;
        return $this;
    }

    /**
     * isset baseRateFilterRange
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBaseRateFilterRange($index)
    {
        return isset($this->baseRateFilterRange[$index]);
    }

    /**
     * unset baseRateFilterRange
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBaseRateFilterRange($index)
    {
        unset($this->baseRateFilterRange[$index]);
    }

    /**
     * Gets as baseRateFilterRange
     *
     * @return string[]
     */
    public function getBaseRateFilterRange()
    {
        return $this->baseRateFilterRange;
    }

    /**
     * Sets a new baseRateFilterRange
     *
     * @param string $baseRateFilterRange
     * @return self
     */
    public function setBaseRateFilterRange(array $baseRateFilterRange)
    {
        $this->baseRateFilterRange = $baseRateFilterRange;
        return $this;
    }

    /**
     * Gets as hSAEligibleIndicator
     *
     * @return boolean
     */
    public function getHSAEligibleIndicator()
    {
        return $this->hSAEligibleIndicator;
    }

    /**
     * Sets a new hSAEligibleIndicator
     *
     * @param boolean $hSAEligibleIndicator
     * @return self
     */
    public function setHSAEligibleIndicator($hSAEligibleIndicator)
    {
        $this->hSAEligibleIndicator = $hSAEligibleIndicator;
        return $this;
    }

    /**
     * Gets as domesticPartnerIndicator
     *
     * @return boolean
     */
    public function getDomesticPartnerIndicator()
    {
        return $this->domesticPartnerIndicator;
    }

    /**
     * Sets a new domesticPartnerIndicator
     *
     * @param boolean $domesticPartnerIndicator
     * @return self
     */
    public function setDomesticPartnerIndicator($domesticPartnerIndicator)
    {
        $this->domesticPartnerIndicator = $domesticPartnerIndicator;
        return $this;
    }

    /**
     * Gets as sameSexIndicator
     *
     * @return boolean
     */
    public function getSameSexIndicator()
    {
        return $this->sameSexIndicator;
    }

    /**
     * Sets a new sameSexIndicator
     *
     * @param boolean $sameSexIndicator
     * @return self
     */
    public function setSameSexIndicator($sameSexIndicator)
    {
        $this->sameSexIndicator = $sameSexIndicator;
        return $this;
    }

    /**
     * Gets as maternityCoverageIndicator
     *
     * @return boolean
     */
    public function getMaternityCoverageIndicator()
    {
        return $this->maternityCoverageIndicator;
    }

    /**
     * Sets a new maternityCoverageIndicator
     *
     * @param boolean $maternityCoverageIndicator
     * @return self
     */
    public function setMaternityCoverageIndicator($maternityCoverageIndicator)
    {
        $this->maternityCoverageIndicator = $maternityCoverageIndicator;
        return $this;
    }

    /**
     * Gets as mentalCoverageIndicator
     *
     * @return boolean
     */
    public function getMentalCoverageIndicator()
    {
        return $this->mentalCoverageIndicator;
    }

    /**
     * Sets a new mentalCoverageIndicator
     *
     * @param boolean $mentalCoverageIndicator
     * @return self
     */
    public function setMentalCoverageIndicator($mentalCoverageIndicator)
    {
        $this->mentalCoverageIndicator = $mentalCoverageIndicator;
        return $this;
    }

    /**
     * Gets as substanceAbuseCoverageIndicator
     *
     * @return boolean
     */
    public function getSubstanceAbuseCoverageIndicator()
    {
        return $this->substanceAbuseCoverageIndicator;
    }

    /**
     * Sets a new substanceAbuseCoverageIndicator
     *
     * @param boolean $substanceAbuseCoverageIndicator
     * @return self
     */
    public function setSubstanceAbuseCoverageIndicator($substanceAbuseCoverageIndicator)
    {
        $this->substanceAbuseCoverageIndicator = $substanceAbuseCoverageIndicator;
        return $this;
    }

    /**
     * Gets as dentalCoverageIndicator
     *
     * @return boolean
     */
    public function getDentalCoverageIndicator()
    {
        return $this->dentalCoverageIndicator;
    }

    /**
     * Sets a new dentalCoverageIndicator
     *
     * @param boolean $dentalCoverageIndicator
     * @return self
     */
    public function setDentalCoverageIndicator($dentalCoverageIndicator)
    {
        $this->dentalCoverageIndicator = $dentalCoverageIndicator;
        return $this;
    }

    /**
     * Gets as visionCoverageIndicator
     *
     * @return boolean
     */
    public function getVisionCoverageIndicator()
    {
        return $this->visionCoverageIndicator;
    }

    /**
     * Sets a new visionCoverageIndicator
     *
     * @param boolean $visionCoverageIndicator
     * @return self
     */
    public function setVisionCoverageIndicator($visionCoverageIndicator)
    {
        $this->visionCoverageIndicator = $visionCoverageIndicator;
        return $this;
    }

    /**
     * Gets as wellnessPorgramCoverageIndicator
     *
     * @return boolean
     */
    public function getWellnessPorgramCoverageIndicator()
    {
        return $this->wellnessPorgramCoverageIndicator;
    }

    /**
     * Sets a new wellnessPorgramCoverageIndicator
     *
     * @param boolean $wellnessPorgramCoverageIndicator
     * @return self
     */
    public function setWellnessPorgramCoverageIndicator($wellnessPorgramCoverageIndicator)
    {
        $this->wellnessPorgramCoverageIndicator = $wellnessPorgramCoverageIndicator;
        return $this;
    }

    /**
     * Gets as drugCoverageIndicator
     *
     * @return boolean
     */
    public function getDrugCoverageIndicator()
    {
        return $this->drugCoverageIndicator;
    }

    /**
     * Sets a new drugCoverageIndicator
     *
     * @param boolean $drugCoverageIndicator
     * @return self
     */
    public function setDrugCoverageIndicator($drugCoverageIndicator)
    {
        $this->drugCoverageIndicator = $drugCoverageIndicator;
        return $this;
    }

    /**
     * Gets as childOnlyCoverageIndicator
     *
     * @return boolean
     */
    public function getChildOnlyCoverageIndicator()
    {
        return $this->childOnlyCoverageIndicator;
    }

    /**
     * Sets a new childOnlyCoverageIndicator
     *
     * @param boolean $childOnlyCoverageIndicator
     * @return self
     */
    public function setChildOnlyCoverageIndicator($childOnlyCoverageIndicator)
    {
        $this->childOnlyCoverageIndicator = $childOnlyCoverageIndicator;
        return $this;
    }


}

