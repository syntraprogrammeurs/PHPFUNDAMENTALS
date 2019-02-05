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
/**WHILE (DO)*/
$teller = 0;

while($teller < 10){
    $teller++;
    if($teller % 2){
        continue;
    }

    echo $teller . '<br>';

    if($teller == 6){
        break;
    }
}
/**DO WHILE*/
echo 'DO WHILE <br>';
$teller = 101;
do{
    $teller++;
    echo $teller . '<br>';
}while($teller < 10);
?>
<?php include('footer.php'); ?>
