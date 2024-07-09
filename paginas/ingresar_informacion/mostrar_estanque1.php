<?php 

$loca="localhost";
$usuario="root";
$contra="";
$base="sirpec";
$siembra1=$_POST["siembra1"];

echo "selecciona estanque al que fue traslado la siembra";
$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT `idTraslado`,numeroEstanque FROM `traslados` INNER JOIN estanque ON traslados.idEstanque=estanque.idEstanque WHERE `idSiembra`=$siembra1";
echo "<select name='' class='form-control' id='id_traslado'>
<option value='Selecciona'>Selecciona</option>";
$resource=mysqli_query($conexion,$query);
while ($fila=mysqli_fetch_row($resource)) {
echo "<option value='$fila[0]'>$fila[1]</option>";
}

	echo "</select>";				
							




							?>