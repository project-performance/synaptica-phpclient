<?php

class ImportTerms
{

  /**
   * 
   * @var string $ControlData
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
   * @var string $ImportXML
   * @access public
   */
  public $ImportXML;

  /**
   * 
   * @param string $ControlData
   * @param string $tvpid
   * @param string $ImportXML
   * @access public
   */
  public function __construct($ControlData, $tvpid, $ImportXML)
  {
    $this->ControlData = $ControlData;
    $this->tvpid = $tvpid;
    $this->ImportXML = $ImportXML;
  }

}
