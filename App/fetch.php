<?php
require 'funx.php';

$feedid=$_GET['id'];

getfeeditems($feedid); //function that will get feeds of that feed id, by default sorted on date of publish

?>
