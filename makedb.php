<?php
include 'function.php';
head();
echo 'Make Database </br>';

# MYSQL CONECTION
	// connect mysql mysql
	$servername = "localhost";
	$username = "root";
	$password = "evg123";

	// Create connection
	$conn = new mysqli($servername, $username, $password);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully";
	
	// Create database
	$sql = "CREATE DATABASE CasesDb";
	if ($conn->query($sql) === TRUE) {
		echo "Database created successfully";
	} else {
		echo "Error creating database: " . $conn->error;
	}

	$conn->close();

foot();
?>