<?php
include 'function.php';
head();

?>

<form action="redirect.php" target="_blank" id="#form" method="post" name="#form">
<div class="form-group">
  <label for="pwd"><h2><span class="glyphicon glyphicon-search"></span> Search in Quixy:  </h2></label>
  <input type="search" name="search" class="form-control" id="name">
</div>
<button id='btn' name="submit" type='submit' value='Go Go Go!!!' class="btn bnt-sm btn-success" target="_blank"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>  GO !!!</button>
<!---- Including PHP File Here ---->
<?php
include "include/redirect.php";
?>
</form>
<hr>

<label for="pwd"><h2><span class="glyphicon glyphicon-question-sign"></span> Troubleshoot:  </h2></label>
<hr>

<div class="row">

	<div class="col-xs-6">
		<label><h4><span class="glyphicon glyphicon-info-sign"></span> Handbook:</h4></label><br>
		<a href="data/NA Software Support Engineer Handbook1.8.pdf" target="_blank"><button class="btn btn-default btn-sm"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>  LOOK AT HANDBOOK</button></a>
	</div>
	
	<div class="col-xs-6">
				<label><h4><span class="glyphicon glyphicon-info-sign"></span> NA Guide Versions:</h4></label>
		<div class="dropdown">
			  <button class="btn btn-default btn-sm bnt-success dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				VERSION

				<span class="glyphicon glyphicon-menu-down"></span>
			  </button>
		  <ul class="dropdown-menu" aria-labelledby="dropdownMenuDivider">
			<li><a href="data/NA/[NA 9.10]/" target="_blank">9.10</a></li>
			<li><a href="data/NA/[NA 9.2x]/" target="_blank">9.2x</a></li>
			<li><a href="data/NA/[NA 10]/" target="_blank">10</a></li>
			<li><a href="data/NA/[NA 10.10]/" target="_blank">10.10</a></li>
			<li><a href="data/NA/[NA 10.10]/" target="_blank">10.11</a></li>			
			<!-- <li role="separator" class="divider" ></li>
			<li><a href="#">Separated link</a></li> -->
		  </ul>
		</div>
	</div>
</div>

<!-- new line -->

<br>
<label for="pwd"><h2><span class="glyphicon glyphicon-link"></span> Quick Links:  </h2></label>
<hr>

<a href="https://quixy.deu.hp.com/quixy/php/index.php/" target="_blank">
	<button class="btn btn-default btn-sm"><span class="glyphicon glyphicon-menu-right"></span> SPARX HOME</button>
</a>

<a href="http://15.119.121.20/" target="_blank">
	<button class="btn btn-default btn-sm"><span class="glyphicon glyphicon-menu-right"></span> NP NA LAB</button>
</a>

<a href="https://15.119.121.20/tcdocs/en/DSD/DSD_SYSOID_Mapping_Index.html" target="_blank">
	<button class="btn btn-default btn-sm"><span class="glyphicon glyphicon-menu-right"></span> SSOID MAPPING INDEX</button>
</a>

<a href="https://patch-central.corp.hpecorp.net/crypt-web/protected/viewProduct.do?productid=crypt%3Anetwork_automation%3A" target="_blank">
	<button class="btn btn-default btn-sm"><span class="glyphicon glyphicon-menu-right"></span>CRyPT - Patches and HotFixes</button>
</a>


<?php

foot();
?>