<?php

/**
 * Description of ExportVocabularyParams
 *
 * @author fabien
 */
class ExportVocabularyParam {
    
    /**
     * 
     * @var string $extractType
     * @access public
     */
    public $extractType;

    /**
     * 
     * @var DateTime $incrementalDateTime
     * @access public
     */
    public $incrementalDateTime;

    /**
     * 
     * @var string $headwordVocabularies
     * @access public
     */
    public $headwordVocabularies;

    /**
     * 
     * @var string $relatedTermVocabularies
     * @access public
     */
    public $relatedTermVocabularies;
    
    /**
     * 
     * @var string $approvalStatuses
     * @access public
     */
    public $approvalStatuses;
    
    /**
     * 
     * @var string $activeStatuses
     * @access public
     */
    public $activeStatuses;
        
    /**
     * @param string $extractType
     * @param DateTime $incrementalDateTime
     * @param string $headwordVocabularies
     * @param string $relatedTermVocabularies
     * @param string $approvalStatuses
     * @param string $activeStatuses
     * @access public
     */
    public function __construct($extractType, $incrementalDateTime, $headwordVocabularies, $relatedTermVocabularies, $approvalStatuses, $activeStatuses) {
        $this->extractType = $extractType;
        $this->incrementalDateTime = $incrementalDateTime;
        $this->headwordVocabularies = $headwordVocabularies;
        $this->relatedTermVocabularies = $relatedTermVocabularies;
        $this->approvalStatuses = $approvalStatuses;
        $this->activeStatuses = $activeStatuses;
    }

    /**
     * @access public
     */
    public function ToXML() {
        $formattedDate = new DateTime();
        if (!empty ($this->incrementalDateTime))
            $formattedDate = $this->incrementalDateTime->format('Y-m-d') . 'T'.  $this->incrementalDateTime->format('H:i:s');
        else
            $formattedDate = $formattedDate->format('Y-m-d') . 'T'.  $formattedDate->format('H:i:s');
        
        $xml ="<XMLRequest>
            <ExtractType>$this->extractType</ExtractType>
            <IncrementalDateTime>$formattedDate</IncrementalDateTime>
            <HeadwordVocabularies><VocabularyID>$this->headwordVocabularies</VocabularyID></HeadwordVocabularies>
            <RelatedTermVocabularies><VocabularyID>$this->relatedTermVocabularies</VocabularyID></RelatedTermVocabularies>
            <ApprovalStatuses><ApprovalStatus>$this->approvalStatuses</ApprovalStatus></ApprovalStatuses>
            <ActiveStatuses><ActiveStatus>$this->activeStatuses</ActiveStatus></ActiveStatuses>
        </XMLRequest>";
        
        return $xml;
    }
}
?>
