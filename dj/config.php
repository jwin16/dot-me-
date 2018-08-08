<?php
$dbhost = "208.43.61.58";
$dbuser = "scholar1";
$dbpasswd = "joezmp10";
$dbname = "scholar";

$dbh1 = mysql_connect($dbhost, $dbuser, $dbpasswd) or die("Site Down");
mysql_select_db($dbname,$dbh1) or die("Could not select database");
?> 
