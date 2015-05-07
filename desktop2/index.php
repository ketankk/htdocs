<?php
require_once 'connections.php';

if($_POST['tag']=='login'){

$email=$_POST['email'];
$password=$_POST['password'];

$q="SELECT name FROM faculty WHERE email='$email'and pass='$password'";
$res=mysql_query($q) or die (mysql_error());
$num_rows = mysql_num_rows($res);

if( $num_rows>0)
{
echo mysql_result($res, 0, "Name"); 
}
else {
echo "#false";
//echo 'Either Email or password is wrong';
}
}
?>