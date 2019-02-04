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
<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EMBEDDING PHP</title>
</head>
<body>
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

</body>
</html>
