<?php
 
class DB_Functions {
 
    private $db;
 
    //put your code here
    // constructor
    function __construct() {
        require_once 'DB_Connect.php';
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
    public function storeUser($name, $desig, $dept, $email, $password) {
	
       
		$q="INSERT INTO faculty(name, desig, dept, email, pass) VALUES('$name', '$desig', '$dept', '$email', '$password')";
		
		
        $result = mysql_query($q);
		
        // check for successful store
        if ($result) {
            $result = mysql_query("SELECT * FROM faculty WHERE name = $name");
            // return user details
            return true;
        } else {
            return false;
        }
    }
 
    /**
     * Get user by email and password
     */
    public function getUserByEmailAndPassword($email, $password) {

        $result = mysql_query("SELECT * FROM faculty where email='$email'") or die(mysql_error());
        // check for result echo WHERE email = '$email
		
        $no_of_rows = mysql_num_rows($result);
		//echo $no_of_rows;
        if ($no_of_rows > 0) {
            $result = mysql_fetch_array($result);
			//return $result;
			}
           // $salt = $result['salt'];
            $encrypted_password = $result['pass'];
            //$hash = $this->checkhashSSHA($salt, $password);
             //check for password equality
            if ($encrypted_password == $password) {
                // user authentication details are correct
                return $result;
            }
         else {
            // user not found
            return false;
        }
    }
 
    /**
     * Check user is existed or not
     */
    public function isUserExisted($email) {
	
        $result = mysql_query("SELECT email from users WHERE email = '$email'");
        $no_of_rows = mysql_num_rows($result);
        if ($no_of_rows > 0) {
            // user existed 
            return true;
        } else {
            // user not existed
            return false;
        }
    }
 
    /*
     * Encrypting password
     * @param password
     * returns salt and encrypted password
     */
    public function hashSSHA($password) {
 
        $salt = sha1(rand());
        $salt = substr($salt, 0, 10);
        $encrypted = base64_encode(sha1($password . $salt, true) . $salt);
        $hash = array("salt" => $salt, "encrypted" => $encrypted);
        return $hash;
    }
 
    /**
     * Decrypting password
     * @param salt, password
     * returns hash string
     */
    public function checkhashSSHA($salt, $password) {
 
        $hash = base64_encode(sha1($password . $salt, true) . $salt);
 
        return $hash;
    }
 
}
 
?>