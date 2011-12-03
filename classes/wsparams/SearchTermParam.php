<?php

/**
 * Description of SearchTermParams
 *
 * @author fabien
 */
class SearchTermParam {
    /**
     * 
     * @var array params
     * @access public
     */
    public $params;
    
    /**
     * 
     * @param string $params
     * @access public
     */
    public function __construct(array $params = array()) {
        $this->params = $params;
    }
    
    /**
     * @access public
     */
    public function ToXML() {
        $xml = "<SearchParameters>";
        
        foreach ($this->params as $key => $value) {
            $xml = $xml . "<parameter sp_id=\"$key\">$value</parameter>";
        }
                
        $xml = $xml . "</SearchParameters>";

        return $xml;
    }
}

?>
