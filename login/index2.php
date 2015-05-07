<?php

 
if (isset($_POST['note']) && $_POST['note'] != '') {
    // get tag
    $note = $_POST['note'];
    $head = $_POST['head'];
    $Id = $_POST['Id'];

    // include db handler
    require_once 'DB_Functions2.php';
    $db = new DB_Functions2();
	
	
 if($db->storeNote($head, $note, $Id))
 echo $note ;
 echo '<br> updated by <br>';
 echo $Id;
 $t=time.
 echo $t;
 
 
        }
     else {
        echo "Invalid Request";
    
} 
?>