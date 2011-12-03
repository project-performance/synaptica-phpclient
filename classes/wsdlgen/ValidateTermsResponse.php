<?php

class ValidateTermsResponse
{

  /**
   * 
   * @var ValidateTermsResult $ValidateTermsResult
   * @access public
   */
  public $ValidateTermsResult;

  /**
   * 
   * @param ValidateTermsResult $ValidateTermsResult
   * @access public
   */
  public function __construct($ValidateTermsResult)
  {
    $this->ValidateTermsResult = $ValidateTermsResult;
  }

}
