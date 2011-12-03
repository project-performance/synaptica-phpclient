<?php

class LoginResponse
{

  /**
   * 
   * @var LoginResult $LoginResult
   * @access public
   */
  public $LoginResult;

  /**
   * 
   * @param LoginResult $LoginResult
   * @access public
   */
  public function __construct($LoginResult)
  {
    $this->LoginResult = $LoginResult;
  }

}
