<?php 

$id=$_POST["id"];

echo "<br>";
$connection=mysqli_connect("localhost","root","","sirpec");
$query="SELECT nombreFinca, COUNT(idEstanque) as estanques FROM `finca` INNER JOIN estanque ON finca.idFinca=estanque.idFinca WHERE  finca.idFinca='$id' ";

$resource=mysqli_query($connection,$query);
$filas=mysqli_num_rows($resource);
if ($filas>0) {
	echo "<table class='table table-striped table-bordered'>
		<tr>
			<th>Nombre Finca</th>
			<th>Estanques</th>
		</tr>"; 

while ($fila=mysqli_fetch_row($resource)) {
	echo "
		<tr>
			<td>".$fila[0]."</td>
			<td>".$fila[1]."</td>
		</tr>";
}
echo "</table>";
}
?>