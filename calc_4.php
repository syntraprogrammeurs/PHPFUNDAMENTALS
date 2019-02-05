<?php include('header.php'); ?>
<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/02/2019
 * Time: 11:35
 */

$a = 5;
$b = 2;

echo - $a . '<br>';
echo  $a + $b . '<br>';
echo  $a - $b . '<br>';
echo  $a * $b . '<br>';
echo  $a / $b . '<br>';
echo  $a ** $b . '<br>'; // werkt enkel vanaf php versie 5.6
echo pow($a,$b) . '<br>';
echo $a % $b . '<br>'; //rest van de deling.

/**voorbeeld fahrenheid naar celsius**/
$degF = 98.6;
$degC = ($degF-32) / 9*5;
echo $degF . ' Fahrenheit = ' . $degC . ' °C';

/**SHORTHAND NOTATIE BEREKENINGEN*/
$totaal = 15;
$totaal = $totaal + 2; //lange notatie
$totaal += 2;
$totaal -= 2;
$totaal /= 2;
$totaal *= 2;
echo $totaal .'<br>';

/*** ++nummer, nummer++, --nummer, nummer--**/
$nummer = 5;
echo $nummer . '<br>';
$nummer++;
echo $nummer . '<br>';
++$nummer;
echo $nummer . '<br>';
$resultaat = ++$nummer * 2;
echo 'resultaat is ' . $resultaat . '<br>';
echo $nummer . '<br>';


/**CONVERTEER MINUTEN NAAR UREN EN MINUTEN*/
$totaalaanminuten = 318;
$minuten = $totaalaanminuten % 60;
$hours = intdiv($totaalaanminuten, 60);

echo "De totale tijdsuur is $hours uren en $minuten minuten";
?>
<?php include('footer.php'); ?>
