<?php

namespace Healthcare;

/**
 * Class representing PlanBenefitsType
 *
 *
 * XSD Type: PlanBenefitsType
 */
class PlanBenefitsType extends PlanType
{

    /**
     * @property \Healthcare\UrlType $issuerURL
     */
    private $issuerURL = null;

    /**
     * @property \Healthcare\UrlType $providerURL
     */
    private $providerURL = null;

    /**
     * @property \Healthcare\UrlType $planSummaryBenefitURL
     */
    private $planSummaryBenefitURL = null;

    /**
     * @property \Healthcare\UrlType $planBrochureURL
     */
    private $planBrochureURL = null;

    /**
     * @property string $diseaseManagementProgramsOfferedText
     */
    private $diseaseManagementProgramsOfferedText = null;

    /**
     * @property boolean $outOfServiceAreaCoverageIndicator
     */
    private $outOfServiceAreaCoverageIndicator = null;

    /**
     * @property string $outOfServiceAreaCoverageIndicatorText
     */
    private $outOfServiceAreaCoverageIndicatorText = null;

    /**
     * @property boolean $outOfCountryCoverageIndicator
     */
    private $outOfCountryCoverageIndicator = null;

    /**
     * @property string $outOfCountryCoverageIndicatorText
     */
    private $outOfCountryCoverageIndicatorText = null;

    /**
     * @property boolean $nationalNetworkIndicator
     */
    private $nationalNetworkIndicator = null;

    /**
     * @property boolean $basicDentalAdultCoverageIndicator
     */
    private $basicDentalAdultCoverageIndicator = null;

    /**
     * @property boolean $basicDentalChildCoverageIndicator
     */
    private $basicDentalChildCoverageIndicator = null;

    /**
     * @property boolean $routineDentalAdultCoverageIndicator
     */
    private $routineDentalAdultCoverageIndicator = null;

    /**
     * @property boolean $routineDentalChildCoverageIndicator
     */
    private $routineDentalChildCoverageIndicator = null;

    /**
     * @property boolean $majorDentalAdultCoverageIndicator
     */
    private $majorDentalAdultCoverageIndicator = null;

    /**
     * @property boolean $majorDentalChildCoverageIndicator
     */
    private $majorDentalChildCoverageIndicator = null;

    /**
     * @property boolean $orthodontiaAdultCoverageIndicator
     */
    private $orthodontiaAdultCoverageIndicator = null;

    /**
     * @property boolean $orthodontiaChildCoverageIndicator
     */
    private $orthodontiaChildCoverageIndicator = null;

    /**
     * @property boolean $routineEyeExamAdultCoverageIndicator
     */
    private $routineEyeExamAdultCoverageIndicator = null;

    /**
     * @property boolean $routineEyeExamChildCoverageIndicator
     */
    private $routineEyeExamChildCoverageIndicator = null;

    /**
     * @property boolean $eyeGlassesChildrenCoverageIndicator
     */
    private $eyeGlassesChildrenCoverageIndicator = null;

    /**
     * @property \Healthcare\BenefitCostShareType $primaryCareVisit
     */
    private $primaryCareVisit = null;

    /**
     * @property \Healthcare\BenefitCostShareType $specialistVisit
     */
    private $specialistVisit = null;

    /**
     * @property boolean $referralRequiredSpecialistIndicator
     */
    private $referralRequiredSpecialistIndicator = null;

    /**
     * @property string $referralRequiredSpecialistText
     */
    private $referralRequiredSpecialistText = null;

    /**
     * @property \Healthcare\BenefitCostShareType $imaging
     */
    private $imaging = null;

    /**
     * @property \Healthcare\BenefitCostShareType $xRayDiagnosticImaging
     */
    private $xRayDiagnosticImaging = null;

    /**
     * @property \Healthcare\BenefitCostShareType
     * $laboratoryOutPatientProfessionalServices
     */
    private $laboratoryOutPatientProfessionalServices = null;

    /**
     * @property \Healthcare\BenefitCostShareType $inpatientHospitalServices
     */
    private $inpatientHospitalServices = null;

    /**
     * @property \Healthcare\BenefitCostShareType
     * $inpatientPhysicianAndSurgicalService
     */
    private $inpatientPhysicianAndSurgicalService = null;

    /**
     * @property integer $maximumNumberOfDaysChargingInpatientCopay
     */
    private $maximumNumberOfDaysChargingInpatientCopay = null;

    /**
     * @property \Healthcare\BenefitCostShareType $emergencyRoomServices
     */
    private $emergencyRoomServices = null;

    /**
     * @property \Healthcare\BenefitCostShareType
     * $emergencyTransportationAmbulanceService
     */
    private $emergencyTransportationAmbulanceService = null;

    /**
     * @property \Healthcare\BenefitCostShareType $genericDrugs
     */
    private $genericDrugs = null;

    /**
     * @property \Healthcare\BenefitCostShareType $preferredBrandDrugs
     */
    private $preferredBrandDrugs = null;

    /**
     * @property \Healthcare\BenefitCostShareType $nonPreferredBrandDrugs
     */
    private $nonPreferredBrandDrugs = null;

    /**
     * @property \Healthcare\BenefitCostShareType $specialityDrugs
     */
    private $specialityDrugs = null;

    /**
     * @property \Healthcare\BenefitCostShareType $mentalHealthOutPatientServices
     */
    private $mentalHealthOutPatientServices = null;

    /**
     * @property \Healthcare\BenefitCostShareType $mentalHealthIntPatientServices
     */
    private $mentalHealthIntPatientServices = null;

    /**
     * @property \Healthcare\BenefitCostShareType
     * $substanceAbuseDisorderOutPatientServices
     */
    private $substanceAbuseDisorderOutPatientServices = null;

    /**
     * @property \Healthcare\BenefitCostShareType
     * $substanceAbuseDisorderInPatientServices
     */
    private $substanceAbuseDisorderInPatientServices = null;

    /**
     * @property boolean $noticeRequiredForPregnancyIndicator
     */
    private $noticeRequiredForPregnancyIndicator = null;

    /**
     * @property \Healthcare\BenefitCostShareType $prenatalAndPostnatalCare
     */
    private $prenatalAndPostnatalCare = null;

    /**
     * @property \Healthcare\BenefitCostShareType
     * $deliveryAndAllInpatientServicesMaternityCare
     */
    private $deliveryAndAllInpatientServicesMaternityCare = null;

    /**
     * @property string[] $includedBenefits
     */
    private $includedBenefits = null;

    /**
     * @property string[] $excludedBenefits
     */
    private $excludedBenefits = null;

    /**
     * @property string[] $limitedBenefits
     */
    private $limitedBenefits = null;

    /**
     * Gets as issuerURL
     *
     * @return \Healthcare\UrlType
     */
    public function getIssuerURL()
    {
        return $this->issuerURL;
    }

    /**
     * Sets a new issuerURL
     *
     * @param \Healthcare\UrlType $issuerURL
     * @return self
     */
    public function setIssuerURL(\Healthcare\UrlType $issuerURL)
    {
        $this->issuerURL = $issuerURL;
        return $this;
    }

    /**
     * Gets as providerURL
     *
     * @return \Healthcare\UrlType
     */
    public function getProviderURL()
    {
        return $this->providerURL;
    }

    /**
     * Sets a new providerURL
     *
     * @param \Healthcare\UrlType $providerURL
     * @return self
     */
    public function setProviderURL(\Healthcare\UrlType $providerURL)
    {
        $this->providerURL = $providerURL;
        return $this;
    }

    /**
     * Gets as planSummaryBenefitURL
     *
     * @return \Healthcare\UrlType
     */
    public function getPlanSummaryBenefitURL()
    {
        return $this->planSummaryBenefitURL;
    }

    /**
     * Sets a new planSummaryBenefitURL
     *
     * @param \Healthcare\UrlType $planSummaryBenefitURL
     * @return self
     */
    public function setPlanSummaryBenefitURL(\Healthcare\UrlType $planSummaryBenefitURL)
    {
        $this->planSummaryBenefitURL = $planSummaryBenefitURL;
        return $this;
    }

    /**
     * Gets as planBrochureURL
     *
     * @return \Healthcare\UrlType
     */
    public function getPlanBrochureURL()
    {
        return $this->planBrochureURL;
    }

    /**
     * Sets a new planBrochureURL
     *
     * @param \Healthcare\UrlType $planBrochureURL
     * @return self
     */
    public function setPlanBrochureURL(\Healthcare\UrlType $planBrochureURL)
    {
        $this->planBrochureURL = $planBrochureURL;
        return $this;
    }

    /**
     * Gets as diseaseManagementProgramsOfferedText
     *
     * @return string
     */
    public function getDiseaseManagementProgramsOfferedText()
    {
        return $this->diseaseManagementProgramsOfferedText;
    }

    /**
     * Sets a new diseaseManagementProgramsOfferedText
     *
     * @param string $diseaseManagementProgramsOfferedText
     * @return self
     */
    public function setDiseaseManagementProgramsOfferedText($diseaseManagementProgramsOfferedText)
    {
        $this->diseaseManagementProgramsOfferedText = $diseaseManagementProgramsOfferedText;
        return $this;
    }

    /**
     * Gets as outOfServiceAreaCoverageIndicator
     *
     * @return boolean
     */
    public function getOutOfServiceAreaCoverageIndicator()
    {
        return $this->outOfServiceAreaCoverageIndicator;
    }

    /**
     * Sets a new outOfServiceAreaCoverageIndicator
     *
     * @param boolean $outOfServiceAreaCoverageIndicator
     * @return self
     */
    public function setOutOfServiceAreaCoverageIndicator($outOfServiceAreaCoverageIndicator)
    {
        $this->outOfServiceAreaCoverageIndicator = $outOfServiceAreaCoverageIndicator;
        return $this;
    }

    /**
     * Gets as outOfServiceAreaCoverageIndicatorText
     *
     * @return string
     */
    public function getOutOfServiceAreaCoverageIndicatorText()
    {
        return $this->outOfServiceAreaCoverageIndicatorText;
    }

    /**
     * Sets a new outOfServiceAreaCoverageIndicatorText
     *
     * @param string $outOfServiceAreaCoverageIndicatorText
     * @return self
     */
    public function setOutOfServiceAreaCoverageIndicatorText($outOfServiceAreaCoverageIndicatorText)
    {
        $this->outOfServiceAreaCoverageIndicatorText = $outOfServiceAreaCoverageIndicatorText;
        return $this;
    }

    /**
     * Gets as outOfCountryCoverageIndicator
     *
     * @return boolean
     */
    public function getOutOfCountryCoverageIndicator()
    {
        return $this->outOfCountryCoverageIndicator;
    }

    /**
     * Sets a new outOfCountryCoverageIndicator
     *
     * @param boolean $outOfCountryCoverageIndicator
     * @return self
     */
    public function setOutOfCountryCoverageIndicator($outOfCountryCoverageIndicator)
    {
        $this->outOfCountryCoverageIndicator = $outOfCountryCoverageIndicator;
        return $this;
    }

    /**
     * Gets as outOfCountryCoverageIndicatorText
     *
     * @return string
     */
    public function getOutOfCountryCoverageIndicatorText()
    {
        return $this->outOfCountryCoverageIndicatorText;
    }

    /**
     * Sets a new outOfCountryCoverageIndicatorText
     *
     * @param string $outOfCountryCoverageIndicatorText
     * @return self
     */
    public function setOutOfCountryCoverageIndicatorText($outOfCountryCoverageIndicatorText)
    {
        $this->outOfCountryCoverageIndicatorText = $outOfCountryCoverageIndicatorText;
        return $this;
    }

    /**
     * Gets as nationalNetworkIndicator
     *
     * @return boolean
     */
    public function getNationalNetworkIndicator()
    {
        return $this->nationalNetworkIndicator;
    }

    /**
     * Sets a new nationalNetworkIndicator
     *
     * @param boolean $nationalNetworkIndicator
     * @return self
     */
    public function setNationalNetworkIndicator($nationalNetworkIndicator)
    {
        $this->nationalNetworkIndicator = $nationalNetworkIndicator;
        return $this;
    }

    /**
     * Gets as basicDentalAdultCoverageIndicator
     *
     * @return boolean
     */
    public function getBasicDentalAdultCoverageIndicator()
    {
        return $this->basicDentalAdultCoverageIndicator;
    }

    /**
     * Sets a new basicDentalAdultCoverageIndicator
     *
     * @param boolean $basicDentalAdultCoverageIndicator
     * @return self
     */
    public function setBasicDentalAdultCoverageIndicator($basicDentalAdultCoverageIndicator)
    {
        $this->basicDentalAdultCoverageIndicator = $basicDentalAdultCoverageIndicator;
        return $this;
    }

    /**
     * Gets as basicDentalChildCoverageIndicator
     *
     * @return boolean
     */
    public function getBasicDentalChildCoverageIndicator()
    {
        return $this->basicDentalChildCoverageIndicator;
    }

    /**
     * Sets a new basicDentalChildCoverageIndicator
     *
     * @param boolean $basicDentalChildCoverageIndicator
     * @return self
     */
    public function setBasicDentalChildCoverageIndicator($basicDentalChildCoverageIndicator)
    {
        $this->basicDentalChildCoverageIndicator = $basicDentalChildCoverageIndicator;
        return $this;
    }

    /**
     * Gets as routineDentalAdultCoverageIndicator
     *
     * @return boolean
     */
    public function getRoutineDentalAdultCoverageIndicator()
    {
        return $this->routineDentalAdultCoverageIndicator;
    }

    /**
     * Sets a new routineDentalAdultCoverageIndicator
     *
     * @param boolean $routineDentalAdultCoverageIndicator
     * @return self
     */
    public function setRoutineDentalAdultCoverageIndicator($routineDentalAdultCoverageIndicator)
    {
        $this->routineDentalAdultCoverageIndicator = $routineDentalAdultCoverageIndicator;
        return $this;
    }

    /**
     * Gets as routineDentalChildCoverageIndicator
     *
     * @return boolean
     */
    public function getRoutineDentalChildCoverageIndicator()
    {
        return $this->routineDentalChildCoverageIndicator;
    }

    /**
     * Sets a new routineDentalChildCoverageIndicator
     *
     * @param boolean $routineDentalChildCoverageIndicator
     * @return self
     */
    public function setRoutineDentalChildCoverageIndicator($routineDentalChildCoverageIndicator)
    {
        $this->routineDentalChildCoverageIndicator = $routineDentalChildCoverageIndicator;
        return $this;
    }

    /**
     * Gets as majorDentalAdultCoverageIndicator
     *
     * @return boolean
     */
    public function getMajorDentalAdultCoverageIndicator()
    {
        return $this->majorDentalAdultCoverageIndicator;
    }

    /**
     * Sets a new majorDentalAdultCoverageIndicator
     *
     * @param boolean $majorDentalAdultCoverageIndicator
     * @return self
     */
    public function setMajorDentalAdultCoverageIndicator($majorDentalAdultCoverageIndicator)
    {
        $this->majorDentalAdultCoverageIndicator = $majorDentalAdultCoverageIndicator;
        return $this;
    }

    /**
     * Gets as majorDentalChildCoverageIndicator
     *
     * @return boolean
     */
    public function getMajorDentalChildCoverageIndicator()
    {
        return $this->majorDentalChildCoverageIndicator;
    }

    /**
     * Sets a new majorDentalChildCoverageIndicator
     *
     * @param boolean $majorDentalChildCoverageIndicator
     * @return self
     */
    public function setMajorDentalChildCoverageIndicator($majorDentalChildCoverageIndicator)
    {
        $this->majorDentalChildCoverageIndicator = $majorDentalChildCoverageIndicator;
        return $this;
    }

    /**
     * Gets as orthodontiaAdultCoverageIndicator
     *
     * @return boolean
     */
    public function getOrthodontiaAdultCoverageIndicator()
    {
        return $this->orthodontiaAdultCoverageIndicator;
    }

    /**
     * Sets a new orthodontiaAdultCoverageIndicator
     *
     * @param boolean $orthodontiaAdultCoverageIndicator
     * @return self
     */
    public function setOrthodontiaAdultCoverageIndicator($orthodontiaAdultCoverageIndicator)
    {
        $this->orthodontiaAdultCoverageIndicator = $orthodontiaAdultCoverageIndicator;
        return $this;
    }

    /**
     * Gets as orthodontiaChildCoverageIndicator
     *
     * @return boolean
     */
    public function getOrthodontiaChildCoverageIndicator()
    {
        return $this->orthodontiaChildCoverageIndicator;
    }

    /**
     * Sets a new orthodontiaChildCoverageIndicator
     *
     * @param boolean $orthodontiaChildCoverageIndicator
     * @return self
     */
    public function setOrthodontiaChildCoverageIndicator($orthodontiaChildCoverageIndicator)
    {
        $this->orthodontiaChildCoverageIndicator = $orthodontiaChildCoverageIndicator;
        return $this;
    }

    /**
     * Gets as routineEyeExamAdultCoverageIndicator
     *
     * @return boolean
     */
    public function getRoutineEyeExamAdultCoverageIndicator()
    {
        return $this->routineEyeExamAdultCoverageIndicator;
    }

    /**
     * Sets a new routineEyeExamAdultCoverageIndicator
     *
     * @param boolean $routineEyeExamAdultCoverageIndicator
     * @return self
     */
    public function setRoutineEyeExamAdultCoverageIndicator($routineEyeExamAdultCoverageIndicator)
    {
        $this->routineEyeExamAdultCoverageIndicator = $routineEyeExamAdultCoverageIndicator;
        return $this;
    }

    /**
     * Gets as routineEyeExamChildCoverageIndicator
     *
     * @return boolean
     */
    public function getRoutineEyeExamChildCoverageIndicator()
    {
        return $this->routineEyeExamChildCoverageIndicator;
    }

    /**
     * Sets a new routineEyeExamChildCoverageIndicator
     *
     * @param boolean $routineEyeExamChildCoverageIndicator
     * @return self
     */
    public function setRoutineEyeExamChildCoverageIndicator($routineEyeExamChildCoverageIndicator)
    {
        $this->routineEyeExamChildCoverageIndicator = $routineEyeExamChildCoverageIndicator;
        return $this;
    }

    /**
     * Gets as eyeGlassesChildrenCoverageIndicator
     *
     * @return boolean
     */
    public function getEyeGlassesChildrenCoverageIndicator()
    {
        return $this->eyeGlassesChildrenCoverageIndicator;
    }

    /**
     * Sets a new eyeGlassesChildrenCoverageIndicator
     *
     * @param boolean $eyeGlassesChildrenCoverageIndicator
     * @return self
     */
    public function setEyeGlassesChildrenCoverageIndicator($eyeGlassesChildrenCoverageIndicator)
    {
        $this->eyeGlassesChildrenCoverageIndicator = $eyeGlassesChildrenCoverageIndicator;
        return $this;
    }

    /**
     * Gets as primaryCareVisit
     *
     * @return \Healthcare\BenefitCostShareType
     */
    public function getPrimaryCareVisit()
    {
        return $this->primaryCareVisit;
    }

    /**
     * Sets a new primaryCareVisit
     *
     * @param \Healthcare\BenefitCostShareType $primaryCareVisit
     * @return self
     */
    public function setPrimaryCareVisit(\Healthcare\BenefitCostShareType $primaryCareVisit)
    {
        $this->primaryCareVisit = $primaryCareVisit;
        return $this;
    }

    /**
     * Gets as specialistVisit
     *
     * @return \Healthcare\BenefitCostShareType
     */
    public function getSpecialistVisit()
    {
        return $this->specialistVisit;
    }

    /**
     * Sets a new specialistVisit
     *
     * @param \Healthcare\BenefitCostShareType $specialistVisit
     * @return self
     */
    public function setSpecialistVisit(\Healthcare\BenefitCostShareType $specialistVisit)
    {
        $this->specialistVisit = $specialistVisit;
        return $this;
    }

    /**
     * Gets as referralRequiredSpecialistIndicator
     *
     * @return boolean
     */
    public function getReferralRequiredSpecialistIndicator()
    {
        return $this->referralRequiredSpecialistIndicator;
    }

    /**
     * Sets a new referralRequiredSpecialistIndicator
     *
     * @param boolean $referralRequiredSpecialistIndicator
     * @return self
     */
    public function setReferralRequiredSpecialistIndicator($referralRequiredSpecialistIndicator)
    {
        $this->referralRequiredSpecialistIndicator = $referralRequiredSpecialistIndicator;
        return $this;
    }

    /**
     * Gets as referralRequiredSpecialistText
     *
     * @return string
     */
    public function getReferralRequiredSpecialistText()
    {
        return $this->referralRequiredSpecialistText;
    }

    /**
     * Sets a new referralRequiredSpecialistText
     *
     * @param string $referralRequiredSpecialistText
     * @return self
     */
    public function setReferralRequiredSpecialistText($referralRequiredSpecialistText)
    {
        $this->referralRequiredSpecialistText = $referralRequiredSpecialistText;
        return $this;
    }

    /**
     * Gets as imaging
     *
     * @return \Healthcare\BenefitCostShareType
     */
    public function getImaging()
    {
        return $this->imaging;
    }

    /**
     * Sets a new imaging
     *
     * @param \Healthcare\BenefitCostShareType $imaging
     * @return self
     */
    public function setImaging(\Healthcare\BenefitCostShareType $imaging)
    {
        $this->imaging = $imaging;
        return $this;
    }

    /**
     * Gets as xRayDiagnosticImaging
     *
     * @return \Healthcare\BenefitCostShareType
     */
    public function getXRayDiagnosticImaging()
    {
        return $this->xRayDiagnosticImaging;
    }

    /**
     * Sets a new xRayDiagnosticImaging
     *
     * @param \Healthcare\BenefitCostShareType $xRayDiagnosticImaging
     * @return self
     */
    public function setXRayDiagnosticImaging(\Healthcare\BenefitCostShareType $xRayDiagnosticImaging)
    {
        $this->xRayDiagnosticImaging = $xRayDiagnosticImaging;
        return $this;
    }

    /**
     * Gets as laboratoryOutPatientProfessionalServices
     *
     * @return \Healthcare\BenefitCostShareType
     */
    public function getLaboratoryOutPatientProfessionalServices()
    {
        return $this->laboratoryOutPatientProfessionalServices;
    }

    /**
     * Sets a new laboratoryOutPatientProfessionalServices
     *
     * @param \Healthcare\BenefitCostShareType
     * $laboratoryOutPatientProfessionalServices
     * @return self
     */
    public function setLaboratoryOutPatientProfessionalServices(\Healthcare\BenefitCostShareType $laboratoryOutPatientProfessionalServices)
    {
        $this->laboratoryOutPatientProfessionalServices = $laboratoryOutPatientProfessionalServices;
        return $this;
    }

    /**
     * Gets as inpatientHospitalServices
     *
     * @return \Healthcare\BenefitCostShareType
     */
    public function getInpatientHospitalServices()
    {
        return $this->inpatientHospitalServices;
    }

    /**
     * Sets a new inpatientHospitalServices
     *
     * @param \Healthcare\BenefitCostShareType $inpatientHospitalServices
     * @return self
     */
    public function setInpatientHospitalServices(\Healthcare\BenefitCostShareType $inpatientHospitalServices)
    {
        $this->inpatientHospitalServices = $inpatientHospitalServices;
        return $this;
    }

    /**
     * Gets as inpatientPhysicianAndSurgicalService
     *
     * @return \Healthcare\BenefitCostShareType
     */
    public function getInpatientPhysicianAndSurgicalService()
    {
        return $this->inpatientPhysicianAndSurgicalService;
    }

    /**
     * Sets a new inpatientPhysicianAndSurgicalService
     *
     * @param \Healthcare\BenefitCostShareType $inpatientPhysicianAndSurgicalService
     * @return self
     */
    public function setInpatientPhysicianAndSurgicalService(\Healthcare\BenefitCostShareType $inpatientPhysicianAndSurgicalService)
    {
        $this->inpatientPhysicianAndSurgicalService = $inpatientPhysicianAndSurgicalService;
        return $this;
    }

    /**
     * Gets as maximumNumberOfDaysChargingInpatientCopay
     *
     * @return integer
     */
    public function getMaximumNumberOfDaysChargingInpatientCopay()
    {
        return $this->maximumNumberOfDaysChargingInpatientCopay;
    }

    /**
     * Sets a new maximumNumberOfDaysChargingInpatientCopay
     *
     * @param integer $maximumNumberOfDaysChargingInpatientCopay
     * @return self
     */
    public function setMaximumNumberOfDaysChargingInpatientCopay($maximumNumberOfDaysChargingInpatientCopay)
    {
        $this->maximumNumberOfDaysChargingInpatientCopay = $maximumNumberOfDaysChargingInpatientCopay;
        return $this;
    }

    /**
     * Gets as emergencyRoomServices
     *
     * @return \Healthcare\BenefitCostShareType
     */
    public function getEmergencyRoomServices()
    {
        return $this->emergencyRoomServices;
    }

    /**
     * Sets a new emergencyRoomServices
     *
     * @param \Healthcare\BenefitCostShareType $emergencyRoomServices
     * @return self
     */
    public function setEmergencyRoomServices(\Healthcare\BenefitCostShareType $emergencyRoomServices)
    {
        $this->emergencyRoomServices = $emergencyRoomServices;
        return $this;
    }

    /**
     * Gets as emergencyTransportationAmbulanceService
     *
     * @return \Healthcare\BenefitCostShareType
     */
    public function getEmergencyTransportationAmbulanceService()
    {
        return $this->emergencyTransportationAmbulanceService;
    }

    /**
     * Sets a new emergencyTransportationAmbulanceService
     *
     * @param \Healthcare\BenefitCostShareType
     * $emergencyTransportationAmbulanceService
     * @return self
     */
    public function setEmergencyTransportationAmbulanceService(\Healthcare\BenefitCostShareType $emergencyTransportationAmbulanceService)
    {
        $this->emergencyTransportationAmbulanceService = $emergencyTransportationAmbulanceService;
        return $this;
    }

    /**
     * Gets as genericDrugs
     *
     * @return \Healthcare\BenefitCostShareType
     */
    public function getGenericDrugs()
    {
        return $this->genericDrugs;
    }

    /**
     * Sets a new genericDrugs
     *
     * @param \Healthcare\BenefitCostShareType $genericDrugs
     * @return self
     */
    public function setGenericDrugs(\Healthcare\BenefitCostShareType $genericDrugs)
    {
        $this->genericDrugs = $genericDrugs;
        return $this;
    }

    /**
     * Gets as preferredBrandDrugs
     *
     * @return \Healthcare\BenefitCostShareType
     */
    public function getPreferredBrandDrugs()
    {
        return $this->preferredBrandDrugs;
    }

    /**
     * Sets a new preferredBrandDrugs
     *
     * @param \Healthcare\BenefitCostShareType $preferredBrandDrugs
     * @return self
     */
    public function setPreferredBrandDrugs(\Healthcare\BenefitCostShareType $preferredBrandDrugs)
    {
        $this->preferredBrandDrugs = $preferredBrandDrugs;
        return $this;
    }

    /**
     * Gets as nonPreferredBrandDrugs
     *
     * @return \Healthcare\BenefitCostShareType
     */
    public function getNonPreferredBrandDrugs()
    {
        return $this->nonPreferredBrandDrugs;
    }

    /**
     * Sets a new nonPreferredBrandDrugs
     *
     * @param \Healthcare\BenefitCostShareType $nonPreferredBrandDrugs
     * @return self
     */
    public function setNonPreferredBrandDrugs(\Healthcare\BenefitCostShareType $nonPreferredBrandDrugs)
    {
        $this->nonPreferredBrandDrugs = $nonPreferredBrandDrugs;
        return $this;
    }

    /**
     * Gets as specialityDrugs
     *
     * @return \Healthcare\BenefitCostShareType
     */
    public function getSpecialityDrugs()
    {
        return $this->specialityDrugs;
    }

    /**
     * Sets a new specialityDrugs
     *
     * @param \Healthcare\BenefitCostShareType $specialityDrugs
     * @return self
     */
    public function setSpecialityDrugs(\Healthcare\BenefitCostShareType $specialityDrugs)
    {
        $this->specialityDrugs = $specialityDrugs;
        return $this;
    }

    /**
     * Gets as mentalHealthOutPatientServices
     *
     * @return \Healthcare\BenefitCostShareType
     */
    public function getMentalHealthOutPatientServices()
    {
        return $this->mentalHealthOutPatientServices;
    }

    /**
     * Sets a new mentalHealthOutPatientServices
     *
     * @param \Healthcare\BenefitCostShareType $mentalHealthOutPatientServices
     * @return self
     */
    public function setMentalHealthOutPatientServices(\Healthcare\BenefitCostShareType $mentalHealthOutPatientServices)
    {
        $this->mentalHealthOutPatientServices = $mentalHealthOutPatientServices;
        return $this;
    }

    /**
     * Gets as mentalHealthIntPatientServices
     *
     * @return \Healthcare\BenefitCostShareType
     */
    public function getMentalHealthIntPatientServices()
    {
        return $this->mentalHealthIntPatientServices;
    }

    /**
     * Sets a new mentalHealthIntPatientServices
     *
     * @param \Healthcare\BenefitCostShareType $mentalHealthIntPatientServices
     * @return self
     */
    public function setMentalHealthIntPatientServices(\Healthcare\BenefitCostShareType $mentalHealthIntPatientServices)
    {
        $this->mentalHealthIntPatientServices = $mentalHealthIntPatientServices;
        return $this;
    }

    /**
     * Gets as substanceAbuseDisorderOutPatientServices
     *
     * @return \Healthcare\BenefitCostShareType
     */
    public function getSubstanceAbuseDisorderOutPatientServices()
    {
        return $this->substanceAbuseDisorderOutPatientServices;
    }

    /**
     * Sets a new substanceAbuseDisorderOutPatientServices
     *
     * @param \Healthcare\BenefitCostShareType
     * $substanceAbuseDisorderOutPatientServices
     * @return self
     */
    public function setSubstanceAbuseDisorderOutPatientServices(\Healthcare\BenefitCostShareType $substanceAbuseDisorderOutPatientServices)
    {
        $this->substanceAbuseDisorderOutPatientServices = $substanceAbuseDisorderOutPatientServices;
        return $this;
    }

    /**
     * Gets as substanceAbuseDisorderInPatientServices
     *
     * @return \Healthcare\BenefitCostShareType
     */
    public function getSubstanceAbuseDisorderInPatientServices()
    {
        return $this->substanceAbuseDisorderInPatientServices;
    }

    /**
     * Sets a new substanceAbuseDisorderInPatientServices
     *
     * @param \Healthcare\BenefitCostShareType
     * $substanceAbuseDisorderInPatientServices
     * @return self
     */
    public function setSubstanceAbuseDisorderInPatientServices(\Healthcare\BenefitCostShareType $substanceAbuseDisorderInPatientServices)
    {
        $this->substanceAbuseDisorderInPatientServices = $substanceAbuseDisorderInPatientServices;
        return $this;
    }

    /**
     * Gets as noticeRequiredForPregnancyIndicator
     *
     * @return boolean
     */
    public function getNoticeRequiredForPregnancyIndicator()
    {
        return $this->noticeRequiredForPregnancyIndicator;
    }

    /**
     * Sets a new noticeRequiredForPregnancyIndicator
     *
     * @param boolean $noticeRequiredForPregnancyIndicator
     * @return self
     */
    public function setNoticeRequiredForPregnancyIndicator($noticeRequiredForPregnancyIndicator)
    {
        $this->noticeRequiredForPregnancyIndicator = $noticeRequiredForPregnancyIndicator;
        return $this;
    }

    /**
     * Gets as prenatalAndPostnatalCare
     *
     * @return \Healthcare\BenefitCostShareType
     */
    public function getPrenatalAndPostnatalCare()
    {
        return $this->prenatalAndPostnatalCare;
    }

    /**
     * Sets a new prenatalAndPostnatalCare
     *
     * @param \Healthcare\BenefitCostShareType $prenatalAndPostnatalCare
     * @return self
     */
    public function setPrenatalAndPostnatalCare(\Healthcare\BenefitCostShareType $prenatalAndPostnatalCare)
    {
        $this->prenatalAndPostnatalCare = $prenatalAndPostnatalCare;
        return $this;
    }

    /**
     * Gets as deliveryAndAllInpatientServicesMaternityCare
     *
     * @return \Healthcare\BenefitCostShareType
     */
    public function getDeliveryAndAllInpatientServicesMaternityCare()
    {
        return $this->deliveryAndAllInpatientServicesMaternityCare;
    }

    /**
     * Sets a new deliveryAndAllInpatientServicesMaternityCare
     *
     * @param \Healthcare\BenefitCostShareType
     * $deliveryAndAllInpatientServicesMaternityCare
     * @return self
     */
    public function setDeliveryAndAllInpatientServicesMaternityCare(\Healthcare\BenefitCostShareType $deliveryAndAllInpatientServicesMaternityCare)
    {
        $this->deliveryAndAllInpatientServicesMaternityCare = $deliveryAndAllInpatientServicesMaternityCare;
        return $this;
    }

    /**
     * Adds as benefitName
     *
     * @return self
     * @param string $benefitName
     */
    public function addToIncludedBenefits($benefitName)
    {
        $this->includedBenefits[] = $benefitName;
        return $this;
    }

    /**
     * isset includedBenefits
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetIncludedBenefits($index)
    {
        return isset($this->includedBenefits[$index]);
    }

    /**
     * unset includedBenefits
     *
     * @param scalar $index
     * @return void
     */
    public function unsetIncludedBenefits($index)
    {
        unset($this->includedBenefits[$index]);
    }

    /**
     * Gets as includedBenefits
     *
     * @return string[]
     */
    public function getIncludedBenefits()
    {
        return $this->includedBenefits;
    }

    /**
     * Sets a new includedBenefits
     *
     * @param string[] $includedBenefits
     * @return self
     */
    public function setIncludedBenefits(array $includedBenefits)
    {
        $this->includedBenefits = $includedBenefits;
        return $this;
    }

    /**
     * Adds as benefitName
     *
     * @return self
     * @param string $benefitName
     */
    public function addToExcludedBenefits($benefitName)
    {
        $this->excludedBenefits[] = $benefitName;
        return $this;
    }

    /**
     * isset excludedBenefits
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetExcludedBenefits($index)
    {
        return isset($this->excludedBenefits[$index]);
    }

    /**
     * unset excludedBenefits
     *
     * @param scalar $index
     * @return void
     */
    public function unsetExcludedBenefits($index)
    {
        unset($this->excludedBenefits[$index]);
    }

    /**
     * Gets as excludedBenefits
     *
     * @return string[]
     */
    public function getExcludedBenefits()
    {
        return $this->excludedBenefits;
    }

    /**
     * Sets a new excludedBenefits
     *
     * @param string[] $excludedBenefits
     * @return self
     */
    public function setExcludedBenefits(array $excludedBenefits)
    {
        $this->excludedBenefits = $excludedBenefits;
        return $this;
    }

    /**
     * Adds as benefitName
     *
     * @return self
     * @param string $benefitName
     */
    public function addToLimitedBenefits($benefitName)
    {
        $this->limitedBenefits[] = $benefitName;
        return $this;
    }

    /**
     * isset limitedBenefits
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLimitedBenefits($index)
    {
        return isset($this->limitedBenefits[$index]);
    }

    /**
     * unset limitedBenefits
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLimitedBenefits($index)
    {
        unset($this->limitedBenefits[$index]);
    }

    /**
     * Gets as limitedBenefits
     *
     * @return string[]
     */
    public function getLimitedBenefits()
    {
        return $this->limitedBenefits;
    }

    /**
     * Sets a new limitedBenefits
     *
     * @param string[] $limitedBenefits
     * @return self
     */
    public function setLimitedBenefits(array $limitedBenefits)
    {
        $this->limitedBenefits = $limitedBenefits;
        return $this;
    }


}

