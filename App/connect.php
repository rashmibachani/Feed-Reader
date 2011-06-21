<?php
 	$db_username='rashmi';
    $db_password='mahogany';
    $db_database='feedreader';
    $db_hostname='localhost';
    
    $db_server=mysql_connect($db_hostname, $db_username, $db_password);
if(!$db_server)
    die("Connection".mysql_error());
mysql_select_db($db_database)
    or die("Database".mysql_error());
?>