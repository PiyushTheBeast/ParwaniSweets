<?php


class DBController
{
    // Database Connection Properties
     public $host = 'localhost';
     public $user = 'root';
     public $password = '';
     public $database = "sweets";

    // connection property
   public $con = null;

    // call constructor
    function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($this->con->connect_error){
            echo "Fail " . $this->con->connect_error;
        }
        echo "connection successful";
    }
   
    function __destruct()
    {
        $this->closeConnection();
    }

    // for mysqli closing connection
    function closeConnection(){
        if ($this->con != null ){
            $this->con->close();
            $this->con = null;
        }
    }
}
