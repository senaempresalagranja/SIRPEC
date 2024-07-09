<?php 

$producto=$_POST["producto"];
$novedad=$_POST["novedad"];

$connection=mysqli_connect("localhost","root","","sirpec");
$query="SELECT tipoproducto.nombre, producto.nombre, inventario.tipoNovedad, inventario.cantidad, inventario.fecha, inventario.observacion FROM inventario INNER JOIN producto ON inventario.idProducto=producto.idProducto INNER JOIN tipoproducto ON producto.idTipoProducto WHERE  inventario.idProducto='$producto' AND tipoNovedad='$novedad'";

$resource=mysqli_query($connection,$query);
$filas=mysqli_num_rows($resource);
if ($filas>0) {
	echo "<table class='table table-striped table-bordered' >
		<tr>
			<th>Tipo Producto</th>
			<th>Producto</th>
			<th>Novedad</th>
			<th>Cantidad</th>
			<th>Fecha</th>
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