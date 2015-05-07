<?php

    require_once 'DB_Functions.php';
    $db = new DB_Functions();
 
    // response Array
    $response = array();
 
 
        // check for user
        $user = $db->getNotices();
        if ($user != false) {
            // user found
            // echo json with success = 1
           $response["success"] = 1;
            $response["date"] = $user["date"];
            $response["header"] = $user["header"];
            $response["content"] = $user["content"];
            $response["teacher_id"] = $user["teacher_id"];
            $response["time"] = $user["time"];
            echo json_encode($response);
			
        } else {
            // user not found
            // echo json with error = 1
            $response["error"] = 1;
            $response["error_msg"] = "Incorrect email or password!";
            echo json_encode($response);
        }
   

?>