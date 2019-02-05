<?php include('header.php'); ?>
<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/02/2019
 * Time: 12:03
 * Opgave: Reeks van 1 tot 10/
 * instellen van de teller
 */
/**FOR LOOP*/
$deelnemers = ['Tom', 'Tim', 'Ruben', 'Lore', 'Brent'];
$aantalDeelnemers = count($deelnemers);

$beschrijvingen =[
		'frontEnders' => 'het verzorgen van de brol van de designer',
		'backEnders' => 'de elite',
		'mySql' => 'database syntax'
]
?>

	<h1>De deelnemers</h1>
	<h2>for loop met min</h2>
	<?php

		for ($teller = $aantalDeelnemers-1;$teller >=0 ; $teller-- ){
			echo "<li>$deelnemers[$teller]</li>";
		}
		?>
	<h2>for loop met plus</h2>
	<?php

	    for ($teller = 0;$teller < $aantalDeelnemers ; $teller++ ){
	        echo "<li>$deelnemers[$teller]</li>";
	    }

	?>
	<h2>For each</h2>
	<h3>gewone array</h3>
		<ul>
			<?php
				foreach($deelnemers as $cursist){
	                echo "<li>$cursist</li>";
				}
			?>
		</ul>
	<h3>associatieve array</h3>
		<ul>
	        <?php
	        foreach($beschrijvingen as $key => $value){
	            echo "<li>$key is $value</li>";
	        }
	        ?>
		</ul>

<?php include('footer.php'); ?>
