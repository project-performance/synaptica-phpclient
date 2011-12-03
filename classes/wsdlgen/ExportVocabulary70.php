<?php

class ExportVocabulary70
{

  /**
   * 
   * @var ControlData $ControlData
   * @access public
   */
  public $ControlData;

  /**
   * 
   * @var ReportParameters $ReportParameters
   * @access public
   */
  public $ReportParameters;

  /**
   * 
   * @param ControlData $ControlData
   * @param ReportParameters $ReportParameters
   * @access public
   */
  public function __construct($ControlData, $ReportParameters)
  {
    $this->ControlData = $ControlData;
    $this->ReportParameters = $ReportParameters;
  }

}
