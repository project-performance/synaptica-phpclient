<?php

class LoginResult
{

  /**
   * 
   * @var aanyXML $any
   * @access public
   */
  public $any;
  
  /**
   * 
   * @param aanyXML $any
   * @access public
   */
  public function __construct($any)
  {
    $this->any = $any;
  }
}
