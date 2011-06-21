<?php
require 'funx.php';

$userid=$_SESSION['userid'];
$url=$_POST['subscribeto'];

savefeed($url, $userid);
header("Location:home.php")
?>
