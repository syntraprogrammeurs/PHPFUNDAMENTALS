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
echo $voorNaam .' '. $familieNaam . '<br>';
echo $voornaam, ' ' ,$familieNaam . '<br>';
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
$frontend .=  'is afgelopen ';
$frontend .=  'en vandaag starten we ';
$frontend .=  'met backend PHP. ';

echo $frontend;

?>