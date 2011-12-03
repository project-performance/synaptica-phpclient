<?php
include_once('wsdlgen/ServiceCustom.php');
include_once('wsparams/AuthTokenParam.php');
include_once('wsparams/ExportVocabularyParam.php');
include_once('wsparams/RelatedTermParam.php');
include_once('wsparams/SearchTermParam.php');
include_once('wsparams/ValidateTermParam.php');

class SynapticaManager {

    /**
     * 
     * @var ServiceCustom $service
     * @access private
     */
    private $service;

    /**
     * 
     * @var AuthTokenParam $authInfo
     * @access public
     */
    private $authInfo;

    /**
     * @param string $urlconnect
     * @access public
     */
    public function __construct($urlconnect) {
        $this->service = new ServiceCustom($urlconnect);
    }

    /**
     * @param string $userId
     * @param string $password
     * @access public
     */
    function login($userId, $password) {
        $response = $this->service->Login(new Login($userId, $password));

        //any variable is xml data
        $result = $response->LoginResult->any;

        //load xml into simplexml object
        $xml = simplexml_load_string($result);

        // save session key
        $this->authInfo = new AuthTokenParam($xml->SessionKey, $xml->KeyExpiresDateTime, NULL, NULL);
        
        return $xml;
    }

    /**
     * @access public
     */
    function logout($userId, $password) {
        $response = $this->service->Logout(new Logout($userId, $password, $this->authInfo->getSessionKey()));

        $result = $response->LogoutResult->any;

        //load xml into simplexml object
        $xml = simplexml_load_string($result);

        return $xml;
    }

    function listTaskViews() {
        //response is a ListTaskViewsResponse
        $response = $this->service->ListTaskViews70(new ListTaskViews70(new ControlData($this->authInfo->ToXML())));

        $result = $response->ListTaskViews70Result->any;

        //load xml into simplexml object
        $xml = simplexml_load_string($result);

        return $xml;
    }

    function listVocabularies($taskviewid) {
        //raw is a ListTaskViewsResponse
        $response = $this->service->ListVocabularies70(new ListVocabularies70(new ControlData($this->authInfo->ToXML()), $taskviewid));

        $result = $response->ListVocabularies70Result->any;

        //load xml into simplexml object
        $xml = simplexml_load_string($result);

        return $xml;
    }

    function exportVocabulary() {
        $param = new ExportVocabularyParam('full', NULL, '1000', 'all', 'all', '1');

        $parameter = new ExportVocabulary70(new ControlData($this->authInfo->ToXML()), new ReportParameters($param->ToXML()));

        //raw is a ListTaskViewsResponse
        $response = $this->service->ExportVocabulary70($parameter);

        $result = $response->ExportVocabulary70Result->any;

        //load xml into simplexml object
        $xml = simplexml_load_string($result);

        return $xml;
    }

    function listRelatedTermsById($termID, $relationshipType, $maxReturnCount) {
        $param = new RelatedTermParam($termID, NULL, NULL, $relationshipType, $maxReturnCount);

        $parameter = new ListRelatedTerms70(new ControlData($this->authInfo->ToXML()), new Term($param->ToXML()));

        //raw is a ListTaskViewsResponse
        $response = $this->service->ListRelatedTerms70($parameter);

        $result = $response->ListRelatedTerms70Result->any;

        //load xml into simplexml object
        $xml = simplexml_load_string($result);

        return $xml;
    }

    function listRelatedTermsByDescriptor($termDescriptor, $vocabularyDescriptor, $relationshipType, $maxReturnCount) {
        $param = new RelatedTermParam(NULL, $termDescriptor, $vocabularyDescriptor, $relationshipType, $maxReturnCount);

        $parameter = new ListRelatedTerms70(new ControlData($this->authInfo->ToXML()), new Term($param->ToXML()));

        //raw is a ListTaskViewsResponse
        $response = $this->service->ListRelatedTerms70($parameter);

        $result = $response->ListRelatedTerms70Result->any;

        //load xml into simplexml object
        $xml = simplexml_load_string($result);

        return $xml;
    }

    function searchTerms(array $searchparams) {
        $param = new SearchTermParam($searchparams);

        $parameter = new SearchTerms70(new ControlData($this->authInfo->ToXML()), new SearchParameters($param->ToXML()));

        //raw is a ListTaskViewsResponse
        $response = $this->service->SearchTerms70($parameter);

        $result = $response->SearchTerms70Result->any;

        //load xml into simplexml object
        $xml = simplexml_load_string($result);

        return $xml;
    }

}
?>
