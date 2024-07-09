<?php 

$nombre=$_POST["nombre"];
echo "<br>";

$connection=mysqli_connect("localhost","root","","sirpec");
$query="SELECT * FROM `finca` WHERE  nombreFinca like '%$nombre%'";

$resource=mysqli_query($connection,$query);
$filas=mysqli_num_rows($resource);
if ($filas>0) {
	echo "<table class='table table-striped table-bordered'>
		<tr>
			<th>Nombre Finca</th>
			<th>Estanques</th>
		</tr>"; 

while ($fila=mysqli_fetch_row($resource)) {
	$id_finca=$fila[0];
	$query1="SELECT nombreFinca, COUNT(idEstanque) as estanques FROM `finca` INNER JOIN estanque ON finca.idFinca=estanque.idFinca   WHERE  finca.idFinca=$id_finca";

$resource1=mysqli_query($connection,$query1);
$fila1=mysqli_fetch_row($resource1);
if ($fila1==true) {
	$numero_estanque=$fila1[1];
}else
{
	$numero_estanque=0;
}

	echo "
		<tr>
			<td>".$fila[1]."</td>
			<td>".$numero_estanque."</td>
		</tr>";
}
echo "</table>";
}else{

echo "No se encuentran registros de $nombre";
}
?>