<?php include('header.php'); ?>
<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 5/02/2019
 * Time: 13:56
 */
/**datetime1 en datetime2 zijn OBJECT VARIABELEN*/

$datetime1 = new DateTime();
$datetime2 = new DateTime();

$europe = new DateTimeZone('Europe/Brussels');
$asia = new DateTimeZone('Asia/Tokyo');

$datetime1->setTimezone($europe);
$datetime2 ->setTimezone($asia);

echo $datetime1->format('Y-m-d H:i:s') . '<br>';
echo $datetime2->format('d-m-Y H:i:s') . '<br>';



?>
<?php include('footer.php'); ?>

