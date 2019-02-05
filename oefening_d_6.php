<!doctype html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
	      integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<title>Vermeningvuldigingstabel</title>
</head>
<body>
<table class="table table-striped table-dark">
    <?php
    //EERSTE RIJ HEADERS

    $tafel = 10;

    echo '<thead class="thead-dark">';
    echo '<tr>';
    echo '<th scope="col">&nbsp;</th>';

    for ($col = 1; $col <= $tafel; $col++):
        echo '<th scope="col">' . $col . '</th>';
    endfor;

    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';


    //RESTERENDE RIJEN
    for ($row = 1, $col = 1; $row <= $tafel; $row++):

        echo '<tr>';
        //de eerste cel is een table header
	        if ($col == 1) {
	            echo '<th class="text-primary" scope="row">'. $row . '</th>';
	        }
	        while ($col <= $tafel):
	            echo '<td>' . $row * $col++ . '</td>';
	        endwhile;
        echo '<tr>';


        // reset $col op het einde van elke rij, en begin opnieuw te tellen
        $col = 1;
    endfor;
    echo '</tbody>';
    ?>
</table>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
</body>
</html>
