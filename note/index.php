<?php
require_once 'connections.php';



$title=$_POST['title'];
$message=$_POST['message'];
$year=$_POST['year'];

$id='001';
$q="INSERT INTO notices(date,header,content,teacher_id,year,time) VALUES(CURDATE(),'$title','$message','$id','$year',NOW())";
$res=mysql_query($q) or die (mysql_error());
if($q){
$q2="SELECT * FROM notices WHERE content='$message'";
$head=mysql_query($q2) or die (mysql_error());
$head=mysql_fetch_array($head);

if($head['header']==$title)
{
echo $title.' Posted Successfully';
}
}
else echo 'Error.!! Post again';

?>

