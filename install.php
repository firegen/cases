<?php
include 'function.php';
head();

?>
<h2>Search in Quixy</h2>



<?php
echo 'Search Cases </br>';
echo '
	<form>
		<input type="search" name="search" action="">
		<input type="submit">
	</form>
	
';
if(preg_replace("^/[A-Za-z]+/", $_GET['search'])){ 
$name=$_GET['search']; 
} 


if (isset($_GET["search"])) {
	echo '<br>Searching for:  <i>' . htmlspecialchars($_GET["search"]) . '</i><hr>';

		$data = "text text text text text text text losr text text s";
		echo $data;

		if(preg_match('(bad|naughty)', $data)) {	echo 'true'; } 
	
	
	
	
	}



	echo '
	</br>
	Install db option
	<ul>
		<li><a href="index.php">Home</a>
		<li><a href="add.php">Add New</a>
		<li><a href="makedb.php">MakeDB</a>
		<li><a href="makedbdata.php">MakeDB tables</a>
	</ul>
	';

foot();
?>