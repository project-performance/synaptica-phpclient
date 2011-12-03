<?php

class ListRelatedTerms70
{

  /**
   * 
   * @var ControlData $ControlData
   * @access public
   */
  public $ControlData;

  /**
   * 
   * @var Term $Term
   * @access public
   */
  public $Term;

  /**
   * 
   * @param ControlData $ControlData
   * @param Term $Term
   * @access public
   */
  public function __construct($ControlData, $Term)
  {
    $this->ControlData = $ControlData;
    $this->Term = $Term;
  }

}
