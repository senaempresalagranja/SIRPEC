<?php 
     $loca="localhost";
		       $usuario="root";
		       $contra="";
		       $base="sirpec";

$id_producto=$_POST["id_producto"];
$Fecha_1=$_POST["Fecha_1"];
$Fecha_2=$_POST["Fecha_2"];


echo "<select name='' id='id_sanidad_consulta' onclick='buscar_sanidad()'>
<option value='Selecciona'>Selecciona</option>

";

		       $conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT * FROM `sanidad` WHERE idProducto=$id_producto AND fecha BETWEEN '$Fecha_1' AND '$Fecha_2'";
$resource=mysqli_query($conexion,$query);
while($fila=mysqli_fetch_row($resource)){



echo "<option value='$fila[0]'>Dosis($fila[2])-Fecha($fila[3])</option>";

}




 ?>