<?php

$NombreP = $_POST['txtv1'];
$PesoKg = $_POST['txtv2'];
$EstMetros = $_POST['txtv3'];

$Estx2 = ($EstMetros*$EstMetros);
$imc = round($PesoKg/$Estx2);

echo "Nombre del paciente: ".$NombreP;
echo "<br>";
echo "Peso: ".$PesoKg;
echo "<br>";
echo "Estatura: ".$EstMetros;
echo "<br>";
echo "El índice de masa corporal (IMC) es de: ".$imc;
echo "<br>";
if($imc < 18.5)
{
	echo "Su categoria es por debajo del peso";
}
else if($imc <= 24.9)
{
	echo "Su categoria es Saludable";
}
else if($imc <= 29.9)
{
	echo "Su categoria es Con sobrepeso";
}
else if($imc <= 39.9)
{
	echo "Su categoria es Obeso";
}
else if($imc >= 40)
{
	echo "Su categoria es Obesidad mórbida";
}