<?php

class MySQL
{
    //TODO: move these somewhere save pls
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbName = "not_twitter";
    private $conn;

    public function __construct()
    {
        //TODO
        //connect to db?
        //establuish db con in outside init classes?
        //do da think and then da thing
        //use multiline comments
        //connect models to dis pls
        //store db creds in different file ye kthxbye

        try {
            $this->conn = new PDO("mysql:host=$this->servername;$this->dbName", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully";
        }
        catch(PDOException $e)
        {
            echo "U dun gufed: " . $e->getMessage();
        }
    }

    public function insert($table, $values, $fields) {
        $questionmarkspls = "?";
        for($i = 1; $i < count($values); $i++) {
            $questionmarkspls = $questionmarkspls.",?";
        }
        $sql = $this->conn->prepare("INSERT INTO $this->dbName.".$table." (".implode(",",$fields).") VALUES (".$questionmarkspls.")");
        $sql->execute($values);
    }
}