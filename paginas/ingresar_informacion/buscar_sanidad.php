<?php 
$id_sanidad_consulta=$_POST["id_sanidad_consulta"];


     			$loca="localhost";
		       $usuario="root";
		       $contra="";
		       $base="sirpec";
		       $conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT * FROM `sanidad` WHERE idSanidad='$id_sanidad_consulta'";
$resource=mysqli_query($conexion,$query);

$fila=mysqli_fetch_row($resource);

echo "<script>

         var producto=document.getElementById('producto').value='$fila[1]';
		var cantidad=document.getElementById('cantidad').value='$fila[2]';
		var fecha=document.getElementById('fecha').value='$fila[3]';
		var observacion=document.getElementById('observacion').value='$fila[4]';
</script>";
 ?>