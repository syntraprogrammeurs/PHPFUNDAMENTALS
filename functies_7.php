<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/02/2019
 * Time: 14:23
 * FUNCTIES*/

$version = phpversion();
echo $version;

$name = 'TOM';
echo $name = strtolower($name);
echo strtoupper($name);

$name = ucfirst(strtolower($name));
echo $name;

/*** ZELF GESCHREVEN FUNCTIES **/
unset($name);
if(isset($name)){
    echo "true";

}else{
    echo "false";
}

function tv_converteerNaarMinuten($seconden){
    $sec = $seconden % 60;

    if(function_exists('intdiv')){
        $min = intdiv($seconden, 60);
    }else{
    	$min = ($seconden - $sec)/60;
    }

    $sec = abs($sec);

    $sec = ($sec < 10) ? '0' . $sec : $sec;

    return "$min:$sec";

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>functie zelfgeschreven</title>

</head>
<body>
    <p><?php echo tv_converteerNaarMinuten(9);  ?></p>
</body>
</html>


