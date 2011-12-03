<?php

class ValidateTerms70
{

  /**
   * 
   * @var ControlData $ControlData
   * @access public
   */
  public $ControlData;

  /**
   * 
   * @var Terms $Terms
   * @access public
   */
  public $Terms;

  /**
   * 
   * @param ControlData $ControlData
   * @param Terms $Terms
   * @access public
   */
  public function __construct($ControlData, $Terms)
  {
    $this->ControlData = $ControlData;
    $this->Terms = $Terms;
  }

}
