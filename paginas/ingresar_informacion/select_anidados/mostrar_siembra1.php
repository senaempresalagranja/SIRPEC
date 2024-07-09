<?php 


$estanque=$_POST["estanque"];


$loca="localhost";
$usuario="root";
$contra="";
$base="sirpec";


echo "<select name='' id='siembra' class='form-control' onclick='mostrar_estanque()'>";
echo "<option value='Selecciona'>Selecciona</option>";
$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT * FROM `siembra_estanque` WHERE idEstanque=$estanque";
$resource=mysqli_query($conexion,$query);
while ($fila=mysqli_fetch_row($resource)) {

echo "<option value='$fila[0]'>$fila[1]</option>";

}


echo "</select>";


 ?>