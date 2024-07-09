				<?php 


$loca="localhost";
$usuario="root";
$contra="";
$base="sirpec";

$id_finca=$_POST["id_finca"];

echo "Selecciona el estanque
<select id='id_estanque'>
<option name=''  value='Selecciona'>Selecciona</option>
";
$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT * FROM estanque where idFinca=$id_finca";
$resource=mysqli_query($conexion,$query);
while ($fila=mysqli_fetch_row($resource)) {
echo "<option name='' id='' value='$fila[0]'>$fila[2]</option>";
}

echo "</select>";

	?>