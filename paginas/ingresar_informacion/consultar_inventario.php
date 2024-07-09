<?php 

$id_inventario=$_POST["id_inventario"];
							$loca="localhost";
							$usuario="root";
							$contra="";
							$base="sirpec";

$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT * FROM `inventario` WHERE `idInventario`=$id_inventario";
							$resource=mysqli_query($conexion,$query);
							$fila=mysqli_fetch_row($resource);
$fila[3]=$fila[3]/40;

							echo "<script>


		var producto=document.getElementById('producto').value='$fila[1]';
		var novedad=document.getElementById('novedad').value='$fila[2]';
		var cantidad=document.getElementById('cantidad').value='$fila[3]';
		var Fecha=document.getElementById('Fecha').value='$fila[4]';
		var Observacion=document.getElementById('Observacion').value='$fila[5]';

							</script>";



 ?>