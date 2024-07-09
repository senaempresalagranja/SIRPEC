<?php 


$siembra=$_POST["siembra"];
$producto=$_POST["producto"];
$cantidad=$_POST["cantidad"];
$fecha=$_POST["fecha"];
$hora=$_POST["hora"];
$Observacion=$_POST["Observacion"];
$siembra2=$_POST["siembra2"];

$loca="localhost";
$usuario="root";
$contra="";
$base="sirpec";



$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT * FROM `producto`";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);
$cantidad_actual=$fila[4];

$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="SELECT * FROM `alimentacion`  WHERE idAlimentacion=$siembra2";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);
$cantidad_anterior=$fila[3]+$cantidad_actual;

if ($cantidad_anterior<$cantidad) {
	echo "<script>

swal('Advertencia','no se puede sacar $cantidad porque solo hay $cantidad_anterior','warning')
	</script>";

}else{





$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="UPDATE `alimentacion` SET `idSiembra`=$siembra,`idProducto`=$producto,`cantAlimento`=$cantidad,`fecha`='$fecha',`hora`='$hora',`obseracion`='$Observacion' WHERE idAlimentacion=$siembra2";
$resource=mysqli_query($conexion,$query);
$cantidad=$cantidad_anterior-$cantidad;


$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="UPDATE `producto` SET `Cantidad`=$cantidad WHERE idProducto=$producto";
$resource1=mysqli_query($conexion,$query);


if ($resource==true && $resource1==true) {
	echo "<script>

swal('Exitoso','Registro Actualizado','success')
	</script>";
}else{


	echo "actualizacion no exitosa";
}


}


 ?>