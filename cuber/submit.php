<?php

include "connection.php";
$reg=$_POST['reg'];
$name=$_POST['name'];
$time3=$_POST['time3'];
$time2=$_POST['time2'];
$time4=$_POST['time4'];
$time3o=$_POST['timeo3'];
$branch=$_POST['branch'];
$year=$_POST['year'];

$query="INSERT INTO details SET Reg='$reg', Name='$name', Time3='$time3', Branch='$branch', Year='$year', Time2='$time2', Time4='$time4', Time3o='$time3o'";
if(!mysql_query($query))
	die("Error!!".mysql_error());
else
	echo "Your details have been recorded";

?>
<html>
<head>
<link rel="icon" type="image/ico" href="favicon.ico"/>
</head>
<body background="brushed.png">

</body>
</html>