<?php
include 'function.php';
head();
echo '<a href="view.php">Go back</a>';
echo 'Add new case <hr>';

// filling the form

?>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		Case ID: <br><input type="text" size="40" name="caseid"></br>
		Title: <br><input type="text" size="60" name="title"></br>
		Issue Description: <br><textarea id="editor" name="desc" rows="10" cols="60"></textarea></br>
		Solution: <br><textarea id="editor2" name="sol" rows="10" cols="60"></textarea></br>
		<input type="submit">
	</form>
<?php	

// unused variable
# $cName = htmlspecialchars($_GET["casename"]);

// Used VARIABLE
$caseId = $_POST["caseid"];
$title =  $_POST["title"];
$desc =  htmlspecialchars($_POST["desc"]);
$solution =  htmlspecialchars($_POST["sol"]);
$userId = 1;

// current date and time variable
$dateNow = date("Y-m-d H:i:s");
	
// query
if (isset($caseId)) {
	
	// check correct filling
	if (empty($caseId)) {
		echo ('Empty : <i>Title</i><br>');
	}	
	if (empty($title)) {
		die ('Empty : <i>Description</i>');	
	}
	
	echo '<br>Adding:  <i>'.$dateNow.'</i>';
	echo '<hr>';
	
	// SQL Query
	$sql = "INSERT INTO cases (caseID, userID, caseNAME, caseDESC, caseSOLUTION, datetime)
	VALUES ('$caseId', '$userId', '$title', '$desc', '$solution', '$dateNow')";
	
	// Save Log SQL query 
	$slq2 = "INSERT INTO logs (datetime, description, userID)
	VALUES ('$dateLog', '$descLog', '$userLogId')";
	
	//check for errors
	if ($conn->query($sql2) === TRUE) { echo "Log created successfully"; } 
	else {echo "Error: " . $sql2 . "<br>" . $conn->error;}
		
	if ($conn->query($sql) === TRUE) {
		// create log 
		$dateLog = date("Y-m-d H:i:s");
		$descLog = 'Create new case';
		$userLogId = 1;
		
		

		
		echo "New case record created successfully";
		
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
	$conn->close();
	
foot();
?>