<?php 


$loca="localhost";
$usuario="root";
$contra="";
$base="sirpec";
$siembra1=$_POST["siembra1"];


echo "Selecciona Fecha Alimentacion<select id='fecha_consulta' onclick='mostrar_hora()'>
<option value='Seleciona'>Seleciona</option>";
$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT * FROM `alimentacion` WHERE idSiembra=$siembra1 group by Fecha";
$resource=mysqli_query($conexion,$query);
while ($fila=mysqli_fetch_row($resource)) {
	echo "<option value='$fila[4]'>$fila[4]</option>";
}


echo "</select>";
 ?>