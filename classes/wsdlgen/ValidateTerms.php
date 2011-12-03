<?php

class ValidateTerms
{

  /**
   * 
   * @var string $ControlData
   * @access public
   */
  public $ControlData;

  /**
   * 
   * @var string $Terms
   * @access public
   */
  public $Terms;

  /**
   * 
   * @param string $ControlData
   * @param string $Terms
   * @access public
   */
  public function __construct($ControlData, $Terms)
  {
    $this->ControlData = $ControlData;
    $this->Terms = $Terms;
  }

}
