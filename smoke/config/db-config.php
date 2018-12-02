<?php
class DBController {
    private $DB_ServerName = "localhost";
    private $DB_UserName = "root";
    private $DB_Password = "12345678";
    private $DB_Database = "db_1";
    
    private $conn;
    
    function __construct() {
        $this->conn = $this->connectDB();
        if(!empty($this->conn)) {
            $this->selectDB();
        }
    }
    
    function connectDB() {
        $conn = mysqli_connect($this->DB_ServerName,$this->DB_UserName,$this->DB_Password,$this->DB_Database);
        return $conn;
    }
    
    function selectDB() {
        mysqli_select_db($this->conn, $this->DB_Database);
    }
    
    function numRows($query) {
        $result  = mysqli_query($this->conn, $query);
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }
}
?>