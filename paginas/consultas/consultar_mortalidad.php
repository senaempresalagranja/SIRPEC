<?php 

$id=$_POST["id"];

$connection=mysqli_connect("localhost","root","","sirpec");
$query="SELECT finca.nombreFinca, siembra.lote,estanque.numeroEstanque,mortalidad.fecha, mortalidad.Cantidad, mortalidad.observacion  FROM mortalidad INNER JOIN siembra_estanque ON mortalidad.idSiembra=siembra_estanque.idSiembra INNER JOIN siembra ON siembra_estanque.idSiembra=siembra.idSiembra INNER JOIN estanque ON siembra.idEstanque=estanque.idEstanque INNER JOIN finca ON estanque.idFinca=finca.idFinca WHERE mortalidad.idMortalidad='$id'";

$resource=mysqli_query($connection,$query);
$filas=mysqli_num_rows($resource);
if ($filas>0) {
	echo "<table class='table table-striped table-bordered'>
		<tr>
			<th>Finca</th>
			<th>Siembra</th>
			<th>Estanque</th>
			<th>Fecha</th>
			<th>Cantidad</th>
			<th>Observacion</th>
		</tr>"; 

while ($fila=mysqli_fetch_row($resource)) {


	echo "
		<tr>
			<td>".$fila[0]."</td>
			<td>".$fila[1]."</td>
			<td>".$fila[2]."</td>
			<td>".$fila[3]."</td>
			<td>".$fila[4]."</td>
			<td>".$fila[5]."</td>


				</tr>";

}
echo "</table>";
}
?>