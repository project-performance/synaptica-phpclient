<?php

class ListRelatedTermsResponse
{

  /**
   * 
   * @var ListRelatedTermsResult $ListRelatedTermsResult
   * @access public
   */
  public $ListRelatedTermsResult;

  /**
   * 
   * @param ListRelatedTermsResult $ListRelatedTermsResult
   * @access public
   */
  public function __construct($ListRelatedTermsResult)
  {
    $this->ListRelatedTermsResult = $ListRelatedTermsResult;
  }

}
