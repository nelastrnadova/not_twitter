<?php
namespace views;

class Register
{

    private $username;
    private $success;

    function __construct($username, $success)
    {
        $this->username = $username;
        $this->success = $success;
    }

    function render() {
        if($this->success) {
            $view = "Successfully registered a new user with the username: ".$this->username;
            $view = $view."<br><a href='Login.php'>log in</a>";
        }
        else
            $view = "Something went wrong. TODO: error messages";
        return $view;
    }

}