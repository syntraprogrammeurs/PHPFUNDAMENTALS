<?php include('header.php'); ?>
<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/02/2019
 * Time: 9:50
 */
/**ARRAYS RECHTE HAAKJES!***/
$namen= ['Tom Vanhoutte', 'Mercedes', 'Torhout'];

$namen[] = 'Cursist';
$namen[] = 'Full stack developer';

/**weergaven van arrays (objecten)**/
print_r($namen);
/*var_dump($namen);*/

/** ASSOCIATIEVE ARRAYS **/
$beschrijving = [
    'Cursist' => 'wij zijn full stack developers',
    'Tom' => 'Is de docent',

];

   $beschrijving['Cursist1'] = 'Neville';
    $beschrijving[] = 'Tom';


echo "Goedemorgen {$beschrijving['Cursist']}";

var_dump($beschrijving);

?>
<?php include('footer.php'); ?>
