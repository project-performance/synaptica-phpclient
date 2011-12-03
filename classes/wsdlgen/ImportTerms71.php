<?php

class ImportTerms71
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
   * @var string $AppendOrReplaceCategories
   * @access public
   */
  public $AppendOrReplaceCategories;

  /**
   * 
   * @var string $AppendOrReplaceRelationships
   * @access public
   */
  public $AppendOrReplaceRelationships;

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
   * @param string $AppendOrReplaceCategories
   * @param string $AppendOrReplaceRelationships
   * @param ImportXML $ImportXML
   * @access public
   */
  public function __construct($ControlData, $tvpid, $AppendOrReplaceCategories, $AppendOrReplaceRelationships, $ImportXML)
  {
    $this->ControlData = $ControlData;
    $this->tvpid = $tvpid;
    $this->AppendOrReplaceCategories = $AppendOrReplaceCategories;
    $this->AppendOrReplaceRelationships = $AppendOrReplaceRelationships;
    $this->ImportXML = $ImportXML;
  }

}
