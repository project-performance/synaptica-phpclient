<?php

class SearchTerms70
{

  /**
   * 
   * @var ControlData $ControlData
   * @access public
   */
  public $ControlData;

  /**
   * 
   * @var SearchParameters $SearchParameters
   * @access public
   */
  public $SearchParameters;

  /**
   * 
   * @param ControlData $ControlData
   * @param SearchParameters $SearchParameters
   * @access public
   */
  public function __construct($ControlData, $SearchParameters)
  {
    $this->ControlData = $ControlData;
    $this->SearchParameters = $SearchParameters;
  }

}
