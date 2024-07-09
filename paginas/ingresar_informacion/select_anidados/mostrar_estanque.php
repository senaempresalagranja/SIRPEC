<?php 



$finca=$_POST["finca"];


$loca="localhost";
$usuario="root";
$contra="";
$base="sirpec";


echo "<select name='' id='estanque' class='form-control' onclick='colocar_siembra()'>";
echo "<option value='Selecciona'>Selecciona</option>";
$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT * FROM `estanque` WHERE idFinca=$finca";
$resource=mysqli_query($conexion,$query);
while ($fila=mysqli_fetch_row($resource)) {

echo "<option value='$fila[0]'>$fila[2]</option>";

}


echo "</select>";
 ?>