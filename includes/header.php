<!DOCTYPE html>
<html>
	<head>
		<title>MS DESIGN pro</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
		<link rel="stylesheet" type="text/css" href="includes/includes.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<meta charset="utf-8">
	</head>
	<body class="container">
			<header>
				<div class="logo">
					<div class="row">
						<a href="pocetna.php"
						<?php if ($active_page == "pocetna"){echo'id="active"';}?>>
						<img src="images/logo.png"></a>
					</div>	
					<div class="row">
						<p class="offset-5 col-2">MS DESIGN pro</p>
						<span class="offset-4 col-4">-studio za arhitekturu i dizajn-</span>
					</div>
				</div>
				<nav class="row">
					<a href="pocetna.php" class="col-2"
					<?php if ($active_page == "pocetna"){echo'id="active"';}?>>Početna</a>
					<a href="o-nama.php" class="col-2"
					<?php if ($active_page == "o-nama"){echo'id="active"';}?>>O nama</a>
					<a href="usluge.php" class="col-2"
					<?php if ($active_page == "usluge"){echo'id="active"';}?>>Usluge</a>
					<a href="portfolio.php" class="col-2"
					<?php if ($active_page == "portfolio"){echo'id="active"';}?>>Portfolio</a>
					<a href="kontakt.php" class="col-2"
					<?php if ($active_page == "kontakt"){echo'id="active"';}?>>Kontakt</a>
					<a href="saradnici.php" class="col-2"
					<?php if ($active_page == "saradnici"){echo'id="active"';}?>>Saradnici</a>
				</nav>
			</header>