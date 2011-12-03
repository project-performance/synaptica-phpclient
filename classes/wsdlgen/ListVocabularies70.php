<?php

class ListVocabularies70
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
   * @param ControlData $ControlData
   * @param string $tvpid
   * @access public
   */
  public function __construct($ControlData, $tvpid)
  {
    $this->ControlData = $ControlData;
    $this->tvpid = $tvpid;
  }

}
