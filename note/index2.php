<?php
require_once 'connections.php';



//$user=$_POST['user1'];

/*
Replace $id by user id from app.

*/
$id='001';

$q2="SELECT header FROM notices WHERE teacher_id='$id' ORDER BY time DESC LIMIT 1";
$head=mysql_query($q2) or die (mysql_error());
$head=mysql_fetch_array($head);


echo $head['header'].'  \nWas your last notification';


//else echo 'Error.!! Post again';

?>

