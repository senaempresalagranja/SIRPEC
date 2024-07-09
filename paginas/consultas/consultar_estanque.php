<?php 

$id=$_POST["id"];
echo "<br>";

$connection=mysqli_connect("localhost","root","","sirpec");
$query="SELECT finca.nombreFinca, numeroEstanque, totEspejoAgua, profundPromedio, volumAgua FROM estanque INNER JOIN finca ON estanque.idFinca=finca.idFinca WHERE finca.idFinca='$id'";

$resource=mysqli_query($connection,$query);
$filas=mysqli_num_rows($resource);
if ($filas>0) {
	echo "<table class='table table-striped table-bordered'>
		<tr>
			<th>Nombre Finca</th>
			<th>Estanques</th>
			<th>Espejo Agua (m3)</th>
			<th>Profundidad Promedio (m)</th>
			<th>Volumen Agua (m3)</th>
		</tr>"; 

while ($fila=mysqli_fetch_row($resource)) {
	echo "
		<tr>
			<td>".$fila[0]."</td>
			<td>".$fila[1]."</td>
			<td>".$fila[2]."</td>
			<td>".$fila[3]."</td>
			<td>".$fila[4]."</td>
		</tr>";
}
echo "</table>";
}
?>