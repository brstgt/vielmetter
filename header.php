<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>Vielmetter GmbH - Ihr Fliesenleger und Maurer für die Region Stuttgart</title>
	<link media="screen" href="script/main.css" type="text/css" rel="stylesheet">
	<link type="image/png" href="gfx/fav.png" rel="icon">
	<meta name="description" content="Wir, die Vielmetter GmbH, sind ein Meisterbetrieb rund um das Bauhandwerk mit Schwerpunkt auf Fliesenleger- und Maurerarbeiten. Wir sind ein solides, schwäbisches Unternehmen, das sowohl Wert auf Tradition legt als auch auf dem neusten Stand der Technik arbeitet. Wir wollen unsere Kunden nicht nur zufrieden stellen, wir wollen Sie, unseren Kunden, begeistern!">
	<meta name="author" content="Benjamin Roth, Georg Hanslik">
	<meta name="keywords" content="Fliesenleger,Maurermeister,Renovierung,Projektplanung,Stuttgart,Fellbach,Waiblingen">
	<meta name="google-site-verification" content="G2Gz_Ybtm-eQ8zHjTb0HObAkgAB7lclSrSaBWyBCMHc" />
</head>
<body>
<div class="black"></div>
<div class="grey"></div>
<div class="red"></div>
<div class="headerbg">
	<div class="header">
		<a href="index.php">
			<div class="logo"><img src="gfx/logo.png"></div>
		</a>

		<div class="tel">Telefon: 0711 577 05 56<br>Mail: <a href="mailto:info@e-vielmetter.de">info@e-vielmetter.de</a>
		</div>
	</div>
</div>
<div class="menu">
	<ul>
		<?php
		$pages = array(
			'index'   => "Unternehmen",
			'work'    => "Leistungen",
			'team'    => "Team",
			'contact' => "Kontakt"
		);
		foreach ($pages as $page => $title) {
			$current = basename($_SERVER['REQUEST_URI']);
			echo "
            <a href='$page.php'>
                <li " . ($current == "$page.php" ? 'class="liActive"' : '') . ">
                    <img src='gfx/$page.png'><br/>$title
                </li>
            </a>";
		}
		?>
	</ul>
</div>
<div class="containerBg">
	<div class="container">