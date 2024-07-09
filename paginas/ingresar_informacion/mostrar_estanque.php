<?php 

$loca="localhost";
$usuario="root";
$contra="";
$base="sirpec";
$siembra=$_POST["siembra"];
$finca=$_POST["finca"];


$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT estanque.idEstanque, estanque.numeroEstanque FROM estanque  INNER JOIN finca ON estanque.idFinca=finca.idFinca WHERE finca.idFinca=$finca ";
echo "<select name='' class='form-control' id='estanque_traslado'>
<option value='Selecciona'>Selecciona</option>";
$resource=mysqli_query($conexion,$query);
while ($fila=mysqli_fetch_row($resource)) {
echo "<option value='$fila[0]'>$fila[1]</option>";
}

	echo "</select>";				
							




							?>