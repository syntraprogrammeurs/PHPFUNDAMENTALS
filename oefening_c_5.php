<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/02/2019
 * Time: 10:14
 */

$boek = [
    'title' => 'De cursus backend developer 2019',
    'auteur' => 'Tom Vanhoutte',
    'cursist' => 'EIGEN NAAM',
    'beschrijving' => 'Stap voor stap cursus PHP'
];

$figuranten = [
    'Wiet Vanpimperzeel',
    'Kon Strukt',
    'Mis Poes',
    'An Toon',
    'Piet Luttig',
    'Ambe Tant'
];

$aantalFiguranten = 6;
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
	<title><?php echo $boek['title']; ?></title>
</head>
<body>
<p>OPGAVE:</p>
<p>Zorg dat er in een h1 en de title tag de titel van de cursus komt te staan</p>
<p>h2 bevat auteur</p>
<p>beschrijving in blockquote</p>
<p>implementeer bootstrap</p>
<p>zorg ervoor dat de figuranten in een list-group komen te staan.
   De titel is een h3 met de tekst figuranten</p>
<p>JE MAG NOG GEEN GEBRUIK MAKEN VAN EEN LOOP!</p>

<h1><?php echo $boek['title']; ?></h1>
<h2><?php echo $boek['auteur']; ?></h2>
<blockquote class="blockquote">
	<p class="mb-0"><?php echo $boek['beschrijving']; ?></p>
</blockquote>
<h3>Figuranten</h3>
<ul class="list-group">


		<?php
			$teller = 0;
			while($teller < $aantalFiguranten){?>
                <li class="list-group-item">
	                <?php
		                echo $figuranten[$teller];
	                    $teller++;
	                ?>
                </li>
                <?php }?>





</ul>
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



