<?php

class ImportTermsResponse
{

  /**
   * 
   * @var ImportTermsResult $ImportTermsResult
   * @access public
   */
  public $ImportTermsResult;

  /**
   * 
   * @param ImportTermsResult $ImportTermsResult
   * @access public
   */
  public function __construct($ImportTermsResult)
  {
    $this->ImportTermsResult = $ImportTermsResult;
  }

}
