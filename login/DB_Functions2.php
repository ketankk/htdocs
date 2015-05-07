<?php
 
class DB_Functions2 {
 
    private $db;
 
    //put your code here
    // constructor
    function __construct() {
        require_once 'DB_Connect2.php';
        // connecting to database
        $this->db = new DB_Connect();
        $this->db->connect();
    }
 
    // destructor
    function __destruct() {
         
    }
 
    /**
     * Storing new user
     * returns user details
     */
    public function storeNote($head, $note, $id) {
        $t=time;
        $result = mysql_query("INSERT INTO notices VALUES('12','$head','$note', '$id', 'time')");
        // check for successful store
        if ($result) {
            
            //$result = mysql_query("SELECT * FROM users WHERE name = $name");
            // return user details
            return true;// mysql_fetch_array($result);
        } else {
            return false;
        }
    }
 
    
    
}
 
?>