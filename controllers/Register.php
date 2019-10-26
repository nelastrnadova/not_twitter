<?php
namespace controllers;

include "../kernel.php";

class Register
{

    private $username;
    private $password;

    function __construct()
    {
        $this->username = $_POST["username"];
        $this->password = $_POST["password"];

        $this->hashPassword();
        $this->register();
    }

    function hashPassword() {
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
    }

    function register() {
        $userModel = new \models\User($this->username, $this->password);
        $userModel->createUser();
        //todo test if worked
        $this->render();
    }

    function render() {
        $registerView = new \views\Register($this->username, true);
        $registerRender = $registerView->render();
        echo $registerRender;
    }

}

if(isset($_POST["username"]) && isset($_POST["password"]))
    new Register();