<?php
 	$db_username='user_a6e7a679';
    $db_password='B)C,8pGNH^vo75';
    $db_database='db_a6e7a679';
    $db_hostname='10.194.111.8';
    
    $db_server=mysql_connect($db_hostname, $db_username, $db_password);
if(!$db_server)
    die("Connection".mysql_error());
mysql_select_db($db_database)
    or die("Database".mysql_error());
?>