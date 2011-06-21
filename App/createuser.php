<?php
require 'funx.php';
$user=$_POST;

$emailid=$user['emailid'];
$password=$user['password'];
$fname=$user['fname'];
$lname=$user['lname'];

require 'connect.php';
$q="Insert into user values(null, '$emailid', '$password', '$fname', '$lname')";
$r=mysql_query($q);
if(!$r)
	die(mysql_error());

?>
