<?php

class LogoutResponse
{

  /**
   * 
   * @var LogoutResult $LogoutResult
   * @access public
   */
  public $LogoutResult;

  /**
   * 
   * @param LogoutResult $LogoutResult
   * @access public
   */
  public function __construct($LogoutResult)
  {
    $this->LogoutResult = $LogoutResult;
  }

}
