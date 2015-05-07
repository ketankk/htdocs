<?php
include "../connection.php";
$email=$_POST['email'];
$query="DELETE FROM admins WHERE Email='$email'";
$result=mysql_query($query,$con) or die(mysql_error());
if($result)
echo $email.' Deleted from database';
else echo "Couldn't Delete"
?>