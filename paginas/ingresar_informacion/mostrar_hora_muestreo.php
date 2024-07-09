<?php 


$id_fecha=$_POST["id_fecha"];
$loca="localhost";
$usuario="root";
$contra="";
$base="sirpec";



$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT * FROM `muestreo` WHERE fecha='$id_fecha'";
$resource=mysqli_query($conexion,$query);

echo "Seleccione Hora de muestreo";
echo "<select name=''  id='id_hora'>
<option value='Selecciona'>Selecciona</option>";

while ($fila=mysqli_fetch_row($resource)) {
	echo "<option value='$fila[0]'>$fila[2]</option>";
}
echo "</select>";




 ?>