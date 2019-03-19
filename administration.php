<?php
	// set the default timezone to use. Available since PHP 5.1
	date_default_timezone_set('Europe/Copenhagen'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LightController - Administration</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/mdb.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
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
				<li class="nav-item active">
					<a class="nav-link" href="administration.php">Administration</a>
				</li>
				<li class="nav-item">
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
<div class="container">
	<div class="col-lg-12">
		<div class="row text-center">
			<div class="col-lg-12">
				<h1>Administration</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8">
				<div class="row"><h2>Sæt grænsen</h2></div>
				<form id="set-limit" method="post">
					<!--First row-->
					<div class="row">
						<!--First column-->
						<div class="col-md-12">
							<div class="md-form form-group">
								<i class="fa fa-caret-down prefix" aria-hidden="true"></i>
								<input type="number"
										id="light-limit"
										class="form-control validate"
										min="0"
										max="255"
										minlength="1"
										maxlength="3"
										autocomplete="off"
										title="Indstil grænsen for lyset i rummet"
										name="limit"
										required>
								<label for="light-limit"
										data-error="ikke tilladt"
										data-success="tilladt">Indstil grænsen for lyset i rummet:</label>
							</div>
						</div>
					</div>
					<!-- Second row -->
					<div class="row">
						<!--First column-->
						<div class="col-md-12">
							<div class="md-form form-group">
								<button type="submit" class="btn btn-primary waves-effect waves-light">Sæt
									grænsen
								</button>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="col-lg-4">
				<div class="row"><h2>Sæt timer</h2></div>
				<form id="set-timer" method="post" action="controller/setTimer.php">
					<!--First row-->
					<div class="row">
						<div class="col-md-12">
							<div class="md-form">
								<i class="fa fa-hourglass-start prefix"></i>
								<input placeholder="Select date"
										type="datetime-local"
										id="light-timer-turn-on"
										class="form-control datepicker"
										autocomplete="off"
										title="Indstil tid for tænd"
										value=""
										min="<?php echo date('Y-m-d\TH:i') ?>"
										name="timer-start"
										required>
								<label for="light-timer-turn-on"
										data-error="ikke tilladt"
										data-success="tilladt" class="active">Indstil tid for tænd:</label>
							</div>
						</div>
					</div>
					<!--Second row-->
					<div class="row">
						<div class="col-md-12">
							<div class="md-form">
								<i class="fa fa-hourglass-end prefix"></i>
								<input placeholder="Select date"
										type="datetime-local"
										id="light-timer-turn-off"
										class="form-control datepicker"
										autocomplete="off"
										title="Indstil tid for sluk"
										value=""
										min="<?php echo date('Y-m-d\TH:i') ?>"
										name="timer-end"
										required>
								<label for="light-timer-turn-off"
										data-error="ikke tilladt"
										data-success="tilladt" class="active">Indstil tid for sluk:</label>
							</div>
						</div>
					</div>
					<!--Third row-->
					<div class="row">
						<div class="col-md-12">
							<div class="md-form">
								<button type="submit" class="btn btn-primary waves-effect waves-light">Sæt Timer
								</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="row text-center administration-content">
			<div class="row">
				<div class="col-lg-6">
					<button id="light-turn-on"
							type="submit"
							class="btn btn-primary waves-effect waves-light administration-button">Tænd
					</button>
				</div>
				<div class="col-lg-6">
					<button id="light-turn-off"
							type="submit"
							class="btn btn-primary waves-effect waves-light administration-button">Sluk
					</button>
				</div>
			</div>
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