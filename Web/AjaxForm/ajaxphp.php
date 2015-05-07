<?php
$con=mysql_connect('localhost','root','');
mysql_select_db('login',$con);
$name=$_POST['name'];
$password=$_POST['password'];
$contact=$_POST['contact'];
$query="INSERT INTO ajax(Name,Password,Contact)VALUES('$name','$password','$contact')";
mysql_query($query);
echo "Form Submitted successfully!!";
mysql_close($con);

?>