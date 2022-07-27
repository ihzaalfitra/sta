<?php
	$host = "localhost";
	$username = "u4587348_admsta";
	$password = "";
	$db = "";

    $conn=mysqli_connect("$host","$username","$password","$db");

	$db = new PDO("mysql:host=".@$host.";dbname=".@$db.";charset=utf8mb4", $username, $password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
?>
