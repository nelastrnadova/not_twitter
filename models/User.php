<?php
namespace models;

include "..\kernel.php";

class User
{
    private $tableName = "users";
    private $idName = "user_id";
    private $usernameName = "username";
    private $passwordName = "password";
    private $id;
    private $username;
    private $password;
    private $mySQL;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
        $this->mySQL = new \MySQL();
    }

    public function createUser() {
        if(isset($this->username) && isset($this->password)) {
            $this->mySQL->insert($this->tableName, Array($this->username, $this->password), Array($this->usernameName, $this->passwordName));
        } else {
            //TODO: proper error mesages pls
            echo $this->username."<br>".$this->password."<br>";
            echo "u don goofed. didn set the params nessecerlllll for creating a new user in User.php models";
        }
    }

    //getters and setters

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }
}