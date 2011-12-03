<?php

include_once('Login.php');
include_once('LoginResponse.php');
include_once('LoginResult.php');
include_once('Logout.php');
include_once('LogoutResponse.php');
include_once('LogoutResult.php');
include_once('ListTaskViews70.php');
include_once('ControlData.php');
include_once('ListTaskViews70Response.php');
include_once('ListTaskViews70Result.php');
include_once('ListTaskViews.php');
include_once('ListTaskViewsResponse.php');
include_once('ListTaskViewsResult.php');
include_once('ImportTerms71.php');
include_once('ImportXML.php');
include_once('ImportTerms71Response.php');
include_once('ImportTerms71Result.php');
include_once('ImportTerms70.php');
include_once('ImportTerms70Response.php');
include_once('ImportTerms70Result.php');
include_once('ImportTerms.php');
include_once('ImportTermsResponse.php');
include_once('ImportTermsResult.php');
include_once('ExportVocabulary70.php');
include_once('ReportParameters.php');
include_once('ExportVocabulary70Response.php');
include_once('ExportVocabulary70Result.php');
include_once('ExportVocabulary.php');
include_once('ExportVocabularyResponse.php');
include_once('ExportVocabularyResult.php');
include_once('ListVocabularies70.php');
include_once('ListVocabularies70Response.php');
include_once('ListVocabularies70Result.php');
include_once('ListVocabularies.php');
include_once('ListVocabulariesResponse.php');
include_once('ListVocabulariesResult.php');
include_once('ValidateTerms70.php');
include_once('Terms.php');
include_once('ValidateTerms70Response.php');
include_once('ValidateTerms70Result.php');
include_once('ValidateTerms.php');
include_once('ValidateTermsResponse.php');
include_once('ValidateTermsResult.php');
include_once('ListRelatedTerms70.php');
include_once('Term.php');
include_once('ListRelatedTerms70Response.php');
include_once('ListRelatedTerms70Result.php');
include_once('ListRelatedTerms.php');
include_once('ListRelatedTermsResponse.php');
include_once('ListRelatedTermsResult.php');
include_once('GetSavedReport70.php');
include_once('GetSavedReport70Response.php');
include_once('GetSavedReport70Result.php');
include_once('SearchTerms70.php');
include_once('SearchParameters.php');
include_once('SearchTerms70Response.php');
include_once('SearchTerms70Result.php');
include_once('UpdateNumericExtendedAttribute72.php');
include_once('UpdateParameters.php');
include_once('UpdateNumericExtendedAttribute72Response.php');
include_once('UpdateNumericExtendedAttribute72Result.php');

/**
 * 
 */
class ServiceCustom extends SoapClient {

    /**
     * 
     * @var array $classmap The defined classes
     * @access private
     */
    private static $classmap = array(
        'Login' => 'Login',
        'LoginResponse' => 'LoginResponse',
        'LoginResult' => 'LoginResult',
        'Logout' => 'Logout',
        'LogoutResponse' => 'LogoutResponse',
        'LogoutResult' => 'LogoutResult',
        'ListTaskViews70' => 'ListTaskViews70',
        'ControlData' => 'ControlData',
        'ListTaskViews70Response' => 'ListTaskViews70Response',
        'ListTaskViews70Result' => 'ListTaskViews70Result',
        'ListTaskViews' => 'ListTaskViews',
        'ListTaskViewsResponse' => 'ListTaskViewsResponse',
        'ListTaskViewsResult' => 'ListTaskViewsResult',
        'ImportTerms71' => 'ImportTerms71',
        'ControlData' => 'ControlData',
        'ImportXML' => 'ImportXML',
        'ImportTerms71Response' => 'ImportTerms71Response',
        'ImportTerms71Result' => 'ImportTerms71Result',
        'ImportTerms70' => 'ImportTerms70',
        'ControlData' => 'ControlData',
        'ImportXML' => 'ImportXML',
        'ImportTerms70Response' => 'ImportTerms70Response',
        'ImportTerms70Result' => 'ImportTerms70Result',
        'ImportTerms' => 'ImportTerms',
        'ImportTermsResponse' => 'ImportTermsResponse',
        'ImportTermsResult' => 'ImportTermsResult',
        'ExportVocabulary70' => 'ExportVocabulary70',
        'ControlData' => 'ControlData',
        'ReportParameters' => 'ReportParameters',
        'ExportVocabulary70Response' => 'ExportVocabulary70Response',
        'ExportVocabulary70Result' => 'ExportVocabulary70Result',
        'ExportVocabulary' => 'ExportVocabulary',
        'ExportVocabularyResponse' => 'ExportVocabularyResponse',
        'ExportVocabularyResult' => 'ExportVocabularyResult',
        'ListVocabularies70' => 'ListVocabularies70',
        'ControlData' => 'ControlData',
        'ListVocabularies70Response' => 'ListVocabularies70Response',
        'ListVocabularies70Result' => 'ListVocabularies70Result',
        'ListVocabularies' => 'ListVocabularies',
        'ListVocabulariesResponse' => 'ListVocabulariesResponse',
        'ListVocabulariesResult' => 'ListVocabulariesResult',
        'ValidateTerms70' => 'ValidateTerms70',
        'ControlData' => 'ControlData',
        'Terms' => 'Terms',
        'ValidateTerms70Response' => 'ValidateTerms70Response',
        'ValidateTerms70Result' => 'ValidateTerms70Result',
        'ValidateTerms' => 'ValidateTerms',
        'ValidateTermsResponse' => 'ValidateTermsResponse',
        'ValidateTermsResult' => 'ValidateTermsResult',
        'ListRelatedTerms70' => 'ListRelatedTerms70',
        'ControlData' => 'ControlData',
        'Term' => 'Term',
        'ListRelatedTerms70Response' => 'ListRelatedTerms70Response',
        'ListRelatedTerms70Result' => 'ListRelatedTerms70Result',
        'ListRelatedTerms' => 'ListRelatedTerms',
        'ListRelatedTermsResponse' => 'ListRelatedTermsResponse',
        'ListRelatedTermsResult' => 'ListRelatedTermsResult',
        'GetSavedReport70' => 'GetSavedReport70',
        'ControlData' => 'ControlData',
        'GetSavedReport70Response' => 'GetSavedReport70Response',
        'GetSavedReport70Result' => 'GetSavedReport70Result',
        'SearchTerms70' => 'SearchTerms70',
        'ControlData' => 'ControlData',
        'SearchParameters' => 'SearchParameters',
        'SearchTerms70Response' => 'SearchTerms70Response',
        'SearchTerms70Result' => 'SearchTerms70Result',
        'UpdateNumericExtendedAttribute72' => 'UpdateNumericExtendedAttribute72',
        'ControlData' => 'ControlData',
        'UpdateParameters' => 'UpdateParameters',
        'UpdateNumericExtendedAttribute72Response' => 'UpdateNumericExtendedAttribute72Response',
        'UpdateNumericExtendedAttribute72Result' => 'UpdateNumericExtendedAttribute72Result');

    /**
     * 
     * @param array $config A array of config values
     * @param string $wsdl The wsdl file to use
     * @access public
     */
    public function __construct($wsdl, array $options = array()) {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }

        parent::__construct($wsdl, $options);
    }

    /**
     * 
     * @param Login $parameters
     * @access public
     */
    public function Login(Login $parameters) {
        return $this->__soapCall('Login', array($parameters));
    }

    /**
     * 
     * @param Logout $parameters
     * @access public
     */
    public function Logout(Logout $parameters) {
        return $this->__soapCall('Logout', array($parameters));
    }

    /**
     * 
     * @param ListTaskViews70 $parameters
     * @access public
     */
    public function ListTaskViews70(ListTaskViews70 $parameters) {
        return $this->__soapCall('ListTaskViews70', array($parameters));
    }

    /**
     * 
     * @param ListTaskViews $parameters
     * @access public
     */
    public function ListTaskViews(ListTaskViews $parameters) {
        return $this->__soapCall('ListTaskViews', array($parameters));
    }

    /**
     * 
     * @param ImportTerms71 $parameters
     * @access public
     */
    public function ImportTerms71(ImportTerms71 $parameters) {
        return $this->__soapCall('ImportTerms71', array($parameters));
    }

    /**
     * 
     * @param ImportTerms70 $parameters
     * @access public
     */
    public function ImportTerms70(ImportTerms70 $parameters) {
        return $this->__soapCall('ImportTerms70', array($parameters));
    }

    /**
     * 
     * @param ImportTerms $parameters
     * @access public
     */
    public function ImportTerms(ImportTerms $parameters) {
        return $this->__soapCall('ImportTerms', array($parameters));
    }

    /**
     * 
     * @param ExportVocabulary70 $parameters
     * @access public
     */
    public function ExportVocabulary70(ExportVocabulary70 $parameters) {
        return $this->__soapCall('ExportVocabulary70', array($parameters));
    }

    /**
     * 
     * @param ExportVocabulary $parameters
     * @access public
     */
    public function ExportVocabulary(ExportVocabulary $parameters) {
        return $this->__soapCall('ExportVocabulary', array($parameters));
    }

    /**
     * 
     * @param ListVocabularies70 $parameters
     * @access public
     */
    public function ListVocabularies70(ListVocabularies70 $parameters) {
        return $this->__soapCall('ListVocabularies70', array($parameters));
    }

    /**
     * 
     * @param ListVocabularies $parameters
     * @access public
     */
    public function ListVocabularies(ListVocabularies $parameters) {
        return $this->__soapCall('ListVocabularies', array($parameters));
    }

    /**
     * 
     * @param ValidateTerms70 $parameters
     * @access public
     */
    public function ValidateTerms70(ValidateTerms70 $parameters) {
        return $this->__soapCall('ValidateTerms70', array($parameters));
    }

    /**
     * 
     * @param ValidateTerms $parameters
     * @access public
     */
    public function ValidateTerms(ValidateTerms $parameters) {
        return $this->__soapCall('ValidateTerms', array($parameters));
    }

    /**
     * 
     * @param ListRelatedTerms70 $parameters
     * @access public
     */
    public function ListRelatedTerms70(ListRelatedTerms70 $parameters) {
        return $this->__soapCall('ListRelatedTerms70', array($parameters));
    }

    /**
     * 
     * @param ListRelatedTerms $parameters
     * @access public
     */
    public function ListRelatedTerms(ListRelatedTerms $parameters) {
        return $this->__soapCall('ListRelatedTerms', array($parameters));
    }

    /**
     * 
     * @param GetSavedReport70 $parameters
     * @access public
     */
    public function GetSavedReport70(GetSavedReport70 $parameters) {
        return $this->__soapCall('GetSavedReport70', array($parameters));
    }

    /**
     * 
     * @param SearchTerms70 $parameters
     * @access public
     */
    public function SearchTerms70(SearchTerms70 $parameters) {
        return $this->__soapCall('SearchTerms70', array($parameters));
    }

    /**
     * 
     * @param UpdateNumericExtendedAttribute72 $parameters
     * @access public
     */
    public function UpdateNumericExtendedAttribute72(UpdateNumericExtendedAttribute72 $parameters) {
        return $this->__soapCall('UpdateNumericExtendedAttribute72', array($parameters));
    }

}
