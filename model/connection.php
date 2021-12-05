<?php
    class connection{
        var $conn;
        function __construct()
        {
            //thong so ket voi CSDL
            $servername = "localhost";
            $username = "root";
            $pass = "";
            $dbname = "bookStore_lt";

            //tao ket noi 
            $this->conn = new mysqli($servername,$username,$pass,$dbname);
            $this->conn->set_charset("utf8");

            //kiem tra ket noi
            if($this->conn->connect_error){
                die("connection Failed: ". $this->conn->connect_error);
            }

        }
        
    }
?>