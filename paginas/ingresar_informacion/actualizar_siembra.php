<?php 



$id_siembra=$_POST["id_siembra"];
$especie=$_POST["especie"];
$finca=$_POST["finca"];
$estanque=$_POST["estanque"];
$lote=$_POST["lote"];
$cantidad_alevines=$_POST["cantidad_alevines"];
$densidad=$_POST["densidad"];
$biomasa=$_POST["biomasa"];
$fecha=$_POST["fecha"];
$hora=$_POST["hora"];
$peso=$_POST["peso"];
$observaciones=$_POST["observaciones"];






$loca="localhost";
$usuario="root";
$contra="";
$base="sirpec";

$conexion=mysqli_connect($loca,$usuario,$contra,$base);
$query="

UPDATE `siembra` SET `idEspecie`=$especie,`idFinca`=$finca,`idEstanque`=$estanque,`lote`=$lote,`cantidAlevino`=$cantidad_alevines,`densidad`=$densidad,`bioMasa`=$biomasa,`fecha`=$fecha,`hora`=$hora,`peso`=$peso,`observacion`=$observaciones WHERE `idSiembra`=$id_siembra";

$resource=mysqli_query($conexion,$query);
$query1="UPDATE `siembra_estanque` SET `idEstanque`=$estanque WHERE idSiembra='$id_siembra'";
$resource1=mysqli_query($conexion,$query1);




if ($resource==true && $resource1==true) {
	echo "<script>

swal('Exitoso','Registro Actualizado','success')
	</script>";
}else{

	echo "error en el actualizacion";
}





 ?>