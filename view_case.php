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
		echo 'id='.$row[id].' <b>Label:</b><br>'.$row[caseNAME].'<p>&nbsp;</p>';
		echo '<b>Description:</b>';
		echo '<div id="wordwrap">';
		$htmltext = showBBcodes($row[caseDESC]);
		echo $htmltext;
		echo '</div>';
   }
} else {
    echo "0 results";
}
$conn->close();



foot();
?>

