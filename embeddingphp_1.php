<?php include('header.php'); ?>
<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/02/2019
 * Time: 9:41
 */

$boek = '"Cursus backend developer 2019"';
$auteur = "Ikke den dikke";
$leeftijd = 45;
?>

    <h1>
        <?php
            echo $boek;
        ?>
    </h1>
    <h2>
        <?php
            echo 'Auteur: ' . $auteur . ', Leeftijd: ' . $leeftijd;
        ?>
    </h2>
    <p>Hierboven werden variabelen dynamisch binnen php ingeladen</p>
<?php include('footer.php'); ?>