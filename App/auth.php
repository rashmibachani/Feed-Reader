<?php
require 'funx.php';
$emailid=$_POST['emailid'];
$password=$_POST['password'];

validate($emailid, $password);

?>