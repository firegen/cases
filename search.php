<!DOCTYPE html>
<html>
<head>
<title>Redirect Form To a Particular Page On Submit - Demo Preview</title>
<meta content="noindex, nofollow" name="robots">
<meta charset="utf-8">

<link href='main.css' rel='stylesheet' type='text/css'> <!--== Include CSS File Here ==-->
</head>
<body>
<div class="main">
<div class="first">
<h2>Търси в Quixy</h2>
<form action="redirect.php" id="#form" method="post" name="#form">
<input id="name" name="search" placeholder='търси' type='search'>

<input id='btn' name="submit" type='submit' value='Юруш'>
<!---- Including PHP File Here ---->
<?php
include "include/redirect.php";
?>
</form>
</div>
</div>
</body>
</html>