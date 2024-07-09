<?php 


$id_siembra=$_POST["id_siembra"];
$loca="localhost";
$usuario="root";
$contra="";
$base="sirpec";




$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT * FROM `mortalidad` WHERE idSiembra=$id_siembra";
$resource=mysqli_query($conexion,$query);

echo "Seleccione fecha de mortalidad";
echo "<select name='' onclick='mostrar_hora()' id='id_fecha'>
<option value='Selecciona'>Selecciona</option>";

while ($fila=mysqli_fetch_row($resource)) {
	echo "<option value='$fila[0]'>$fila[2]</option>";
}
echo "</select>";
 ?>