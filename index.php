

<?php

$testo ='ciao prova';
echo $testo;

echo '<br>';


$lunghezza = strlen($testo);
echo $lunghezza;

echo '<br>';

$prova = $_GET["badword"];

$sost = str_replace("$prova", "***", $testo);
echo $sost;


?>
