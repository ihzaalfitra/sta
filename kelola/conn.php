<?php
	$host = "localhost";
	$username = "u4587348_admsta";
	$password = "";
	$db = "";
	//I accidentally commit this file that connects to database. But the old password and db password is unusable since my hosting has changed anyway
    	$conn=mysqli_connect("$host","$username","$password","$db");

	$db = new PDO("mysql:host=".@$host.";dbname=".@$db.";charset=utf8mb4", $username, $password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
?>
