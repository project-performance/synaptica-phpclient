<?php

class ExportVocabulary
{

  /**
   * 
   * @var string $ControlData
   * @access public
   */
  public $ControlData;

  /**
   * 
   * @var string $ReportParameters
   * @access public
   */
  public $ReportParameters;

  /**
   * 
   * @param string $ControlData
   * @param string $ReportParameters
   * @access public
   */
  public function __construct($ControlData, $ReportParameters)
  {
    $this->ControlData = $ControlData;
    $this->ReportParameters = $ReportParameters;
  }

}
