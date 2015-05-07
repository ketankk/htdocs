<?php
$not=$_POST['note'];
if($not)
echo 'Notification Submitted successfully<br>';
echo $not;
    require_once 'config.php';
	    require_once 'DB_Connnect2.php';


    require_once 'index.php';

?>
<html>
<br><u>
<a href="welcome.html">back</a>
</html>