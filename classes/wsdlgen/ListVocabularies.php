<?php

class ListVocabularies
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
   * @param string $ControlData
   * @param string $tvpid
   * @access public
   */
  public function __construct($ControlData, $tvpid)
  {
    $this->ControlData = $ControlData;
    $this->tvpid = $tvpid;
  }

}
