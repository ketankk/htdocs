<?php

include "connection.php";

$query="SELECT * FROM details WHERE Branch='MCE' AND Year='3' ORDER BY time3";
$result=mysql_query($query);
$num=mysql_num_rows($result);

echo $num;

?>