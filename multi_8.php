<?php include('header.php'); ?>
<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 5/02/2019
 * Time: 13:11
 */

//MULTIDIMENSIONELE ASSOCIATIEVE ARRAY//

$mijnVrienden = [
    ['voornaam' => 'Donald', 'familienaam' => 'Dumb'],
    ['voornaam' => 'Tim', 'familienaam' => 'Vanhoutte'],
    ['voornaam' => 'Joeri', 'familienaam' => 'Dedonder'],
    ['voornaam' => 'Hilary', 'familienaam' => 'Clinton'],
    ['voornaam' => 'Donald', 'familienaam' => 'Duck'],
    ['voornaam' => 'Onnozel', 'familienaam' => 'Manneke']
];
/*sort($mijnVrienden);*/
/** als de variabele a last < de variabele b last dan kom dat op -1**/
/** asl de variabele a last = de variabele b last dan komt dat op 0 */
/** als de variabele a last > de variabele b last dan komt dat op +1 ***/

/**  PHP 7**/

/*usort($mijnVrienden, function($a, $b){
	return [$a['familienaam'], $a['voornaam']] <=> [$b['familienaam'], $b['voornaam']];
});*/


/** voor PHP 7**/
usort($mijnVrienden, function($a,$b){
	if([$a['familienaam'], $a['voornaam']] < [$b['familienaam'], $b['voornaam']]){
        return -1;
    }elseif([$a['familienaam'], $a['voornaam']] > [$b['familienaam'], $b['voornaam']]){
        return 1;
    }else{
        return 0;
    }
});

?>

    <h1>Gebruiker gedefinieerde sortering</h1>
    <h2>GEBRUIK VAN IMPLODE FUNCTIONALITEIT</h2>
    <ul>
		<?php

			foreach($mijnVrienden as $vriend){
				echo '<li>' . implode(' ', $vriend) . '</li>';
			}
		?>
    </ul>
<?php include('footer.php'); ?>
