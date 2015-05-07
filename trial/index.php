<?php
$con = mysql_connect("mysql.1freehosting.com","u141446917_vj","1234567890");
mysql_select_db("u141446917_dtu",$con);

$result = mysql_query("SELECT * FROM users");
$count=mysql_num_rows($result);
//echo $result[1]['Name'];
echo "$count <br>";
while(list($name,$id)=mysql_fetch_array($result)){
echo "$name <br>";
echo "$id <br>";
}
?>