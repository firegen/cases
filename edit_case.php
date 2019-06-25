<?php
include 'function.php';
include_once 'bbcodes.php';
head();
echo 'View <hr>';
$veiw_case_id = $_GET[id];

$sql = 'SELECT id, caseID, userID, caseNAME, caseDESC, caseSOLUTION FROM cases WHERE id ='.$veiw_case_id.'';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        #echo "id: " . $row["id"]. " - User: " . $row["userID"]. " - Label: " . $row["caseNAME"]. "<br><div class=>Description: <pre>".$row["caseDESC"]."</pre><br>";
		
		//  new edit form
		/// Variables
		$htmltext = $row[caseDESC];
		
		
		?>
		<hr>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			Case ID: <br><input type="text" size="40" name="caseid" value="<?php echo $row[id]; ?>" disabled></br>
			Title: <br><input type="text" size="60" name="title" value="<?php echo $row[caseNAME]; ?>"></br>
			Issue Description: <br><textarea disabled="true" readonly id="editor" name="desc" rows="10" cols="60"><?php echo $htmltext; ?></textarea></br>
			Solution: <br><textarea id="editor2" name="sol" rows="10" cols="60"></textarea></br>
			<input type="submit" value='Make Edit'>
		</form>
		
		<?php
		// end edit form
		
				echo '</div>';
   }
} else {
    echo "0 results";
}
$conn->close();



foot();
?>

