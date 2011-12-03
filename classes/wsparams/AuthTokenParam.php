<?php

/**
 * Description of AuthToken
 * This class is the real represenation of the ControlData class
 *
 * @author fabien
 */
class AuthTokenParam {

    /**
     * 
     * @var string $userID
     * @access public
     */
    private $userID;

    /**
     * 
     * @var string $userID
     * @access public
     */
    private $password;

    /**
     * 
     * @var string $userID
     * @access public
     */
    private $sessionKey;

    /**
     * 
     * @var DateTime $userID
     * @access public
     */
    private $sessionKeyExpireDateTime;
        
    /**
     * 
     * @param string $userID
     * @param string $password
     * @access public
     */
    public function __construct($sessionKey, $sessionKeyExpireDateTime, $userID, $password) {
        $this->userID = $userID;
        $this->password = $password;
        $this->sessionKey = $sessionKey;
        $this->sessionKeyExpireDateTime = $sessionKeyExpireDateTime;
    }

    /**
     * @access public
     */
    public function getUserID() {
        return $this->userID;
    }
    
    /**
     * @access public
     */
    public function getSessionKey() {
        return $this->sessionKey;
    }
    
    /**
     * @access public
     */
    public function getSessionKeyExpireDateTime() {
        return $this->sessionKeyExpireDateTime;
    }
    
    /**
     * @access public
     */
    public function ToXML() {
        $xml ="<Authentication>";
        
        if(!empty($this->sessionKey))
            $xml = $xml . "<SessionKey>$this->sessionKey</SessionKey>"; 
        else
            $xml = $xml . "<UserID>$this->userID</UserID><Password>$this->password</Password>";
        
        $xml = $xml . "</Authentication>";
        
        return $xml;
    }
}
?>