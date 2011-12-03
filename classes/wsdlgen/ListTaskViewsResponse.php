<?php

class ListTaskViewsResponse
{

  /**
   * 
   * @var ListTaskViewsResult $ListTaskViewsResult
   * @access public
   */
  public $ListTaskViewsResult;

  /**
   * 
   * @param ListTaskViewsResult $ListTaskViewsResult
   * @access public
   */
  public function __construct($ListTaskViewsResult)
  {
    $this->ListTaskViewsResult = $ListTaskViewsResult;
  }

}
