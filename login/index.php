<?php

 
if (isset($_POST['tag']) && $_POST['tag'] != '') {
    // get tag
    $tag = $_POST['tag'];

    // include db handler
    require_once 'DB_Functions.php';
    $db = new DB_Functions();
 
    // response Array
    $response = array("tag" => $tag, "success" => 0, "error" => 0);
 
    // check for tag type
    if ($tag == 'Login') {
        // Request type is check Login
        $email = $_POST['email'];
        $password = $_POST['password'];
 
        // check for user
        $user = $db->getUserByEmailAndPassword($email, $password);
        if ($user != false) {
            
			header('Location:welcome.html');
			
        } else {
            echo "Wrong user name";
        }
    } else if ($tag == 'Register') {
        // Request type is Register new user
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
		
        // check if user is already existed
        if ($db->isUserExisted($email)) {
            // user is already existed - error response
           echo "User already existed";
        } else {
            // store user
            $user = $db->storeUser($name, $email, $password);
            if ($user) {
                
                echo "Successfully Entered";
            } else {
                // user failed to store
                echo "Error occured in Registartion";
            }
        }
    } else {
        echo "Invalid Request";
    }
} else {
  echo "Access Denied";
}
?>