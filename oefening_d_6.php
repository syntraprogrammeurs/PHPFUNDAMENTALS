<?php include('header.php'); ?>

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

<?php include('footer.php'); ?>