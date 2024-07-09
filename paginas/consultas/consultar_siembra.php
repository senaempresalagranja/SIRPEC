<?php 

$id=$_POST["id"];

$connection=mysqli_connect("localhost","root","","sirpec");
$query="SELECT finca.nombreFinca, especie.nombreComun, estanque.numeroEstanque,  `cantidAlevino`, `densidad`, `bioMasa`, `fecha`, `hora`, `peso`, siembra.observacion FROM siembra INNER JOIN siembra_estanque ON siembra.idSiembra=siembra_estanque.idSiembra INNER JOIN estanque ON siembra_estanque.idEstanque=estanque.idEstanque INNER JOIN especie ON siembra.idEspecie=especie.idEspecie INNER JOIN finca ON estanque.`idFinca`=finca.idFinca WHERE siembra.idSiembra=$id";

$resource=mysqli_query($connection,$query);
$filas=mysqli_num_rows($resource);
if ($filas>0) {
	echo "<table class='table table-striped table-bordered' >
		<tr>
			<th>Finca</th>
			<th>Especie</th>
			<th>Numero Estanque</th>
			<th>Cantidad Alevin</th>
			<th>Densidad</th>
			<th>Biomasa</th>
			<th>Fecha</th>
			<th>Hora</th>
			<th>Peso</th>
			
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

}
echo "</table>";
}
?>