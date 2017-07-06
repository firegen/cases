<?php
# conf file, creation date: 7/18/2016, creator: Evgeni


# MYSQL CONECTION
	// connect mysql mysql
	$servername = "localhost";
	$username = "root";
	$password = "evg123";
	$dbname = "CasesDb";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	$conn2 = new mysqli($servername, $username, $password, $dbname);
# Site Name
	$SiteName = "NASE";
?>