<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 5/02/2019
 * Time: 14:55
 */

function tv_copyright($startYear){
    $currentYear = date('Y');
    if ($startYear < $currentYear){
        return "&copy; $startYear&ndash;$currentYear";

    }else{
        return "&copy; $startYear";
    }
}

?>

<?php  ?>
