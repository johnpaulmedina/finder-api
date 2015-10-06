<?php

namespace Healthcare;

/**
 * Class representing PlanType
 *
 *
 * XSD Type: PlanType
 */
class PlanType
{

    /**
     * @property string $planID
     */
    private $planID = null;

    /**
     * @property string $planNameText
     */
    private $planNameText = null;

    /**
     * @property string $productID
     */
    private $productID = null;

    /**
     * @property string $productNameText
     */
    private $productNameText = null;

    /**
     * @property string $issuerID
     */
    private $issuerID = null;

    /**
     * @property string $issuerNameText
     */
    private $issuerNameText = null;

    /**
     * @property string $issuerStateCode
     */
    private $issuerStateCode = null;

    /**
     * @property string $issuerTollFreeNumber
     */
    private $issuerTollFreeNumber = null;

    /**
     * @property string $issuerLocalNumber
     */
    private $issuerLocalNumber = null;

    /**
     * @property string $issuerTTYNumber
     */
    private $issuerTTYNumber = null;

    /**
     * @property string $providerType
     */
    private $providerType = null;

    /**
     * @property float $baseRateAmount
     */
    private $baseRateAmount = null;

    /**
     * @property string $metalTierType
     */
    private $metalTierType = null;

    /**
     * @property boolean $hSAEligibleIndicator
     */
    private $hSAEligibleIndicator = null;

    /**
     * @property boolean $childOnlyIndicator
     */
    private $childOnlyIndicator = null;

    /**
     * @property boolean $sameSexPartnerIndicator
     */
    private $sameSexPartnerIndicator = null;

    /**
     * @property boolean $domesticPartnerIndicator
     */
    private $domesticPartnerIndicator = null;

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
     * @property boolean $drugCoverageIndicator
     */
    private $drugCoverageIndicator = null;

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
     * @property \Healthcare\AmountDeductibleType $familyAnnualDeductibleAmount
     */
    private $familyAnnualDeductibleAmount = null;

    /**
     * @property \Healthcare\AmountDeductibleType $individualAnnualDeductibleAmount
     */
    private $individualAnnualDeductibleAmount = null;

    /**
     * @property \Healthcare\AmountDeductibleType $familyAnnualOOPLimitAmount
     */
    private $familyAnnualOOPLimitAmount = null;

    /**
     * @property \Healthcare\AmountDeductibleType $individualAnnualOOPLimitAmount
     */
    private $individualAnnualOOPLimitAmount = null;

    /**
     * Gets as planID
     *
     * @return string
     */
    public function getPlanID()
    {
        return $this->planID;
    }

    /**
     * Sets a new planID
     *
     * @param string $planID
     * @return self
     */
    public function setPlanID($planID)
    {
        $this->planID = $planID;
        return $this;
    }

    /**
     * Gets as planNameText
     *
     * @return string
     */
    public function getPlanNameText()
    {
        return $this->planNameText;
    }

    /**
     * Sets a new planNameText
     *
     * @param string $planNameText
     * @return self
     */
    public function setPlanNameText($planNameText)
    {
        $this->planNameText = $planNameText;
        return $this;
    }

    /**
     * Gets as productID
     *
     * @return string
     */
    public function getProductID()
    {
        return $this->productID;
    }

    /**
     * Sets a new productID
     *
     * @param string $productID
     * @return self
     */
    public function setProductID($productID)
    {
        $this->productID = $productID;
        return $this;
    }

    /**
     * Gets as productNameText
     *
     * @return string
     */
    public function getProductNameText()
    {
        return $this->productNameText;
    }

    /**
     * Sets a new productNameText
     *
     * @param string $productNameText
     * @return self
     */
    public function setProductNameText($productNameText)
    {
        $this->productNameText = $productNameText;
        return $this;
    }

    /**
     * Gets as issuerID
     *
     * @return string
     */
    public function getIssuerID()
    {
        return $this->issuerID;
    }

    /**
     * Sets a new issuerID
     *
     * @param string $issuerID
     * @return self
     */
    public function setIssuerID($issuerID)
    {
        $this->issuerID = $issuerID;
        return $this;
    }

    /**
     * Gets as issuerNameText
     *
     * @return string
     */
    public function getIssuerNameText()
    {
        return $this->issuerNameText;
    }

    /**
     * Sets a new issuerNameText
     *
     * @param string $issuerNameText
     * @return self
     */
    public function setIssuerNameText($issuerNameText)
    {
        $this->issuerNameText = $issuerNameText;
        return $this;
    }

    /**
     * Gets as issuerStateCode
     *
     * @return string
     */
    public function getIssuerStateCode()
    {
        return $this->issuerStateCode;
    }

    /**
     * Sets a new issuerStateCode
     *
     * @param string $issuerStateCode
     * @return self
     */
    public function setIssuerStateCode($issuerStateCode)
    {
        $this->issuerStateCode = $issuerStateCode;
        return $this;
    }

    /**
     * Gets as issuerTollFreeNumber
     *
     * @return string
     */
    public function getIssuerTollFreeNumber()
    {
        return $this->issuerTollFreeNumber;
    }

    /**
     * Sets a new issuerTollFreeNumber
     *
     * @param string $issuerTollFreeNumber
     * @return self
     */
    public function setIssuerTollFreeNumber($issuerTollFreeNumber)
    {
        $this->issuerTollFreeNumber = $issuerTollFreeNumber;
        return $this;
    }

    /**
     * Gets as issuerLocalNumber
     *
     * @return string
     */
    public function getIssuerLocalNumber()
    {
        return $this->issuerLocalNumber;
    }

    /**
     * Sets a new issuerLocalNumber
     *
     * @param string $issuerLocalNumber
     * @return self
     */
    public function setIssuerLocalNumber($issuerLocalNumber)
    {
        $this->issuerLocalNumber = $issuerLocalNumber;
        return $this;
    }

    /**
     * Gets as issuerTTYNumber
     *
     * @return string
     */
    public function getIssuerTTYNumber()
    {
        return $this->issuerTTYNumber;
    }

    /**
     * Sets a new issuerTTYNumber
     *
     * @param string $issuerTTYNumber
     * @return self
     */
    public function setIssuerTTYNumber($issuerTTYNumber)
    {
        $this->issuerTTYNumber = $issuerTTYNumber;
        return $this;
    }

    /**
     * Gets as providerType
     *
     * @return string
     */
    public function getProviderType()
    {
        return $this->providerType;
    }

    /**
     * Sets a new providerType
     *
     * @param string $providerType
     * @return self
     */
    public function setProviderType($providerType)
    {
        $this->providerType = $providerType;
        return $this;
    }

    /**
     * Gets as baseRateAmount
     *
     * @return float
     */
    public function getBaseRateAmount()
    {
        return $this->baseRateAmount;
    }

    /**
     * Sets a new baseRateAmount
     *
     * @param float $baseRateAmount
     * @return self
     */
    public function setBaseRateAmount($baseRateAmount)
    {
        $this->baseRateAmount = $baseRateAmount;
        return $this;
    }

    /**
     * Gets as metalTierType
     *
     * @return string
     */
    public function getMetalTierType()
    {
        return $this->metalTierType;
    }

    /**
     * Sets a new metalTierType
     *
     * @param string $metalTierType
     * @return self
     */
    public function setMetalTierType($metalTierType)
    {
        $this->metalTierType = $metalTierType;
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
     * Gets as childOnlyIndicator
     *
     * @return boolean
     */
    public function getChildOnlyIndicator()
    {
        return $this->childOnlyIndicator;
    }

    /**
     * Sets a new childOnlyIndicator
     *
     * @param boolean $childOnlyIndicator
     * @return self
     */
    public function setChildOnlyIndicator($childOnlyIndicator)
    {
        $this->childOnlyIndicator = $childOnlyIndicator;
        return $this;
    }

    /**
     * Gets as sameSexPartnerIndicator
     *
     * @return boolean
     */
    public function getSameSexPartnerIndicator()
    {
        return $this->sameSexPartnerIndicator;
    }

    /**
     * Sets a new sameSexPartnerIndicator
     *
     * @param boolean $sameSexPartnerIndicator
     * @return self
     */
    public function setSameSexPartnerIndicator($sameSexPartnerIndicator)
    {
        $this->sameSexPartnerIndicator = $sameSexPartnerIndicator;
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
     * Gets as familyAnnualDeductibleAmount
     *
     * @return \Healthcare\AmountDeductibleType
     */
    public function getFamilyAnnualDeductibleAmount()
    {
        return $this->familyAnnualDeductibleAmount;
    }

    /**
     * Sets a new familyAnnualDeductibleAmount
     *
     * @param \Healthcare\AmountDeductibleType $familyAnnualDeductibleAmount
     * @return self
     */
    public function setFamilyAnnualDeductibleAmount(\Healthcare\AmountDeductibleType $familyAnnualDeductibleAmount)
    {
        $this->familyAnnualDeductibleAmount = $familyAnnualDeductibleAmount;
        return $this;
    }

    /**
     * Gets as individualAnnualDeductibleAmount
     *
     * @return \Healthcare\AmountDeductibleType
     */
    public function getIndividualAnnualDeductibleAmount()
    {
        return $this->individualAnnualDeductibleAmount;
    }

    /**
     * Sets a new individualAnnualDeductibleAmount
     *
     * @param \Healthcare\AmountDeductibleType $individualAnnualDeductibleAmount
     * @return self
     */
    public function setIndividualAnnualDeductibleAmount(\Healthcare\AmountDeductibleType $individualAnnualDeductibleAmount)
    {
        $this->individualAnnualDeductibleAmount = $individualAnnualDeductibleAmount;
        return $this;
    }

    /**
     * Gets as familyAnnualOOPLimitAmount
     *
     * @return \Healthcare\AmountDeductibleType
     */
    public function getFamilyAnnualOOPLimitAmount()
    {
        return $this->familyAnnualOOPLimitAmount;
    }

    /**
     * Sets a new familyAnnualOOPLimitAmount
     *
     * @param \Healthcare\AmountDeductibleType $familyAnnualOOPLimitAmount
     * @return self
     */
    public function setFamilyAnnualOOPLimitAmount(\Healthcare\AmountDeductibleType $familyAnnualOOPLimitAmount)
    {
        $this->familyAnnualOOPLimitAmount = $familyAnnualOOPLimitAmount;
        return $this;
    }

    /**
     * Gets as individualAnnualOOPLimitAmount
     *
     * @return \Healthcare\AmountDeductibleType
     */
    public function getIndividualAnnualOOPLimitAmount()
    {
        return $this->individualAnnualOOPLimitAmount;
    }

    /**
     * Sets a new individualAnnualOOPLimitAmount
     *
     * @param \Healthcare\AmountDeductibleType $individualAnnualOOPLimitAmount
     * @return self
     */
    public function setIndividualAnnualOOPLimitAmount(\Healthcare\AmountDeductibleType $individualAnnualOOPLimitAmount)
    {
        $this->individualAnnualOOPLimitAmount = $individualAnnualOOPLimitAmount;
        return $this;
    }


}

