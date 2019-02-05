<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/02/2019
 * Time: 10:57
 */

$naam = 'Tom Vanhoutte';
$dag = 'maandag';

/***if - elsif -else**/
if($naam == 'Tom Vanhoutte' && $dag == 'maandag'){
    echo $naam .' is inderdaad mijn naam en de dag is ' . $dag .'<br>';
} elseif($naam == 'Tim'){
    echo "Hallo ik ben " . $naam .'<br>';
}else{
    echo 'Wie ben ik, ik weet het niet! <br>';
}

/** INTENARY OPERATOR (shorthand notatie voor if else)**/
if($naam == 'Tom Vanhoutte' && $dag == 'maandag'):
    echo $naam .' is inderdaad mijn naam en de dag is ' . $dag .'<br>';
elseif($naam == 'Tim'):
    echo "Hallo ik ben " . $naam .'<br>';
else :
    echo 'Wie ben ik, ik weet het niet!';
endif;

$antwoord = 100;
$resultaat = ($antwoord == 42) ? 'ik kan full stack developer worden' : 'Blijven oefenen';

echo 'Resultaat: ' . $resultaat . '<br>';

/**SWITCH**/
$naam = 'Tim';
switch($naam){
    case 'Tom Vanhoutte':
        echo 'dit is Tom Vanhoutte';
        break;
    case  'Tim':
        echo 'Dit is Tim';
        break;
    default: //falback als alle andere cases niet voldoen.
        echo 'dit is een andere naam';
}

?>


