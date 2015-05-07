<?php

$con = mysql_connect('mysql.serversfree.com','u275254040_fac','1234567890');
mysql_select_db('u275254040_andro',$con);
$tag=$_POST['tag'];
if($tag!='register')
die($tag);
 $name = $_POST['name'];
		$desig = $_POST['desig'];
		$dept = $_POST['dept'];
		$email = $_POST['email'];
        $password = $_POST['pass1'];

$q="INSERT INTO faculty(name, desig, dept, email, pass) VALUES('$name', '$desig', '$dept', '$email', '$password')";
mysql_query($q) or die(mysql_error());

echo $name.' , '.$password;

?>