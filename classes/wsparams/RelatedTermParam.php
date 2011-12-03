<?php

/**
 * Description of RelatedTermParams
 *
 * @author fabien
 */
class RelatedTermParam {

    /**
     * 
     * @var int $termID
     * @access public
     */
    public $termID;

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
     * @var string $relationshipType
     * @access public
     */
    public $relationshipType;

    /**
     * 
     * @var int $maxReturnCount
     * @access public
     */
    public $maxReturnCount;

    /**
     * 
     * @param string $termID
     * @param string $termDescriptor
     * @param string $vocabularyDescriptor
     * @param string $relationshipType
     * @param string $maxReturnCount
     * @access public
     */
    public function __construct($termID, $termDescriptor, $vocabularyDescriptor, $relationshipType, $maxReturnCount) {
        $this->termID = $termID;
        $this->termDescriptor = $termDescriptor;
        $this->vocabularyDescriptor = $vocabularyDescriptor;
        $this->relationshipType = $relationshipType;
        $this->maxReturnCount = $maxReturnCount;
    }

    /**
     * @access public
     */
    public function ToXML() {
        $xml = "<XMLData>";
        
        if(!empty ($this->termID))
            $xml = $xml . "<TermID>$this->termID</TermID>";
        else
            $xml = $xml . 
                "<TermDescriptor>$this->termDescriptor</TermDescriptor>
                <VocabularyDescriptor>$this->vocabularyDescriptor</VocabularyDescriptor>";
        
        $xml = $xml . "<MaxReturnCount>$this->maxReturnCount</MaxReturnCount>
                <Relationships><RelationshipType>$this->relationshipType</RelationshipType></Relationships>";
        
        $xml = $xml . "</XMLData>";

        return $xml;
    }

}

?>
