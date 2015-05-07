<?php
/**
 * File to handle all API requests
 * Accepts GET and POST
 * 
 * Each request will be identified by TAG
 * Response will be JSON data
 
  /**
 * check for POST request 
 */
 
if (isset($_POST['tag']) && $_POST['tag'] != '') {
    // get tag
    $tag = $_POST['tag'];

    // include db handler
    require_once 'DB_Functions.php';
    $db = new DB_Functions();
 
    // response Array
    $response = array("tag" => $tag, "success" => 0, "error" => 0);
 
    // check for tag type
    if ($tag == 'login') {
        // Request type is check Login
        $email = $_POST['email'];
		
        $password = $_POST['password'];
 
        // check for user
        $user = $db->getUserByEmailAndPassword($email, $password);
        if ($user['email']== $email) {
           
           
			echo $email;
        } else {
            
            echo "Incorrect email or password!";
      
        }
    } else if ($tag == 'register') {

        // Request type is Register new user
        $name = $_POST['name'];
		$desig = $_POST['desig'];
		$dept = $_POST['dept'];
		$email = $_POST['email'];
        $password = $_POST['pass1'];
		//$password2 = $_POST['pass2'];
		
        // check if user is already existed
        if ($db->isUserExisted($email)) {
            // user is already existed - error response
            $response["error"] = 2;
            $response["error_msg"] = "User already exists";
            echo json_encode($response);
        } else {
            // store user
				
            $user = $db->storeUser($name, $desig, $dept, $email, $password);
			echo $user;
            if ($user)
			{
                // user stored successfully
                echo $name;
				echo $desig;
				echo $dept;
				echo $email;
				echo $password;
				
            } else
			{
                // user failed to store
                $response["error"] = 1;
                $response["error_msg"] = "Error occured in Registartion";
                echo json_encode($response);
            }
        }
    } else {
        echo "Invalid Request";
    }
} else {
  echo "Access Denied";
}
?>