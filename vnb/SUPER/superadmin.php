<?php
session_start();
if(isset($_SESSION['sup_email'])){
	header('location:superadmin_portal.php');
	};

?>
<html>
<head>
<title>Virtual Notice Board|Super Admin Portal</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="shortcut icon" href="images/favicon.ico" />

</head>
<body>
<form action="action_superadmin.php" method="post" >

<div id="mainform" >
<h3>Super Admin Login</h3>

<div id="form">
<div>
<label>Email :</label>
<input name="email" id="email" type="text">
<label>Password:</label>
<input name="password" id="password" type="password">
<input id="submit" type="submit" value="Login" >

</div>
</div>
</div>


</form>

</body>
</html>