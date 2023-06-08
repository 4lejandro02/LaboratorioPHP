<?php

$NombreV = $_POST['txtv1'];
$AutosV = $_POST['txtv2'];
$PrecioAutosV = $_POST['txtv3'];
$salario = 737000;
$comision = 50000;

$venta = ($PrecioAutosV*$AutosV);
$porcen = ($venta/20); 
$comTotal = ($comision*$AutosV);
$salarioTotal = ($salario+$porcen+$comTotal);

echo "Nombre: ".$NombreV;
echo "<br>";
echo "salario: $".$salario;
echo "<br>";
echo "Autos Vendidos: ".$AutosV;
echo "<br>";
echo "Precio Total de autos vendidos: $".$venta;
echo "<br>";
echo "Comisión: $".$comision;
echo "<br>";
echo "Total de comisiones por autos vendidos: $".$comTotal;
echo "<br>";
echo "Porcentaje de venta al 5%: $".$porcen;
echo "<br>";
echo "Total ganancias vendedor: $".$salarioTotal;

?>