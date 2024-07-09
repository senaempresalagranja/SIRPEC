<?php 

$id=$_POST["id"];


$connection=mysqli_connect("localhost","root","","sirpec");
$query="SELECT producto.nombre, tipoproducto.nombre, producto.cantidad FROM producto INNER JOIN tipoproducto ON producto.idTipoProducto=tipoProducto.idTipoProducto WHERE producto.idProducto='$id' ";

$resource=mysqli_query($connection,$query);
$filas=mysqli_num_rows($resource);
if ($filas>0) {
	echo "<table class='table table-striped table-bordered' >
		<tr>
			<th>Nombre Producto</th>
			<th>Tipo Producto</th>
			<th>Cantidad</th>

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