<?php

	session_start();
	
	include "../connection.php";
	
	if(!isset($_SESSION['sup_email'])) {
	
		header('location:superadmin.php');
		die();
	
	}
	
	$query_2 = "SELECT Name, Email FROM admins";
	$result_2 = mysql_query($query_2, $con);
	$num_rows_2 = mysql_num_rows($result_2);
	
	mysql_close($con);
	
?>

<html>

<head>

<title>Super Admin Portal</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<link href="css/portal.css" rel="stylesheet">
<link rel="shortcut icon" href="../images/favicon.ico" />


<script src="script.js"></script>
<script type="text/javascript">

function delete_admin(id) {
var datastring='email='+id;
console.log(datastring);
			
		$.ajax({
type:"POST",
url:"delete.php",
data:datastring,
cache:false,
success:function(result){
alert(result);
}
});
location.reload();

		
		return false;
	}

</script>
</head>

<body>
<a href="logout_super_admin.php" id="logout"><img src="../images/logout.png" width="50%"/></a>

<div class="mainform">
<span id="form">
<h3>Add New Admin</h3>
<h3>Enter Login Credentials</h3>
<label><h4>Name :</label>
<input id="name" type="text"/>
<label>Email :</label>
<input id="email" type="text"/>
<label>Password:</label>
<input id="password" type="password"/>
<input id="submit" type="submit" value="Submit"/ >
</h4>
</span>


<span id="all_admins">
<h3>View Admins</h3>

<table cellspacing="1px" cellpadding="10px">

<tr align="center">
	<th>S. No.</th>
	<th>Name</th>
	<th>Email</th>
	<th>Delete user</th>
</tr>

<?php	
	
	for($i = 0; $i < $num_rows_2; $i++) {
	
		?>
		
		<tr align="center">
			<td><?php echo $i + 1; ?></td>
			<td><?php echo mysql_result($result_2, $i, "Name"); ?></td>
			<td><?php echo mysql_result($result_2, $i, "Email"); ?></td>
			<td><button  type="reset" id="reset" onclick="delete_admin('<?php echo mysql_result($result_2, $i, "Email"); ?>')"  ><img width="10px" height="10px"src="../images/delete.png"/></button></td>
		</tr>
		
		<?php
	
	}
	
?>

</table>

</span>
</div>

</body>

</html>