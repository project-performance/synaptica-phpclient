<?php

class ListVocabulariesResponse
{

  /**
   * 
   * @var ListVocabulariesResult $ListVocabulariesResult
   * @access public
   */
  public $ListVocabulariesResult;

  /**
   * 
   * @param ListVocabulariesResult $ListVocabulariesResult
   * @access public
   */
  public function __construct($ListVocabulariesResult)
  {
    $this->ListVocabulariesResult = $ListVocabulariesResult;
  }

}
