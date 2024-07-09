<?php 

$fecha_consulta=$_POST["fecha_consulta"];
$loca="localhost";
$usuario="root";
$contra="";
$base="sirpec";

echo "<select name='' id='hora_consulta'>

<option value='Seleccion'>Seleccion</option>";
$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT * FROM `cosecha` WHERE `fecha`='$fecha_consulta'";
$resource=mysqli_query($conexion,$query);
while($fila=mysqli_fetch_row($resource)){

echo "<option value='$fila[0]'>$fila[3]</option>";

}

echo "</select>";
 ?>