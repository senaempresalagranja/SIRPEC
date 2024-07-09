<?php 

$id=$_POST["id"];

$connection=mysqli_connect("localhost","root","","sirpec");
$query="SELECT finca.nombreFinca, siembra.lote, numeroEstanque, cosecha.numeroPeces, cosecha.pesoPezEntero, cosecha.pesoPezEvicerado, cosecha.fecha, cosecha.hora, cosecha.observacion FROM cosecha INNER JOIN siembra_estanque ON cosecha.idSiembra_Estanque=siembra_estanque.idSiembra_Estanque INNER JOIN siembra ON siembra_estanque.idSiembra=siembra.idSiembra INNER JOIN estanque ON siembra_estanque.idEstanque=estanque.idEstanque INNER JOIN finca ON estanque.idFinca=finca.idFinca WHERE cosecha.idCosecha=$id";

$resource=mysqli_query($connection,$query);
$filas=mysqli_num_rows($resource);
if ($filas>0) {
	echo "<table class='table table-striped table-bordered' >
		<tr>
			<th>Finca</th>
			<th>Siembra</th>
			<th>Numero Estanque</th>
			<th>Numero Peces</th>
			<th>Peso Pez Entero</th>
			<th>Peso Pez Eviserado</th>
			<th>Fecha</th>
			<th>Hora</th>
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
			<td>".$fila[6]."</td>
			<td>".$fila[7]."</td>
			<td>".$fila[8]."</td>
			

				</tr>";

echo "</table>";
}
}
?>