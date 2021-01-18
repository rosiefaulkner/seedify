<?php

// Session class that manages login system

class Session
{
    private $signed_in;
    public $user_id;




    // Check if user is logged in or not
    function __construct()
    {

        session_start();
    }

    private function check_the_login(){
        if(isset($_SESSION['user_id'])){
            $this->user_id = $_SESSION['user_id'];
        }
    }
}

$session = new Session();
