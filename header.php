<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Vielmetter GbR</title>
    <link media="screen" href="script/main.css" type="text/css" rel="stylesheet">
    <link type="image/png" href="gfx/fav.png" rel="icon">
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
            'index' => "Unternehmen",
            'work' => "Leistungen",
            'team' => "Team",
            'contact' => "Kontakt"
        );
        foreach ($pages as $page => $title) {
            $current = basename($_SERVER['REQUEST_URI']);
            echo "
            <a href='$page.php'>
                <li ".($current == "$page.php" ?  'class="liActive"' : '').">
                    <img src='gfx/$page.png'><br/>$title
                </li>
            </a>";
        }
        ?>
    </ul>
</div>
<div class="containerBg">
    <div class="container">