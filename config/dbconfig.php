<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'zsdevcom_iftgift');
define('DB_PASSWORD', '401a~ysFhC!x');
define('DB_DATABASE', 'zsdevcom_iftgift');
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
$database = mysql_select_db(DB_DATABASE) or die(mysql_error());
?>
