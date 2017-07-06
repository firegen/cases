<?php
# all includes and php function
include_once 'conf.php';

// Foot page navigation
function head(){
	echo '
		<!DOCTYPE html>
			<html>
			<head>
				<title>SOFIA HP NA Team</title>
				<meta content="noindex, nofollow" name="robots">
				<meta charset="utf-8">
				<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
				<link href="css/custom.css" rel="stylesheet" type="text/css">
				<script src="js/bootstrap.min.js"></script>
				<script src="js/npm.js.js"></script>
				<link href="css/test.css" rel="stylesheet">
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
				<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
				<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
				<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
				
				<!-- Load jQuery  -->
				<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

				<!-- Load WysiBB JS and Theme -->
				<script src="http://cdn.wysibb.com/js/jquery.wysibb.min.js"></script>
				<link rel="stylesheet" href="http://cdn.wysibb.com/css/default/wbbtheme.css" />
				
				<!-- Init WysiBB BBCode editor -->
				<script>
				$(function() {
				  $("#editor").wysibb();
				})
				</script>ю
				
				<!-- Load second editor  -->
				<script>
				$(document).ready(function() {
				var wbbOpt = {
				buttons: "bold,italic,underline,|,img,link,|,code,quote"
				}
				$("#editor2").wysibb(wbbOpt);
				});
				</script>				
				
			</head>
			<body>
			  <!-- Navbar -->
			  <nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
				  <div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					  <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					  
					</button>
					<a class="navbar-brand" href="index.php">HP NA SOFIA TEAM</a>
				  </div>
				  <div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
					  <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
					  <li><a href="faq.php"><span class="glyphicon glyphicon-info-sign"></span> FAQ</a></li>
					  <li><a href="test.php"><span class="glyphicon glyphicon-wrench"></span> TEST ENVIRONMENT</a></li>
					</ul>
				  </div>
				</div>
			  </nav>
			<center> <code>&lt;visible internal only&gt;</code> </center>
			<hr>
			<div class="container">

			
	';
}

// Foot page navigation
function foot(){
	echo '<hr>';
#	CheckMysqlConn();
	
	// 
	$hash = rand(1,100);
	$hash = sha1($hash);
	echo '
	
	<small>Sha1 cripted connection:<i><b> '. $hash .'</b></i></small><br>
	<div align="right"><small>evg code 2016® build 07262016-001</small></div>
	';
	
	
	// test 
#	$a = sha1('a1');
#	echo '<br>Sha1 cripted connection: <b>'.$a .'</b><p>&nbsp;</p>';
#	if ($a == f29bc91bbdab169fc0c0a326965953d11c7dff83){
#
#	}
#	else{
#		echo 'false <p>&nbsp;</p>';
#	}

//
}

// Check MySQL connection
function CheckMysqlConn(){
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	} 
	else
	echo "MySQL Connected Successfull";
}
//


?>