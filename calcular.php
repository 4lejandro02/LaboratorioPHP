<?php

$Nota1 = $_POST['txtn1'];
$Nota2 = $_POST['txtn2'];
$Nota3 = $_POST['txtn3'];
$Examen = $_POST['txtparcial'];
$Trabajo = $_POST['txtfinal'];

$promedionotas = (($Nota1+$Nota2+$Nota3)/3)*0.35;
echo "El promedio de las 3 notas: ".$promedionotas;
echo "<br>";

$promedioExamen = ($Examen * 0.35);
echo "El promedio de examen: ".$promedioExamen;
echo "<br>";

$promediotrabajo = ($Trabajo * 0.30);
echo "El promedio del trabajo es: ".$promediotrabajo;
echo "<br>";

$Notafinal = $promedionotas+$promedioExamen+$promediotrabajo;
echo "La nota final del alumno es: ".$Notafinal;



?>