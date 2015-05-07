<?php

session_start();

?>
<html>
<head>
<link rel="icon" type="image/ico" href="favicon.ico"/>
<title>DCE Cubers</title>
<style type="text/css">
th
{
border:solid black 2px;
}
td
{
text-align:center;
}
</style>
</head>
<body background="brushed.png">

<center><h1>DCE CUBERS RANKING</h1></center>
<?php
error_reporting(0);
 
include 'connection.php';
$category=$_POST['category'];
$branch=$_POST['branch'];
$year=$_POST['year'];
if($category==null || $branch==null || $year==null)
{
	$category="three";
	$branch= "All";
	$year="All";
}
if($category=="three")
{
if($year=="All" && $branch!="All")
$query = "SELECT * FROM details WHERE Branch='$branch' ORDER BY time3;";
else if($year!="All" && $branch=="All")
$query = "SELECT * FROM details WHERE Year='$year' ORDER BY time3;";
else if($year=="All" && $branch=="All")
$query = "SELECT * FROM details ORDER BY time3";
else
$query = "SELECT * FROM details WHERE Branch='$branch' AND Year='$year' ORDER BY time3;";
}
else if($category=="four")
{
if($year=="All" && $branch!="All")
$query = "SELECT * FROM details WHERE Branch='$branch' ORDER BY time4;";
else if($year!="All" && $branch=="All")
$query = "SELECT * FROM details WHERE Year='$year' ORDER BY time4;";
else if($year=="All" && $branch=="All")
$query = "SELECT * FROM details ORDER BY time4";
else
$query = "SELECT * FROM details WHERE Branch='$branch' AND Year='$year' ORDER BY time4;";
}
else if($category=="two")
{
if($year=="All" && $branch!="All")
$query = "SELECT * FROM details WHERE Branch='$branch' ORDER BY time2;";
else if($year!="All" && $branch=="All")
$query = "SELECT * FROM details WHERE Year='$year' ORDER BY time2;";
else if($year=="All" && $branch=="All")
$query = "SELECT * FROM details ORDER BY time2";
else
$query = "SELECT * FROM details WHERE Branch='$branch' AND Year='$year' ORDER BY time2;";
}
else
{
if($year=="All" && $branch!="All")
$query = "SELECT * FROM details WHERE Branch='$branch' ORDER BY time3o;";
else if($year!="All" && $branch=="All")
$query = "SELECT * FROM details WHERE Year='$year' ORDER BY time3o;";
else if($year=="All" && $branch=="All")
$query = "SELECT * FROM details ORDER BY time3o";
else
$query = "SELECT * FROM details WHERE Branch='$branch' AND Year='$year' ORDER BY time3o;";
}	
$result = mysql_query($query);
$num=mysql_num_rows($result);
if($category=="three")
$cat="3X3";
else if($category=="four")
$cat="4X4";
else if($category=="two")
$cat="2X2";
else
$cat="3X3 OH";
?>
<br><br><br>
<center><a href="register.html" target="_blank">New Registration</a>
<br><br><br>
<form action="" method="post">
<b>Sort By</b>- Category: <select name="category">
<option value="three">3X3</option>
<option value="four">4X4</option>
<option value="two">2X2</option>
<option value="oneh">3X3 OH</option>
</select>
Branch: <select name="branch">
<option value="All">ALL</option>
<option value="AE">AE</option>
<option value="BT">BT</option>
<option value="CE">CE</option>
<option value="COE">COE</option>
<option value="ECE">ECE</option>
<option value="EE">EE</option>
<option value="EEE">EEE</option>
<option value="ENE">ENE</option>
<option value="EP">EP</option>
<option value="IT">IT</option>
<option value="ME">ME</option>
<option value="MCE">MCE</option>
<option value="PCT">PCT</option>
<option value="PIE">PIE</option>
<option value="SE">SE</option>
</select>
Year: <select name="year">
<option value="All">ALL</option>
<option value="1">I</option>
<option value="2">II</option>
<option value="3">III</option>
<option value="4">IV</option>
</select>
<input type="submit" value="Go">
</form>
<br><br><br>
<center>
Sorted By- Category:<?php echo $cat; ?>, Branch: <?php echo $branch; ?>, Year: <?php echo $year; ?>
<br><br><br>
<?php 

if($num==0)
die("<b><center>No Records Found</center></b>");

?>
<table cellpadding="5" cellspacing="0" border="1" width="80%">
<tr><th>Rank</th><th>Name</th><th>Time</th><th>Branch</th><th>Year</th></tr>
<?php
$counter=0;
for($i=0;$i<$num;$i++)
{
$f1=mysql_result($result,$i,"Name");
$f3=mysql_result($result,$i,"Branch");
$f4=mysql_result($result,$i,"Year");
if($category=="three")
$f2=mysql_result($result,$i,"Time3");
else if($category=="four")
$f2=mysql_result($result,$i,"Time4");
else if($category=="two")
$f2=mysql_result($result,$i,"Time2");
else
$f2=mysql_result($result,$i,"Time3o");
if($f2!=0)
{
?>
<tr>
<td><?php echo $counter+1; ?></td>
<td><?php echo $f1; ?></td>
<td><?php echo $f2; ?></td>
<td><?php echo $f3; ?></td>
<td><?php echo $f4; ?></td>
</tr>
<?php
$counter++;
}
}
?>
</table>
</center>
</body>
</html>