<?php
if(isset($_POST['submit'])){
// Fetching variables of the form which travels in URL
$name = $_POST['search'];

# if($name !=''&& $name !=''&& $contact !=''&& $address !='')
	if($name !='')
{
//  To redirect form on a particular page
$url = "https://quixy.deu.hp.com/quixy/query/alm_fulltext.php?PROJECTS%5B%5D=NA+Core&PROJECTS%5B%5D=NA+Driver&PROJECTS%5B%5D=NA+SnC&SEARCH_STRING=$name&SUBMIT=Search&MATCH_ALL_TERMS=TRUE&STEMMING=TRUE";

echo $url;

 header("Location:$url");
}
else{
?><span><?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
}
}
?>