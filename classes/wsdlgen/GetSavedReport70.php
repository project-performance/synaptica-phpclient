<?php

class GetSavedReport70
{

  /**
   * 
   * @var ControlData $ControlData
   * @access public
   */
  public $ControlData;

  /**
   * 
   * @var string $FileRequested
   * @access public
   */
  public $FileRequested;

  /**
   * 
   * @param ControlData $ControlData
   * @param string $FileRequested
   * @access public
   */
  public function __construct($ControlData, $FileRequested)
  {
    $this->ControlData = $ControlData;
    $this->FileRequested = $FileRequested;
  }

}
