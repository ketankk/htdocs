<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("android")or die("haha");
$result=mysql_query("select * from trial");
$json=array();
if(mysql_num_rows($result)){
while($row=mysql_fetch_assoc($result)){
$json['d'][]=$row;
}
}
$json['d'][]='keta';
mysql_close($con);
echo json_encode($json);
?>