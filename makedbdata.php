<?php
include 'function.php';
head();

// MySQL connection
$servername = "localhost";
$username = "root";
$password = "evg123";
$dbname = "CasesDb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE cases (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
  userID int(10) NOT NULL,
  caseNAME varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  caseDESC varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Visible table';
";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
foot();
?>