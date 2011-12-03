<?php

class ListRelatedTerms
{

  /**
   * 
   * @var string $ControlData
   * @access public
   */
  public $ControlData;

  /**
   * 
   * @var string $Term
   * @access public
   */
  public $Term;

  /**
   * 
   * @param string $ControlData
   * @param string $Term
   * @access public
   */
  public function __construct($ControlData, $Term)
  {
    $this->ControlData = $ControlData;
    $this->Term = $Term;
  }

}
