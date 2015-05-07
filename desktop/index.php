<?php

$con = mysql_connect('localhost','root','');
mysql_select_db('android',$con);
$tag=$_POST['tag'];
if($tag!='register')
die($tag);
$ame=$_POST['name'];
$pass=$_POST['password'];
$q="INSERT INTO trial (user,password) VALUES ('$ame','$pass')";
mysql_query($q) or die(mysql_error());

echo $ame.' , '.$pass;

?>