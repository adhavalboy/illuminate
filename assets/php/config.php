<?php
	$hostname='sql300.epizy.com';
	$user = 'epiz_22204981';
	$password = 'dgoza007';
	$mysql_database = 'epiz_22204981_signup';
	$db = mysql_connect($hostname, $user, $password,$mysql_database);
	mysql_select_db("epiz_22204981_signup", $db);
?>
