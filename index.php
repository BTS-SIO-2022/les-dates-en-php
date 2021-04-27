<?php

//var_dump($_SERVER);
echo date('d/m/Y');
echo '</br>';
echo date('H:i:s');
echo time();
$hour = getdate();
var_dump($hour);
$dateObject = new DateTime();
var_dump($dateObject);
date_default_timezone_set("Africa/Juba");
echo date('d-m-Y h:i:s'); 


/*
L'heure Unix ou heure Posix (aussi appelée Unix Timestamp) est une mesure du temps basée sur le nombre de secondes écoulées depuis le 1er janvier 1970 00:00:00 UTC, hors secondes intercalaires. Elle est utilisée principalement dans les systèmes qui respectent la norme POSIX1, dont les systèmes de type Unix, d'où son nom. C'est la représentation POSIX du temps.

Pour mesurer le temps, il faut choisir une origine :

L'origine de l'heure POSIX a été choisie comme étant le 1er janvier 1970 00:00:00 UTC10, cette date correspond à l'heure 0 de Posix, elle est appelée l'epoch Posix (et également epoch Unix).

En php, beaucoup de fonctions et d'outils sont disponibles pour les dates ety heures, qu'on retrouve dans la documentation :
Les dates : 
https://www.php.net/manual/fr/function.date.php
https://www.php.net/manual/fr/ref.datetime.php

Les heures : 
https://www.php.net/manual/fr/function.time.php
*/















/*
echo date("d/m/Y");
echo "</br>";
echo time();
echo "</br>";
echo date("H:i:s");
$hour = getdate();
*/
//var_dump($hour);
//$dateObject = new DateTime();
//var_dump($dateObject);
//date_default_timezone_set("Europe/Paris");
//echo date('d-m-Y h:i:s A');

?>