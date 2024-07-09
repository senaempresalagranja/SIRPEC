<?php 

$id=$_POST["id"];

$connection=mysqli_connect("localhost","root","","sirpec");
$query="SELECT `idTraslado`,siembra.lote, siembra_estanque.idEstanque, estanque.numeroEstanque, `numerPece`, traslados.peso, `tamano`, traslados.fecha, traslados.observacion FROM `traslados` INNER JOIN siembra_estanque ON traslados.idSiembra=siembra_estanque.idSiembra INNER JOIN siembra ON siembra_estanque.idSiembra=siembra.idSiembra INNER JOIN estanque ON siembra.idEstanque=estanque.idEstanque WHERE traslados.idTraslado=$id";

$resource=mysqli_query($connection,$query);
$filas=mysqli_num_rows($resource);
if ($filas>0) {
	echo "<table class='table table-striped table-bordered' >
		<tr>
			<th>Siembra</th>
			
			<th>Estanque Emisor</th>
			<th>Estanque Receptor</th>
			<th>numero Peces</th>
			<th>Peso</th>
			<th>Tamaño</th>
			<th>Fecha</th>
			<th>Observacion</th>

			</tr>"; 

while ($fila=mysqli_fetch_row($resource)) {

	$query1="SELECT  `numeroEstanque` from estanque WHERE idEstanque=$fila[2]";

$resource1=mysqli_query($connection,$query1);

$estanque=mysqli_fetch_row($resource1);
	echo "
		<tr>
			<td>".$fila[0]."</td>
			
			<td>".$estanque[0]."</td>
			<td>".$fila[3]."</td>
			<td>".$fila[4]."</td>
			<td>".$fila[5]."</td>
			<td>".$fila[6]."</td>
			<td>".$fila[7]."</td>
			<td>".$fila[8]."</td>

				</tr>";

echo "</table>";
}
}
?>