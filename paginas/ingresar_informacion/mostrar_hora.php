<?php 

$loca="localhost";
$usuario="root";
$contra="";
$base="sirpec";
$fecha_consulta=$_POST["fecha_consulta"];
echo "Selecciona Hora Alimentacion
<select id='id_siembra2' >
<option value='Seleciona'>Seleciona</option>";
$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT * FROM `alimentacion` WHERE Fecha='$fecha_consulta' group by Hora";
$resource=mysqli_query($conexion,$query);
while ($fila=mysqli_fetch_row($resource)) {
	echo "<option value='$fila[0]'>$fila[5]</option>";
}


echo "</select>";
 ?>