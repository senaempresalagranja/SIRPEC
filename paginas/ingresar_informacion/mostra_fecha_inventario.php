<?php 

$producto_consulta=$_POST["producto_consulta"];
							$loca="localhost";
							$usuario="root";
							$contra="";
							$base="sirpec";



echo '<select name="" id="id_inventario">

<option value="Selecciona">Selecciona</option>
';
							$conexion=mysqli_connect($loca,$usuario,$contra,$base);
							$query="SELECT * FROM `inventario` WHERE `idProducto`=$producto_consulta order by fecha";
							$resource=mysqli_query($conexion,$query);
							while ($fila=mysqli_fetch_row($resource)) {
							echo "<option value='$fila[0]'>$fila[4]</option>";
							}

echo "</select>";
 ?>