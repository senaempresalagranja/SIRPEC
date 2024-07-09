<?php 

$id=$_POST["id"];

$connection=mysqli_connect("localhost","root","","sirpec");
$query="SELECT nombreComun, nombreCientifico FROM especie  where especie.idEspecie='$id'";

$resource=mysqli_query($connection,$query);
$filas=mysqli_num_rows($resource);
if ($filas>0) {
	echo "<table class='table table-striped table-bordered' >
		<tr>
			<th>nombre comun</th>
			<th>nombre cientifico</th>

			</tr>"; 

while ($fila=mysqli_fetch_row($resource)) {


	echo "
		<tr>
			<td>".$fila[0]."</td>
			<td>".$fila[1]."</td>

				</tr>";

echo "</table>";
}
}
?>