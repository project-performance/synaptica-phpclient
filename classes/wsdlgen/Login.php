<?php

class Login
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
   * @param string $UserID
   * @param string $Password
   * @access public
   */
  public function __construct($UserID, $Password)
  {
    $this->UserID = $UserID;
    $this->Password = $Password;
  }

}
