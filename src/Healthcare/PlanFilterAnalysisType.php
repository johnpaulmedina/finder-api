<?php

namespace Healthcare;

/**
 * Class representing PlanFilterAnalysisType
 *
 *
 * XSD Type: PlanFilterAnalysisType
 */
class PlanFilterAnalysisType
{

    /**
     * @property \Healthcare\ProviderTypeFilterAnalysisType[] $providerTypes
     */
    private $providerTypes = null;

    /**
     * @property \Healthcare\IssuerFilterAnalysisType[] $issuerIDs
     */
    private $issuerIDs = null;

    /**
     * @property \Healthcare\MetalTierFilterAnalysisType[] $metalLevel
     */
    private $metalLevel = null;

    /**
     * @property \Healthcare\AnnualDeductibleFilterAnalysisType[]
     * $annualIndividualInNetworkDeductible
     */
    private $annualIndividualInNetworkDeductible = null;

    /**
     * @property \Healthcare\AnnualOutOfPocketFilterAnalysisType[]
     * $annualIndividualInNetworkOOPLimit
     */
    private $annualIndividualInNetworkOOPLimit = null;

    /**
     * @property \Healthcare\BaseRateFilterAnalysisType[] $baseRate
     */
    private $baseRate = null;

    /**
     * @property \Healthcare\BooleanFilterAnalysisType[] $hSAEligibleIndicator
     */
    private $hSAEligibleIndicator = null;

    /**
     * @property \Healthcare\BooleanFilterAnalysisType[] $domesticPartnerIndicator
     */
    private $domesticPartnerIndicator = null;

    /**
     * @property \Healthcare\BooleanFilterAnalysisType[] $sameSexIndicator
     */
    private $sameSexIndicator = null;

    /**
     * @property \Healthcare\BooleanFilterAnalysisType[] $maternityCoverageIndicator
     */
    private $maternityCoverageIndicator = null;

    /**
     * @property \Healthcare\BooleanFilterAnalysisType[] $mentalCoverageIndicator
     */
    private $mentalCoverageIndicator = null;

    /**
     * @property \Healthcare\BooleanFilterAnalysisType[]
     * $substanceAbuseCoverageIndicator
     */
    private $substanceAbuseCoverageIndicator = null;

    /**
     * @property \Healthcare\BooleanFilterAnalysisType[] $dentalCoverageIndicator
     */
    private $dentalCoverageIndicator = null;

    /**
     * @property \Healthcare\BooleanFilterAnalysisType[] $visionCoverageIndicator
     */
    private $visionCoverageIndicator = null;

    /**
     * @property \Healthcare\BooleanFilterAnalysisType[]
     * $wellnessPorgramCoverageIndicator
     */
    private $wellnessPorgramCoverageIndicator = null;

    /**
     * @property \Healthcare\BooleanFilterAnalysisType[] $drugCoverageIndicator
     */
    private $drugCoverageIndicator = null;

    /**
     * @property \Healthcare\BooleanFilterAnalysisType[] $childOnlyCoverageIndicator
     */
    private $childOnlyCoverageIndicator = null;

    /**
     * Adds as providerTypes
     *
     * @return self
     * @param \Healthcare\ProviderTypeFilterAnalysisType $providerTypes
     */
    public function addToProviderTypes(\Healthcare\ProviderTypeFilterAnalysisType $providerTypes)
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
     * @return \Healthcare\ProviderTypeFilterAnalysisType[]
     */
    public function getProviderTypes()
    {
        return $this->providerTypes;
    }

    /**
     * Sets a new providerTypes
     *
     * @param \Healthcare\ProviderTypeFilterAnalysisType[] $providerTypes
     * @return self
     */
    public function setProviderTypes(array $providerTypes)
    {
        $this->providerTypes = $providerTypes;
        return $this;
    }

    /**
     * Adds as issuerIDs
     *
     * @return self
     * @param \Healthcare\IssuerFilterAnalysisType $issuerIDs
     */
    public function addToIssuerIDs(\Healthcare\IssuerFilterAnalysisType $issuerIDs)
    {
        $this->issuerIDs[] = $issuerIDs;
        return $this;
    }

    /**
     * isset issuerIDs
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetIssuerIDs($index)
    {
        return isset($this->issuerIDs[$index]);
    }

    /**
     * unset issuerIDs
     *
     * @param scalar $index
     * @return void
     */
    public function unsetIssuerIDs($index)
    {
        unset($this->issuerIDs[$index]);
    }

    /**
     * Gets as issuerIDs
     *
     * @return \Healthcare\IssuerFilterAnalysisType[]
     */
    public function getIssuerIDs()
    {
        return $this->issuerIDs;
    }

    /**
     * Sets a new issuerIDs
     *
     * @param \Healthcare\IssuerFilterAnalysisType[] $issuerIDs
     * @return self
     */
    public function setIssuerIDs(array $issuerIDs)
    {
        $this->issuerIDs = $issuerIDs;
        return $this;
    }

    /**
     * Adds as metalLevel
     *
     * @return self
     * @param \Healthcare\MetalTierFilterAnalysisType $metalLevel
     */
    public function addToMetalLevel(\Healthcare\MetalTierFilterAnalysisType $metalLevel)
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
     * @return \Healthcare\MetalTierFilterAnalysisType[]
     */
    public function getMetalLevel()
    {
        return $this->metalLevel;
    }

    /**
     * Sets a new metalLevel
     *
     * @param \Healthcare\MetalTierFilterAnalysisType[] $metalLevel
     * @return self
     */
    public function setMetalLevel(array $metalLevel)
    {
        $this->metalLevel = $metalLevel;
        return $this;
    }

    /**
     * Adds as annualIndividualInNetworkDeductible
     *
     * @return self
     * @param \Healthcare\AnnualDeductibleFilterAnalysisType
     * $annualIndividualInNetworkDeductible
     */
    public function addToAnnualIndividualInNetworkDeductible(\Healthcare\AnnualDeductibleFilterAnalysisType $annualIndividualInNetworkDeductible)
    {
        $this->annualIndividualInNetworkDeductible[] = $annualIndividualInNetworkDeductible;
        return $this;
    }

    /**
     * isset annualIndividualInNetworkDeductible
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAnnualIndividualInNetworkDeductible($index)
    {
        return isset($this->annualIndividualInNetworkDeductible[$index]);
    }

    /**
     * unset annualIndividualInNetworkDeductible
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAnnualIndividualInNetworkDeductible($index)
    {
        unset($this->annualIndividualInNetworkDeductible[$index]);
    }

    /**
     * Gets as annualIndividualInNetworkDeductible
     *
     * @return \Healthcare\AnnualDeductibleFilterAnalysisType[]
     */
    public function getAnnualIndividualInNetworkDeductible()
    {
        return $this->annualIndividualInNetworkDeductible;
    }

    /**
     * Sets a new annualIndividualInNetworkDeductible
     *
     * @param \Healthcare\AnnualDeductibleFilterAnalysisType[]
     * $annualIndividualInNetworkDeductible
     * @return self
     */
    public function setAnnualIndividualInNetworkDeductible(array $annualIndividualInNetworkDeductible)
    {
        $this->annualIndividualInNetworkDeductible = $annualIndividualInNetworkDeductible;
        return $this;
    }

    /**
     * Adds as annualIndividualInNetworkOOPLimit
     *
     * @return self
     * @param \Healthcare\AnnualOutOfPocketFilterAnalysisType
     * $annualIndividualInNetworkOOPLimit
     */
    public function addToAnnualIndividualInNetworkOOPLimit(\Healthcare\AnnualOutOfPocketFilterAnalysisType $annualIndividualInNetworkOOPLimit)
    {
        $this->annualIndividualInNetworkOOPLimit[] = $annualIndividualInNetworkOOPLimit;
        return $this;
    }

    /**
     * isset annualIndividualInNetworkOOPLimit
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAnnualIndividualInNetworkOOPLimit($index)
    {
        return isset($this->annualIndividualInNetworkOOPLimit[$index]);
    }

    /**
     * unset annualIndividualInNetworkOOPLimit
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAnnualIndividualInNetworkOOPLimit($index)
    {
        unset($this->annualIndividualInNetworkOOPLimit[$index]);
    }

    /**
     * Gets as annualIndividualInNetworkOOPLimit
     *
     * @return \Healthcare\AnnualOutOfPocketFilterAnalysisType[]
     */
    public function getAnnualIndividualInNetworkOOPLimit()
    {
        return $this->annualIndividualInNetworkOOPLimit;
    }

    /**
     * Sets a new annualIndividualInNetworkOOPLimit
     *
     * @param \Healthcare\AnnualOutOfPocketFilterAnalysisType[]
     * $annualIndividualInNetworkOOPLimit
     * @return self
     */
    public function setAnnualIndividualInNetworkOOPLimit(array $annualIndividualInNetworkOOPLimit)
    {
        $this->annualIndividualInNetworkOOPLimit = $annualIndividualInNetworkOOPLimit;
        return $this;
    }

    /**
     * Adds as baseRate
     *
     * @return self
     * @param \Healthcare\BaseRateFilterAnalysisType $baseRate
     */
    public function addToBaseRate(\Healthcare\BaseRateFilterAnalysisType $baseRate)
    {
        $this->baseRate[] = $baseRate;
        return $this;
    }

    /**
     * isset baseRate
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBaseRate($index)
    {
        return isset($this->baseRate[$index]);
    }

    /**
     * unset baseRate
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBaseRate($index)
    {
        unset($this->baseRate[$index]);
    }

    /**
     * Gets as baseRate
     *
     * @return \Healthcare\BaseRateFilterAnalysisType[]
     */
    public function getBaseRate()
    {
        return $this->baseRate;
    }

    /**
     * Sets a new baseRate
     *
     * @param \Healthcare\BaseRateFilterAnalysisType[] $baseRate
     * @return self
     */
    public function setBaseRate(array $baseRate)
    {
        $this->baseRate = $baseRate;
        return $this;
    }

    /**
     * Adds as hSAEligibleIndicator
     *
     * @return self
     * @param \Healthcare\BooleanFilterAnalysisType $hSAEligibleIndicator
     */
    public function addToHSAEligibleIndicator(\Healthcare\BooleanFilterAnalysisType $hSAEligibleIndicator)
    {
        $this->hSAEligibleIndicator[] = $hSAEligibleIndicator;
        return $this;
    }

    /**
     * isset hSAEligibleIndicator
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHSAEligibleIndicator($index)
    {
        return isset($this->hSAEligibleIndicator[$index]);
    }

    /**
     * unset hSAEligibleIndicator
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHSAEligibleIndicator($index)
    {
        unset($this->hSAEligibleIndicator[$index]);
    }

    /**
     * Gets as hSAEligibleIndicator
     *
     * @return \Healthcare\BooleanFilterAnalysisType[]
     */
    public function getHSAEligibleIndicator()
    {
        return $this->hSAEligibleIndicator;
    }

    /**
     * Sets a new hSAEligibleIndicator
     *
     * @param \Healthcare\BooleanFilterAnalysisType[] $hSAEligibleIndicator
     * @return self
     */
    public function setHSAEligibleIndicator(array $hSAEligibleIndicator)
    {
        $this->hSAEligibleIndicator = $hSAEligibleIndicator;
        return $this;
    }

    /**
     * Adds as domesticPartnerIndicator
     *
     * @return self
     * @param \Healthcare\BooleanFilterAnalysisType $domesticPartnerIndicator
     */
    public function addToDomesticPartnerIndicator(\Healthcare\BooleanFilterAnalysisType $domesticPartnerIndicator)
    {
        $this->domesticPartnerIndicator[] = $domesticPartnerIndicator;
        return $this;
    }

    /**
     * isset domesticPartnerIndicator
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDomesticPartnerIndicator($index)
    {
        return isset($this->domesticPartnerIndicator[$index]);
    }

    /**
     * unset domesticPartnerIndicator
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDomesticPartnerIndicator($index)
    {
        unset($this->domesticPartnerIndicator[$index]);
    }

    /**
     * Gets as domesticPartnerIndicator
     *
     * @return \Healthcare\BooleanFilterAnalysisType[]
     */
    public function getDomesticPartnerIndicator()
    {
        return $this->domesticPartnerIndicator;
    }

    /**
     * Sets a new domesticPartnerIndicator
     *
     * @param \Healthcare\BooleanFilterAnalysisType[] $domesticPartnerIndicator
     * @return self
     */
    public function setDomesticPartnerIndicator(array $domesticPartnerIndicator)
    {
        $this->domesticPartnerIndicator = $domesticPartnerIndicator;
        return $this;
    }

    /**
     * Adds as sameSexIndicator
     *
     * @return self
     * @param \Healthcare\BooleanFilterAnalysisType $sameSexIndicator
     */
    public function addToSameSexIndicator(\Healthcare\BooleanFilterAnalysisType $sameSexIndicator)
    {
        $this->sameSexIndicator[] = $sameSexIndicator;
        return $this;
    }

    /**
     * isset sameSexIndicator
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSameSexIndicator($index)
    {
        return isset($this->sameSexIndicator[$index]);
    }

    /**
     * unset sameSexIndicator
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSameSexIndicator($index)
    {
        unset($this->sameSexIndicator[$index]);
    }

    /**
     * Gets as sameSexIndicator
     *
     * @return \Healthcare\BooleanFilterAnalysisType[]
     */
    public function getSameSexIndicator()
    {
        return $this->sameSexIndicator;
    }

    /**
     * Sets a new sameSexIndicator
     *
     * @param \Healthcare\BooleanFilterAnalysisType[] $sameSexIndicator
     * @return self
     */
    public function setSameSexIndicator(array $sameSexIndicator)
    {
        $this->sameSexIndicator = $sameSexIndicator;
        return $this;
    }

    /**
     * Adds as maternityCoverageIndicator
     *
     * @return self
     * @param \Healthcare\BooleanFilterAnalysisType $maternityCoverageIndicator
     */
    public function addToMaternityCoverageIndicator(\Healthcare\BooleanFilterAnalysisType $maternityCoverageIndicator)
    {
        $this->maternityCoverageIndicator[] = $maternityCoverageIndicator;
        return $this;
    }

    /**
     * isset maternityCoverageIndicator
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMaternityCoverageIndicator($index)
    {
        return isset($this->maternityCoverageIndicator[$index]);
    }

    /**
     * unset maternityCoverageIndicator
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMaternityCoverageIndicator($index)
    {
        unset($this->maternityCoverageIndicator[$index]);
    }

    /**
     * Gets as maternityCoverageIndicator
     *
     * @return \Healthcare\BooleanFilterAnalysisType[]
     */
    public function getMaternityCoverageIndicator()
    {
        return $this->maternityCoverageIndicator;
    }

    /**
     * Sets a new maternityCoverageIndicator
     *
     * @param \Healthcare\BooleanFilterAnalysisType[] $maternityCoverageIndicator
     * @return self
     */
    public function setMaternityCoverageIndicator(array $maternityCoverageIndicator)
    {
        $this->maternityCoverageIndicator = $maternityCoverageIndicator;
        return $this;
    }

    /**
     * Adds as mentalCoverageIndicator
     *
     * @return self
     * @param \Healthcare\BooleanFilterAnalysisType $mentalCoverageIndicator
     */
    public function addToMentalCoverageIndicator(\Healthcare\BooleanFilterAnalysisType $mentalCoverageIndicator)
    {
        $this->mentalCoverageIndicator[] = $mentalCoverageIndicator;
        return $this;
    }

    /**
     * isset mentalCoverageIndicator
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMentalCoverageIndicator($index)
    {
        return isset($this->mentalCoverageIndicator[$index]);
    }

    /**
     * unset mentalCoverageIndicator
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMentalCoverageIndicator($index)
    {
        unset($this->mentalCoverageIndicator[$index]);
    }

    /**
     * Gets as mentalCoverageIndicator
     *
     * @return \Healthcare\BooleanFilterAnalysisType[]
     */
    public function getMentalCoverageIndicator()
    {
        return $this->mentalCoverageIndicator;
    }

    /**
     * Sets a new mentalCoverageIndicator
     *
     * @param \Healthcare\BooleanFilterAnalysisType[] $mentalCoverageIndicator
     * @return self
     */
    public function setMentalCoverageIndicator(array $mentalCoverageIndicator)
    {
        $this->mentalCoverageIndicator = $mentalCoverageIndicator;
        return $this;
    }

    /**
     * Adds as substanceAbuseCoverageIndicator
     *
     * @return self
     * @param \Healthcare\BooleanFilterAnalysisType $substanceAbuseCoverageIndicator
     */
    public function addToSubstanceAbuseCoverageIndicator(\Healthcare\BooleanFilterAnalysisType $substanceAbuseCoverageIndicator)
    {
        $this->substanceAbuseCoverageIndicator[] = $substanceAbuseCoverageIndicator;
        return $this;
    }

    /**
     * isset substanceAbuseCoverageIndicator
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSubstanceAbuseCoverageIndicator($index)
    {
        return isset($this->substanceAbuseCoverageIndicator[$index]);
    }

    /**
     * unset substanceAbuseCoverageIndicator
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSubstanceAbuseCoverageIndicator($index)
    {
        unset($this->substanceAbuseCoverageIndicator[$index]);
    }

    /**
     * Gets as substanceAbuseCoverageIndicator
     *
     * @return \Healthcare\BooleanFilterAnalysisType[]
     */
    public function getSubstanceAbuseCoverageIndicator()
    {
        return $this->substanceAbuseCoverageIndicator;
    }

    /**
     * Sets a new substanceAbuseCoverageIndicator
     *
     * @param \Healthcare\BooleanFilterAnalysisType[]
     * $substanceAbuseCoverageIndicator
     * @return self
     */
    public function setSubstanceAbuseCoverageIndicator(array $substanceAbuseCoverageIndicator)
    {
        $this->substanceAbuseCoverageIndicator = $substanceAbuseCoverageIndicator;
        return $this;
    }

    /**
     * Adds as dentalCoverageIndicator
     *
     * @return self
     * @param \Healthcare\BooleanFilterAnalysisType $dentalCoverageIndicator
     */
    public function addToDentalCoverageIndicator(\Healthcare\BooleanFilterAnalysisType $dentalCoverageIndicator)
    {
        $this->dentalCoverageIndicator[] = $dentalCoverageIndicator;
        return $this;
    }

    /**
     * isset dentalCoverageIndicator
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDentalCoverageIndicator($index)
    {
        return isset($this->dentalCoverageIndicator[$index]);
    }

    /**
     * unset dentalCoverageIndicator
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDentalCoverageIndicator($index)
    {
        unset($this->dentalCoverageIndicator[$index]);
    }

    /**
     * Gets as dentalCoverageIndicator
     *
     * @return \Healthcare\BooleanFilterAnalysisType[]
     */
    public function getDentalCoverageIndicator()
    {
        return $this->dentalCoverageIndicator;
    }

    /**
     * Sets a new dentalCoverageIndicator
     *
     * @param \Healthcare\BooleanFilterAnalysisType[] $dentalCoverageIndicator
     * @return self
     */
    public function setDentalCoverageIndicator(array $dentalCoverageIndicator)
    {
        $this->dentalCoverageIndicator = $dentalCoverageIndicator;
        return $this;
    }

    /**
     * Adds as visionCoverageIndicator
     *
     * @return self
     * @param \Healthcare\BooleanFilterAnalysisType $visionCoverageIndicator
     */
    public function addToVisionCoverageIndicator(\Healthcare\BooleanFilterAnalysisType $visionCoverageIndicator)
    {
        $this->visionCoverageIndicator[] = $visionCoverageIndicator;
        return $this;
    }

    /**
     * isset visionCoverageIndicator
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVisionCoverageIndicator($index)
    {
        return isset($this->visionCoverageIndicator[$index]);
    }

    /**
     * unset visionCoverageIndicator
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVisionCoverageIndicator($index)
    {
        unset($this->visionCoverageIndicator[$index]);
    }

    /**
     * Gets as visionCoverageIndicator
     *
     * @return \Healthcare\BooleanFilterAnalysisType[]
     */
    public function getVisionCoverageIndicator()
    {
        return $this->visionCoverageIndicator;
    }

    /**
     * Sets a new visionCoverageIndicator
     *
     * @param \Healthcare\BooleanFilterAnalysisType[] $visionCoverageIndicator
     * @return self
     */
    public function setVisionCoverageIndicator(array $visionCoverageIndicator)
    {
        $this->visionCoverageIndicator = $visionCoverageIndicator;
        return $this;
    }

    /**
     * Adds as wellnessPorgramCoverageIndicator
     *
     * @return self
     * @param \Healthcare\BooleanFilterAnalysisType
     * $wellnessPorgramCoverageIndicator
     */
    public function addToWellnessPorgramCoverageIndicator(\Healthcare\BooleanFilterAnalysisType $wellnessPorgramCoverageIndicator)
    {
        $this->wellnessPorgramCoverageIndicator[] = $wellnessPorgramCoverageIndicator;
        return $this;
    }

    /**
     * isset wellnessPorgramCoverageIndicator
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetWellnessPorgramCoverageIndicator($index)
    {
        return isset($this->wellnessPorgramCoverageIndicator[$index]);
    }

    /**
     * unset wellnessPorgramCoverageIndicator
     *
     * @param scalar $index
     * @return void
     */
    public function unsetWellnessPorgramCoverageIndicator($index)
    {
        unset($this->wellnessPorgramCoverageIndicator[$index]);
    }

    /**
     * Gets as wellnessPorgramCoverageIndicator
     *
     * @return \Healthcare\BooleanFilterAnalysisType[]
     */
    public function getWellnessPorgramCoverageIndicator()
    {
        return $this->wellnessPorgramCoverageIndicator;
    }

    /**
     * Sets a new wellnessPorgramCoverageIndicator
     *
     * @param \Healthcare\BooleanFilterAnalysisType[]
     * $wellnessPorgramCoverageIndicator
     * @return self
     */
    public function setWellnessPorgramCoverageIndicator(array $wellnessPorgramCoverageIndicator)
    {
        $this->wellnessPorgramCoverageIndicator = $wellnessPorgramCoverageIndicator;
        return $this;
    }

    /**
     * Adds as drugCoverageIndicator
     *
     * @return self
     * @param \Healthcare\BooleanFilterAnalysisType $drugCoverageIndicator
     */
    public function addToDrugCoverageIndicator(\Healthcare\BooleanFilterAnalysisType $drugCoverageIndicator)
    {
        $this->drugCoverageIndicator[] = $drugCoverageIndicator;
        return $this;
    }

    /**
     * isset drugCoverageIndicator
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDrugCoverageIndicator($index)
    {
        return isset($this->drugCoverageIndicator[$index]);
    }

    /**
     * unset drugCoverageIndicator
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDrugCoverageIndicator($index)
    {
        unset($this->drugCoverageIndicator[$index]);
    }

    /**
     * Gets as drugCoverageIndicator
     *
     * @return \Healthcare\BooleanFilterAnalysisType[]
     */
    public function getDrugCoverageIndicator()
    {
        return $this->drugCoverageIndicator;
    }

    /**
     * Sets a new drugCoverageIndicator
     *
     * @param \Healthcare\BooleanFilterAnalysisType[] $drugCoverageIndicator
     * @return self
     */
    public function setDrugCoverageIndicator(array $drugCoverageIndicator)
    {
        $this->drugCoverageIndicator = $drugCoverageIndicator;
        return $this;
    }

    /**
     * Adds as childOnlyCoverageIndicator
     *
     * @return self
     * @param \Healthcare\BooleanFilterAnalysisType $childOnlyCoverageIndicator
     */
    public function addToChildOnlyCoverageIndicator(\Healthcare\BooleanFilterAnalysisType $childOnlyCoverageIndicator)
    {
        $this->childOnlyCoverageIndicator[] = $childOnlyCoverageIndicator;
        return $this;
    }

    /**
     * isset childOnlyCoverageIndicator
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetChildOnlyCoverageIndicator($index)
    {
        return isset($this->childOnlyCoverageIndicator[$index]);
    }

    /**
     * unset childOnlyCoverageIndicator
     *
     * @param scalar $index
     * @return void
     */
    public function unsetChildOnlyCoverageIndicator($index)
    {
        unset($this->childOnlyCoverageIndicator[$index]);
    }

    /**
     * Gets as childOnlyCoverageIndicator
     *
     * @return \Healthcare\BooleanFilterAnalysisType[]
     */
    public function getChildOnlyCoverageIndicator()
    {
        return $this->childOnlyCoverageIndicator;
    }

    /**
     * Sets a new childOnlyCoverageIndicator
     *
     * @param \Healthcare\BooleanFilterAnalysisType[] $childOnlyCoverageIndicator
     * @return self
     */
    public function setChildOnlyCoverageIndicator(array $childOnlyCoverageIndicator)
    {
        $this->childOnlyCoverageIndicator = $childOnlyCoverageIndicator;
        return $this;
    }


}

