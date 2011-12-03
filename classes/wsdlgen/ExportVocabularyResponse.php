<?php

class ExportVocabularyResponse
{

  /**
   * 
   * @var ExportVocabularyResult $ExportVocabularyResult
   * @access public
   */
  public $ExportVocabularyResult;

  /**
   * 
   * @param ExportVocabularyResult $ExportVocabularyResult
   * @access public
   */
  public function __construct($ExportVocabularyResult)
  {
    $this->ExportVocabularyResult = $ExportVocabularyResult;
  }

}
