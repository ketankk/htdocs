<?php
require_once 'config.php';
$con=mysql_connect($DB_HOST,$DB_USER,$DB_PASSWORD);
mysql_select_db($DB_DATABASE,$con);

?>