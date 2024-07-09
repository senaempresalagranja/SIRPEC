<?php 

$id=$_POST["id"];

$connection=mysqli_connect("localhost","root","","sirpec");

$query="SELECT Siembra.lote, numeroEstanque, siembra.cantidAlevino, producto.nombre, cantAlimento, alimentacion.fecha, alimentacion.hora, `obseracion` FROM `alimentacion`INNER JOIN siembra ON alimentacion.idSiembra=siembra.idSiembra INNER JOIN estanque ON siembra.idEstanque=estanque.idEstanque INNER JOIN producto ON alimentacion.idProducto=producto.idProducto INNER JOIN finca ON estanque.idFinca=finca.idFinca WHERE alimentacion.idAlimentacion='$id'";

$resource=mysqli_query($connection,$query);
$filas=mysqli_num_rows($resource);
if ($filas>0) {
	echo "<table class='table table-striped table-bordered'>
		<tr>
			<th>Lote</th>
			<th>Numero Estanque</th>
			<th>Cantidad Alevino</th>
			<th>Producto</th>
			<th>Cantidad Alimento</th>
			<th>Fecha</th>
			<th>Hora</th>
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
			<td>".$fila[6]."</td>	
				</tr>";
}
echo "</table>";
}
?>