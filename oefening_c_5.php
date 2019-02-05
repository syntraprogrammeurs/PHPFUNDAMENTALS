<?php include('header.php'); ?>
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
<?php include('footer.php'); ?>



