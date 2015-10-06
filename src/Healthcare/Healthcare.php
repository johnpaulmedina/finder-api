<?php

namespace Healthcare;

function __autoload($class_name) {
    include $class_name . '.php';
}

class Healthcare {

    private $config,$host,$payload,$doc,$xpath,$version;
    static $resources = [];
    static $responseArray = [];

    public function __construct($config) {
        $this->config = $config;
        $this->version = "v3.0";
        $this->host = "https://api.finder.healthcare.gov/{$this->version}/";

        $this->doc = new \DOMDocument();
		$this->doc->load(__DIR__."/Schemas/finder_api_{$this->version}.xsd");
    }


    /**
     * The host url.
     *
     * @return string
     */
    public function hostUrl()
    {
    	return $this->host;
    }


    /**
     * Returns the value of the needed URL including the service path.
     *
     * @return string
     */
    public function getUrl()
    {
    	return $this->hostUrl().$this->service;
    }


    /**
     * Returns the value of a ZipCode API Post
     *
     * @return XML
     */
	public function ZipCodeLookup($zipcode)
    {
    	$zipcodeRequest = new ZipCodeValidationRequest();
    	$zipcodeRequest->setZipCode($zipcode);
    	if(null !== $zipcodeRequest->getZipCode()) {
    		$sequence = ['ZipCode'=>$zipcodeRequest->getZipCode()];
    		$this->buildXml('getCountiesForZip',(new \ReflectionClass($zipcodeRequest))->getShortName(),$sequence);
    		$this->makeRequest();
    	} else {
    		echo "\033[31m ZipCode lookup failed! \033[0m \n";
    	}	
    }



    public function getQuote($zipcode,$dob,$gender,$relation,$effectiveDate)
    {

    	$zipcodeRequest = new ZipCodeValidationRequest();
    	$zipcodeRequest->setZipCode($zipcode);
    	if(null !== $zipcodeRequest->getZipCode()) {
    		$sequence = ['ZipCode'=>$zipcodeRequest->getZipCode()];
    		$response = $this->buildXml('getCountiesForZip',(new \ReflectionClass($zipcodeRequest))->getShortName(),$sequence)->makeRequest();
    		// print_r($response);
    	}

    	// $this->parseResponse($response);
    	$doc = new \DOMDocument();
		$doc->loadXML($response);
		$doc->preserveWhiteSpace = false; 
		$doc->saveXML();

		$this->xpath = new \DOMXPath($doc);
		$this->xpath->registerNamespace('ns2', 'http://www.w3.org/2001/XMLSchema');
		
		$resources = $this->xpath->evaluate("//ns2:ResponseHeader");

		$availableCounties = [];

		foreach ($resources as $resource) {
			$value = trim($resource->nodeValue);
			if($value="Success") {
				$counties = $this->xpath->evaluate("//ns2:Counties/ns2:County");
				$cc = 0;
				foreach($counties as $county) {
					// $countyName = $availableCounties[$cc];
					$countyItems = $this->xpath->evaluate('*', $county);
				 	foreach ($countyItems as $item) {
				 		$availableCounties[$cc][$item->nodeName] = $item->nodeValue;
				 		// echo $item->nodeName;
				 	}
				 	$cc++;
				}

				$i=0;
				
				$counties = [];
				foreach($availableCounties as $county) {
					$countyName = $county['CountyName'];
					$availableCounties[$countyName] = [];
					array_push($counties, $countyName);
					foreach($county as $key => $value) {
						$availableCounties[$countyName][$key] = $value;
					}

					unset($availableCounties[$i]);
					$i++;
				}
				$availableCounties['Counties'] = $counties;
			}
		}
		// print_r($availableCounties);
		// if(count($availableCounties['Counties'])>1)	{
		// 	echo "Please choose a county\n";
		// }

    	$request = [];

    	// $request['ZipCode'] = "33196";
    	$request['Enrollees'] = [];
    	$request['Enrollees'][0] = [];
    	$request['Enrollees'][0]['DateOfBirth'] = $dob;
    	$request['Enrollees'][0]['Gender'] = $gender;
    	$request['Enrollees'][0]['Relation'] = $relation;
    	$request['Enrollees'][0]['InHouseholdIndicator'] = true;

    	
    	$request['Location'] = [];
    	$request['Location']['ZipCode'] = $zipcode;
    	$request['Location']['County'] = [];
    	$request['Location']['County']['FipsCode'] = $availableCounties[$availableCounties['Counties'][0]]['FipsCode'];
    	$request['Location']['County']['CountyName'] = $availableCounties[$availableCounties['Counties'][0]]['CountyName'];
    	$request['Location']['County']['StateCode'] = $availableCounties[$availableCounties['Counties'][0]]['StateCode'];
    	$request['InsuranceEffectiveDate'] = $effectiveDate;

    	$request['Market'] = "Individual";
    	$request['IsFilterAnalysisRequiredIndicator'] = false;
    	$request['PaginationInformation'] = ['PageNumber' => 1, 'PageSize' => 3];
    	$request['SortOrder'] = ['SortField' => 'BASE RATE', 'SortDirection' => 'ASC'];

    	$request['Filter'] = [];
    	// $request['Filter'][0] = ['MetalLevel'=>'Platinum'];
    	$request['Filter'][1] = ['MetalLevel'=>'Gold'];
    	$request['Filter'][2] = ['MetalLevel'=>'Silver'];
    	// $request['Filter'][3] = ['MetalLevel'=>'Bronze'];
    	// $request['Filter'][4] = ['BaseRateFilterRange'=>'$300-$400'];
    	// $request['Issuers'] = ['IssuerIDType'=>'17341','IssuerIDType'=>'35783']; 
    	// $request['Filter'][4] = ['Issuers'=>'17341'];
    	// $request['Filter'][5] = ['Issuers'=>'35783'];

    	$plans = $this->buildXml('getIFPPlanQuotes','PlanQuoteRequest',$request)->makeRequest();
    	// $plans = $this;

    	$plans = str_replace("ns2:", "", $plans);
    	$xml = simplexml_load_string($plans);
		$json = json_encode($xml,JSON_PRETTY_PRINT);
		// $array = json_decode($json,TRUE);

    	print_r($json);


    }


    /**
     * Returns the value of a ZipCode API Post
     *
     * @return XML
     */
    public function ZipCodeLookupTest($zipcode)
    {
    	// print_r($this->getQuote($zipcode));

    	$zipcodeRequest = new ZipCodeValidationRequest();
    	$zipcodeRequest->setZipCode($zipcode);
    	if(null !== $zipcodeRequest->getZipCode()) {
    		$sequence = ['ZipCode'=>$zipcodeRequest->getZipCode()];
    		$this->buildXml('getCountiesForZip',(new \ReflectionClass($zipcodeRequest))->getShortName(),$sequence)->makeRequest();

    		echo "\033[32mHealthCare.GOV Connection Successful! \033[0m \n";
    	} else {
    		echo "\033[31m Installation failed! \033[0m \n";
    	}
    }

    public function getResources($resourceName=false)
    {
		$this->xpath = new \DOMXPath($this->doc);
		$this->xpath->registerNamespace('xs', 'http://www.w3.org/2001/XMLSchema');
		
		if(!$resourceName) {
			$resources = $this->xpath->evaluate("/xs:schema/xs:element");	
		} else {
			$resources = $this->xpath->evaluate("xs:element[@name='{$resourceName}']");
		}

		foreach($resources as $resource) {
			// print_r($resource);
			$this->getSubResources($resource);
		}

		return Healthcare::$resources;
    }


    public function getSubResources($resource)
    {
    	$subResources = $this->xpath->evaluate("xs:complexType/xs:sequence/xs:element", $resource);
    	if (strpos($resource->getAttribute('name'),'Request') !== false) {
	    	Healthcare::$resources[$resource->getAttribute('name')] = [];

	    	foreach($subResources as $subResource) {
	    		if($subResource->getAttribute('name')!="") {
					array_push(Healthcare::$resources[$resource->getAttribute('name')], $subResource->getAttribute('name'));
				}
			}
		}
    }


    public function parseResponse($response)
    {
    	$doc = new \DOMDocument();
		$doc->loadXML($response);
		$doc->saveXML();

		$this->xpath = new \DOMXPath($doc);
		$this->xpath->registerNamespace('ns2', 'http://www.w3.org/2001/XMLSchema');
		
		$resources = $this->xpath->evaluate("/ns2:*/ns2:*");

		print_r($resources);
		
		foreach($resources as $resource) {
			print_r($resource->nodeName);
			// $this->parseSubResources($resource);
		}

		// print_r(Healthcare::$responseArray);
    }

    public function parseSubResources($resource)
    {
    	$subResources = $this->xpath->evaluate("xs:complexType/xs:sequence/xs:element", $resource);
    	if (strpos($resource->getAttribute('name'),'Request') !== false) {
	    	Healthcare::$responseArray[$resource->getAttribute('name')] = [];

	    	foreach($subResources as $subResource) {
	    		if($subResource->getAttribute('name')!="") {
					array_push(Healthcare::$responseArray[$resource->getAttribute('name')], $subResource->getAttribute('name'));
				}
			}
		}

    }


    /**
     * Validates against the Schema XSD
     *
     * @return boolean
     */
    public function schemaValidate()
    {
    	$xml = new \DOMDocument();
		$xml->loadXML($this->payload);
		return $xml->schemaValidate(__DIR__."/Schemas/finder_api_{$this->version}.xsd");
    }


    /**
     * Builds XML
     *
     * @void XML
     */
    public function buildXml($service,$nameSpace,$sequence)
    {
    	$this->service = $service;

    	$xml = new \XMLWriter(); 
		$xml->openMemory();
		$xml->startAttributeNS('api1','api-types' ,'http://hios.cms.org/api-types'); 
		$xml->startAttributeNS('xsi', 'schema-instance' ,'http://www.w3.org/2001/XMLSchema-instance'); 
		$xml->startAttributeNS('schemaLocation', 'schema-location' ,'http://hios.cms.org/api/hios-api-11.0.xsd'); 
		$xml->setIndent(true);
		$xml->startDocument('1.0','UTF-8'); 
		$xml->startElementNS("api",$nameSpace, 'http://hios.cms.org/api'); 

		foreach ($sequence as $element => $value) {
			// $xml->writeElement("api:".$element,$value);
			$this->xmlrecursive($xml, $element, $value, $nameSpace);
		}
		
		$xml->endElement();

		$this->payload = $xml->outputMemory();	
		return $this;
		// print_r($this->payload);
    }


    public function xmlrecursive($xml, $key, $value, $nameSpace, $useElementName = false) {
    	switch ($nameSpace) {
    		case 'PlanQuoteRequest':
    			$resource = ['Enrollees','Location','InsuranceEffectiveDate','Market','IsFilterAnalysisRequiredIndicator'];
    			$subResource = ['County'];
    			break;
    		case 'ZipCodeValidationRequest':
    			$resource = ['ZipCode'];
    			$subResource = [];
    			break;
    		
    		default:
    			# code...
    			break;
    	}
    	

    	$flagElementName = false;
        if (is_array($value)) {
        	if($useElementName) {
	            foreach ($value as $key => $sub) {
	            		$this->xmlrecursive($xml, $key, $sub, $nameSpace);
	            }
        	} else {
        		if(in_array($key, $subResource)) {
        			$xml->startElementNS("api1",$key, null); 
        		} else {
        			$xml->startElementNS("api",$key, null); 
        		}
        		
	            if($key == "Enrollees" || $key == "Filter") {
	            	$flagElementName = $key;
	            }
	            foreach ($value as $key => $sub) {
	            	if($flagElementName) {
	            		$this->xmlrecursive($xml, $flagElementName, $sub, $nameSpace, true);
	            	} else {
	            		$this->xmlrecursive($xml, $key, $sub, $nameSpace);
	            	}
	                
	            }
	            $xml->endElement();
        	}
            
        } else {
        	if(in_array($key, $resource)) {
        		$xml->startElementNS("api",$key, null); 
        	} else {
        		$xml->startElementNS("api1",$key, null); 
        	}
            
            $xml->writeRaw($value);
            $xml->endElement();
        }
    }


    /**
     * Makes HTTP Request - Curl
     *
     * @return XML
     */
    public function makeRequest()
    {
    	if($this->schemaValidate($xml = $this->payload)) {
			$url = $this->getUrl();
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/xml', 'Content-length: ' . strlen($xml) ));
			$output = curl_exec($ch);

			curl_close($ch);
			if($this->schemaValidate($output)) {
				// $output = new \SimpleXMLElement($output);
				// echo $output;
				return $output;
			}
		}
    }




    private function walkResource($resource,$indent="") {
		  array_push($this->resources, $resource->getAttribute('name')); 
		  // $sequences = $xpath->evaluate("xs:complexType/xs:sequence/xs:element", $elementDef);
		  
		  // foreach($sequences as $elementDef) {
		  //   $this->echoElements($indent . "\t\t", $elementDef);
		  // }
	}

    private function getElements()
    {
    	$doc = new \DOMDocument();
		$doc->load(__DIR__.'/Schemas/'.'finder_api_v3.0.xsd');

		$this->doc = $doc;

		// $doc->save('xml.xml');

		$xpath = new \DOMXPath($doc);
		$xpath->registerNamespace('xs', 'http://www.w3.org/2001/XMLSchema');

		$this->xpath = $xpath;

		// print_r($xpath->document);

		$sequences = $xpath->evaluate("/xs:schema/xs:element");

		// print_r($sequences);

		foreach($sequences as $elementDef) {
		  $this->echoElements("", $elementDef);
		}  
    }

   


}