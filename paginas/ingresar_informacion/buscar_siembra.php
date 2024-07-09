<?php 
$loca="localhost";
$usuario="root";
$contra="";
$base="sirpec";

$idEstanque=$_POST["buscar_estanque"];
$buscar_fecha_inicio=$_POST["buscar_fecha_inicio"];
$buscar_fecha_final=$_POST["buscar_fecha_final"];

$conexion=mysqli_connect($loca,$usuario,$contra,$base);

$query="SELECT * FROM `siembra` WHERE idEstanque='$idEstanque' AND fecha BETWEEN '$buscar_fecha_inicio'   AND '$buscar_fecha_final' ";

$resource=mysqli_query($conexion,$query);


echo "<select name='' class='form-control' onclick='consultar_siembra()' id='id_siembra'>";
echo "<option name=''     id='' value='Selecciona'>Selecciona</option>";

while ($fila=mysqli_fetch_row($resource)) {
echo "<option name=''     id='' value='$fila[0]'>$fila[0] . 'Siembra'</option>";
}

echo "</select";

 ?>