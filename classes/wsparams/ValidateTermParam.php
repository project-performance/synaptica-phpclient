<?php

/**
 * Description of ValidateTermParams
 *
 * @author fabien
 */
class ValidateTermParam {
    /**
     * 
     * @var string $termDescriptor
     * @access public
     */
    public $termDescriptor;

    /**
     * 
     * @var string $vocabularyDescriptor
     * @access public
     */
    public $vocabularyDescriptor;

    /**
     * 
     * @param string $termDescriptor
     * @param string $vocabularyDescriptor
     * @access public
     */
    public function __construct($termDescriptor, $vocabularyDescriptor) {
        $this->termDescriptor = $termDescriptor;
        $this->vocabularyDescriptor = $vocabularyDescriptor;
    }

    /**
     * @access public
     */
    public function ToXML() {
        $xml = "<XMLData>
            <Term>
            <VocabularyDescriptor>$this->vocabularyDescriptor</VocabularyDescriptor>
            <TermDescriptor>$this->termDescriptor</TermDescriptor>
            </Term>
            </XMLData>
            ";

        return $xml;
    }
}

?>
