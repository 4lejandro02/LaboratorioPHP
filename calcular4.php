<?php

$arrayName[4] = 80;
$arrayName[9] = "Hola";
$arrayName[22] = 99;
$arrayName[156] = "Mundo";

$arreglos = array('arrayName[4]' => 80,'arrayName[9]' => "Hola", 'arrayName[22]' => 90,'arrayName[156]' => "Mundo");

foreach ($arreglos as $key => $value) {
	echo "El arreglo: $key tiene un valor de: $value";
	echo "<br>";
}
?>
