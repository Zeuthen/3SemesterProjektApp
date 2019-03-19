<?php
	// set the default timezone to use. Available since PHP 5.1
	date_default_timezone_set('Europe/Copenhagen');
	setlocale(LC_ALL, 'danish');
	error_reporting(E_ALL); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LightController - Oversigt</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/mdb.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- MENU -->
<header>
	<!--Navbar-->
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		
		<!-- Navbar brand -->
		<a class="navbar-brand" href="/">LightController</a>
		
		<!-- Collapse button -->
		<button class="navbar-toggler"
				type="button"
				data-toggle="collapse"
				data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent"
				aria-expanded="false"
				aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
		
		<!-- Collapsible content -->
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			
			<!-- Links -->
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="administration.php">Administration</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="overview.php">Oversigt</a>
				</li>
				
				<!-- Dropdown -->
				<!--<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle"
							id="navbarDropdownMenuLink"
							data-toggle="dropdown"
							aria-haspopup="true"
							aria-expanded="false">Dropdown</a>
					<div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li>-->
			
			</ul>
			<!-- Links -->
			
			<!-- Search form -->
			<!--<form class="form-inline">
				<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
			</form>-->
		</div>
		<!-- Collapsible content -->
	
	</nav>
	<!--/.Navbar-->
</header>

<!-- CONTENT -->
<div class="container-fluid">
	<div class="col-lg-12">
		<div class="row text-center">
			<div class="col-lg-12">
				<h1>Oversigt</h1>
			</div>
		</div>
		<div class="row text-center overview-content">
			<table class="table table-hover table-bordered">
				<thead class="bg-primary text-white">
					<tr>
						<th><?php echo strftime('%A d. %d / %m - %Y', time()) ?></th>
						<th><?php echo strftime('%A d. %d / %m - %Y', strtotime("Tomorrow")) ?></th>
						<th><?php echo strftime('%A d. %d / %m - %Y', strtotime('+2 days')) ?></th>
						<th><?php echo strftime('%A d. %d / %m - %Y', strtotime('+3 days')) ?></th>
						<th><?php echo strftime('%A d. %d / %m - %Y', strtotime('+4 days')) ?></th>
					</tr>
				</thead>
				<tbody>
					<tr id="weather">
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr id="temperature">
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td class="measureResult"></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/mdb.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>