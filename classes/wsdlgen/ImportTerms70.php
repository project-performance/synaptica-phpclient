<?php

class ImportTerms70
{

  /**
   * 
   * @var ControlData $ControlData
   * @access public
   */
  public $ControlData;

  /**
   * 
   * @var string $tvpid
   * @access public
   */
  public $tvpid;

  /**
   * 
   * @var ImportXML $ImportXML
   * @access public
   */
  public $ImportXML;

  /**
   * 
   * @param ControlData $ControlData
   * @param string $tvpid
   * @param ImportXML $ImportXML
   * @access public
   */
  public function __construct($ControlData, $tvpid, $ImportXML)
  {
    $this->ControlData = $ControlData;
    $this->tvpid = $tvpid;
    $this->ImportXML = $ImportXML;
  }

}
