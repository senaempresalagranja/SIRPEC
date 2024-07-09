<?php 

$id=$_POST["id"];

$connection=mysqli_connect("localhost","root","","sirpec");
$query="SELECT producto.nombre, dosis, sanidad.fecha FROM sanidad INNER JOIN producto ON sanidad.idProducto=producto.idProducto WHERE sanidad.idProducto='$id'";

$resource=mysqli_query($connection,$query);
$filas=mysqli_num_rows($resource);
if ($filas>0) {
	echo "<table class='table table-striped table-bordered' >
		<tr>
			<th>Nombre Producto</th>
			<th>Dosis</th>
			<th>Fecha</th>

			</tr>"; 

while ($fila=mysqli_fetch_row($resource)) {


	echo "
		<tr>
			<td>".$fila[0]."</td>
			<td>".$fila[1]."</td>
			<td>".$fila[2]."</td>

				</tr>";


	}
	echo "</table>";
}
?>