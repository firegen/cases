<?php
include 'function.php';
head();
echo 'View all cases <hr>';

$sql = "SELECT * FROM cases ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	echo '<table class="table">
			<tr>
				<td>id</td>
				<td>UserID</td>
				<td>CaseName</td>
				<!-- <td>CaseDesk</td> -->
				<td>Edit</td>
				<td>View</td>
			</tr>
		';
    while($row = $result->fetch_assoc()) {		
       # echo "<tr><td>" . $row["id"]. "</td><td>" . $row["userID"]. "</td><td>" . $row["caseNAME"]. "</td><td>" . $row["caseDESC"]. "</td></tr>";
		echo '<tr><td>'.$row[id].'</td>';
		echo '<td>'.$row[userID].'</td>';
		echo '<td>'.$row[caseNAME].'</td>';
		#echo '<td>'.$row[caseDESC].'</td>';
		# if is the case owner can edit
		echo '<td><a href="edit_case.php?id='.$row[id].'">Edit</a></td><';
		
		echo '<td><a href="view_case.php?id='.$row[id].'">View</a></td></tr>';
    }
} else {
    echo "0 results";
}
echo '</table>';
$conn->close();

foot();
?>

