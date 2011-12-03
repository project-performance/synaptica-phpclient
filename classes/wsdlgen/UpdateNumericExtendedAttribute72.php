<?php

class UpdateNumericExtendedAttribute72
{

  /**
   * 
   * @var ControlData $ControlData
   * @access public
   */
  public $ControlData;

  /**
   * 
   * @var UpdateParameters $UpdateParameters
   * @access public
   */
  public $UpdateParameters;

  /**
   * 
   * @param ControlData $ControlData
   * @param UpdateParameters $UpdateParameters
   * @access public
   */
  public function __construct($ControlData, $UpdateParameters)
  {
    $this->ControlData = $ControlData;
    $this->UpdateParameters = $UpdateParameters;
  }

}
