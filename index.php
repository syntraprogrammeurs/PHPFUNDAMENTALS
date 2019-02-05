<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/02/2019
 * Time: 9:06
 */

/*** 1) variabelen ***/
/** geen speciale karakters, niet beginner met cijfer of underscore**/
/** CAMELCASE!**/
/*** string: schrijfwijze enkel of dubbel quotes ***/
/** getallen (integer en decimal) GEEN quotes**/

$voorNaam = 'Tom';
$voornaam = 'Tim';
$familieNaam = 'Vanhoutte';
$getal = 80;
$decimaalGetal = 12.34;

/****Weergave op het scherm *****/
/* concateneren of samenvoegen van variabelen voor weergave**/
echo $voorNaam . ' ' . $familieNaam . '<br>';
echo $voornaam, ' ', $familieNaam . '<br>';
echo $voornaam . '<br>';

print $voornaam . '<br>';

/** 2)SPECIALE WEERGAVEN ENKEL VOOR HET NEDERLANDS***/
/**ESCAPE CHARACTER BACKSLASH print eerste karakter erna af**/
$cursus1 = '\'s morgens bezig met backend';
$cursus2 = "'s morgens bezig met backend"; //zonder escape character
$cursus3 = '"\'s morgens bezig met backend"';

echo 'Titel van cursus 1: ' . $cursus1 . '<br>';
echo 'Titel van cursus 2: ' . $cursus2 . '<br>';
echo 'Titel van cursus 3: ' . $cursus3 . '<br>';

/** EOT (heredoc) ***/
$heredoc = <<< EOT
  "Alles 'wat ik hier kan tikken zijn $cursus1 of """ 3 quotes na elkaar.
EOT;

echo $heredoc . '<br>';;

/***CONCATENEREN shorthand methode**/

$frontend = 'De frontend cursus ';
$frontend .= 'is afgelopen ';
$frontend .= 'en vandaag starten we ';
$frontend .= 'met backend PHP. ';

echo $frontend;

?>
<!doctype html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
	      integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="#">PHP ROCKS</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
	        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
				   aria-haspopup="true" aria-expanded="false">
					Theorie
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="index.php">index.php</a>
					<a class="dropdown-item" href="arrays_2.php">arrays_2.php</a>
					<a class="dropdown-item" href="if_elseif_switch_3.php">if_elseif_switch_3.php</a>
					<a class="dropdown-item" href="calc_4.php">calc_4.php</a>
					<a class="dropdown-item" href="while_5.php">while_5.php</a>
					<a class="dropdown-item" href="for_loop_6.php">for_loop_6.php</a>
					<a class="dropdown-item" href="functies_7.php">functies_7.php</a>


				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown"
				   aria-haspopup="true" aria-expanded="false">
					Oefeningen
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown2">
					<a class="dropdown-item" href="oefening_a_1-2.php">oefening_a_1-2.php</a>
					<a class="dropdown-item" href="oefening_b_3.php">oefening_b_3.php</a>
					<a class="dropdown-item" href="oefening_c_5.php">oefening_c_5.php</a>
					<a class="dropdown-item" href="oefening_d_6.php">oefening_d_6.php</a>
					<a class="dropdown-item" href="oefening_e_7.php">oefening_e_7.php</a>
				</div>
			</li>

		</ul>

	</div>
</nav>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
</body>
</html>
