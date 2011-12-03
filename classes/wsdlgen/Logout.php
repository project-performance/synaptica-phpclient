<?php

class Logout
{

  /**
   * 
   * @var string $UserID
   * @access public
   */
  public $UserID;

  /**
   * 
   * @var string $Password
   * @access public
   */
  public $Password;

  /**
   * 
   * @var string $SessionKey
   * @access public
   */
  public $SessionKey;

  /**
   * 
   * @param string $UserID
   * @param string $Password
   * @param string $SessionKey
   * @access public
   */
  public function __construct($UserID, $Password, $SessionKey)
  {
    $this->UserID = $UserID;
    $this->Password = $Password;
    $this->SessionKey = $SessionKey;
  }

}
