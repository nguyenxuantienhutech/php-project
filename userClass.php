<?php
require_once('helpers.php');
class User
{
    private $username;
    private $userEmail;
    private $userID;
    private $status;

    public function __construct($newUser, $email)
    {
        $this->username = $newUser;
        $this->userEmail = $email;
        $this->status = 1;
        $this->userID = GetNextUserID();
    }
    //destruct function
    public function __destruct()
    {
        $this->username = null;
        $this->userEmail = null;
        $this->status = null;
        $this->userID = null;
    }
    //get user
    public function GetUserName()
    {
        return $this->username;
    }
    public function GetUserEmail()
    {
        return $this->userEmail;
    }
    public function GetUserID()
    {
        return $this->userID;
    }
    public function GetStatus()
    {
        return $this->status;
    }
    public function SetUserStatus($input)
    {
        if ($input > 1 or $input < 0) {
            return false;
        }
        $this->status = $input;
        return true;
    }
}
