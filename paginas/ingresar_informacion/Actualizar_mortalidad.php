<?php 
$loca="localhost";
$usuario="root";
$contra="";
$base="sirpec";

$siembra=$_POST["siembra"];
$fecha=$_POST["fecha"];
$Observacion=$_POST["Observacion"];
$Cantidad=$_POST["Cantidad"];
$id_fecha=$_POST["id_fecha"];




$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT * FROM siembra";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);
$cantidad_actual=$fila[5];


$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT * FROM mortalidad";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);
$cantidad_actual=$fila[3]+$cantidad_actual;





$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT * FROM siembra";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);
if ($Cantidad>$cantidad_actual) {
	echo "<script>

swal('Advertencia','no se pueden ingresar $cantidad_actual peces porque solo hay $fila[5]','warning')
	</script>";

}else{

$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="UPDATE `mortalidad` SET `idSiembra`=$siembra,`fecha`='$fecha',`Cantidad`=$Cantidad,`observacion`='$Observacion' WHERE idMortalidad='$id_fecha'";
$resource=mysqli_query($conexion,$query);


$Cantidad=$cantidad_actual-$Cantidad;



$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="UPDATE `siembra` SET `cantidAlevino`=$Cantidad WHERE idSiembra='$siembra'";
$resource1=mysqli_query($conexion,$query);



if ($resource==true && $resource1==true) {
	echo "<script>

swal('Exitoso','Registro Actualizado','success')
	</script>";
}else{
echo "Actualizacion no Exitoso";

}	

}




	
 ?>
