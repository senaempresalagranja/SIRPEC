<?php 

require '../conexion_login/inicio_sesion.php';
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../../css/iconos.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="../../js/sweetalert.js"></script>


<link rel='stylesheet prefetch' href='../../iconn/css/font-awesome.min.css'>
<link rel="stylesheet" href="../../iconn/css/style.css">
<link rel="shortcut icon" type="image/x-icon" href="../../img/sirpec.ico" />

<link rel="stylesheet" type="text/css" href="../../css/normalize.css"/>         
<link rel="stylesheet" type="text/css" href="../../css/component.css" />
<link rel="stylesheet" type="text/css" href="../../css/sweetalert.css" />
<script src="../../js/modernizr.custom.js"></script>    
<title>Insumo</title> 
</head>
<body>

<div class="uset">
<div class="icl">
<a class="icon icon-user" href="#"><?php echo "$fila[1]"; ?></a>
</div>
</div>

<div class=" header">
	<div class="cuadrito">
		
	</div>
<img src="../../img/img_logo3.png" class="logo" alt="">
				<h1 class=""><a href="#" id="trigger" class="icon icon-menu2 icono_menu"></a></h1>
</div>


			<div class="mp-pusher" id="mp-pusher">

				<!-- mp-menu -->
				<nav id="mp-menu" class="mp-menu">
					<div class="mp-level">
						<h2 class="icon icon-world">Menu</h2>
						<ul>
						<li><a class="icon icon-home" href="../inicio/index.php">  Inicio</a></li>
							<li class="icon icon-arrow-left">
								<a class="icon icon-pencil2" href="#">  Registrar Datos</a>
								<div class="mp-level">
									<h2 class="icon icon-pencil2">  Registrar Datos</h2>
									<a class="mp-back " href="#">Atras</a>
									<ul>
										<li class="">
											<a class="icon icon-pencil" href="../ingresar_informacion/ingresar_finca.php">  Fincas</a>
											<a class="icon icon-pencil" href="../ingresar_informacion/ingresar_estanque.php">  Estanque</a>
											<a class="icon icon-pencil" href="../ingresar_informacion/ingresar_especie.php">  Especie</a>
											<a class="icon icon-pencil" href="../ingresar_informacion/ingresar_siembra.php">  Siembra</a>
			
										</li>
									</ul>
								</div>
							</li>
							<li class="icon icon-arrow-left">
								<a class="icon icon-book" href="#">   Produccion</a>
								<div class="mp-level">
									<h2 class="icon icon-book">  Produccion</h2>
									<a class="mp-back" href="#">Atras</a>
									<ul>
										<li><a class="icon  icon-file-text2" href="../ingresar_informacion/ingresar_traslado.php">  Traslado</a></li>
										<li><a class="icon  icon-file-text2" href="../ingresar_informacion/ingresar_alimentacion.php">  Alimentacion</a></li>
										<li><a class="icon  icon-file-text2" href="../ingresar_informacion/ingresar_muestreo.php">  Muestreo</a></li>
										<li><a class="icon  icon-file-text2" href="../ingresar_informacion/ingresar_mortalidad.php">  Mortalidad</a></li>
										<li><a class="icon  icon-file-text2" href="../ingresar_informacion/ingresar_cosecha.php">  Cosecha</a></li>
									</ul>
								</div>
							</li>
							<li class="icon icon-arrow-left">
								<a class="icon icon-plus" href="#">   Sanidad</a>
								<div class="mp-level">
									<h2 class="icon icon-plus">  Sanidad</h2>
									<a class="mp-back" href="#">Atras</a>
									<ul>
										<li><a class="icon  icon-file-text2" href="../ingresar_informacion/ingresar_sanidad.php">  Tratamiento</a></li>
									</ul>
								</div>
							</li>
							<li class="icon icon-arrow-left">
								<a class="icon icon-list" href="#">   Inventario</a>
								<div class="mp-level">
									<h2 class="icon icon-list">  Inventario</h2>
									<a class="mp-back" href="#">Atras</a>
									<ul>
										<li><a class="icon  icon-book" href="../ingresar_informacion/ingresar_insumo.php">  Insumo</a></li>
									</ul>
								</div>
							</li>
							<li><a class="icon icon-table" href="../simulador_sirpec/simulador.php">  Simulador</a></li>
							<li class="icon icon-arrow-left">
								<a class="icon icon-search" href="#">   Consulta</a>
								<div class="mp-level">
									<h2 class="icon icon-search">  Consulta</h2>
									<a class="mp-back" href="#">Atras</a>
									<ul>
										<li><a class="icon  icon-books" href="../consultas/buscar_alimentacion.php">  Alimentacion</a></li>
										<li><a class="icon  icon-books" href="../consultas/buscar_cosecha.php">  Cosecha</a></li>
										<li><a class="icon  icon-books" href="../consultas/buscar_especie.php">  Especie</a></li>
										<li><a class="icon  icon-books" href="../consultas/buscar_estanque.php">  Estanque</a></li>
										<li><a class="icon  icon-books" href="../consultas/buscar_finca.php">  Finca</a></li>
										<li><a class="icon  icon-books" href="../consultas/buscar_inventario.php">  Inventario</a></li>
										<li><a class="icon  icon-books" href="../consultas/buscar_mortalidad.php">  Mortalidad</a></li>
										<li><a class="icon  icon-books" href="../consultas/buscar_producto.php">  Producto</a></li>
										<li><a class="icon  icon-books" href="../consultas/buscar_sanidad.php">  Sanidad</a></li>
										<li><a class="icon  icon-books" href="../consultas/buscar_siembra.php">  Siembra</a></li>
										<li><a class="icon  icon-books" href="../consultas/buscar_traslado.php">  Traslado</a></li>
									</ul>
								</div>
							</li>
							<li><a class="icon icon-cogs" href="../configuracion/configurar.php">  Configuracion</a></li>
							<li class="icon icon-arrow-left">
								<a class="icon icon-cloud" href="#">   Copia de Seguridad</a>
								<div class="mp-level">
									<h2 class="icon icon-cloud">  Copia de Seguridad</h2>
									<a class="mp-back" href="#">Atras</a>
									<ul>
										<li><a class="icon  icon-book" href="../backup_base_datos/index2.php">  Copia Base Datos</a></li>
									</ul>
								</div>
							</li>
							<li><a class="icon icon-question" href="#">  Ayuda</a></li>
							<li><a class="icon icon-switch" href="../conexion_login/cerrar_sesion.php" >Cerrar Sesion</a></li>
						</ul>
							
					</div>
				</nav>
				<!-- /mp-menu -->
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<!-- ============================================================================== -->
		<h1 class="help-block text-center ">Ingresar Insumo</h1>
	</div>
		<div class="container">
	
	<form action="exportaciones/exportar_finca.php" method="POST" id="formulario" >

<br>
<br>
<br>
<br>
			<div class="row">
			<div class="col-md-5"></div>
				<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                  <div class="form-group">
				    <div  id="elemento_telefono">
				      <label for="">Seleccione Producto</label><br>
					  <select name="producto_in" class="form-control" onclick="mostrar_producto()" id="producto">
	                    <option value="Selecciona">Selecciona</option>

						<?php 
							$loca="localhost";
							$usuario="root";
							$contra="";
							$base="sirpec";




							$conexion=mysqli_connect($loca,$usuario,$contra,$base);
							$query="SELECT * FROM producto";
							$resource=mysqli_query($conexion,$query);
							while ($fila=mysqli_fetch_row($resource)) {
							echo "<option name='' id='' value='$fila[0]'>$fila[2]</option>";
							}

						?>
					  </select>
							
						</div>
					</div>
			</div>
			</div>


			<div class="row">
			<div class="col-md-5"></div>
				<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					<div class="form-group">
						<div  id="elemento_nombre">

							<label for="">Tipo Novedad</label>
						<select name="novedad" id="novedad" class="form-control">
						<option value="Selecciona">Selecciona</option>
							<option value="Entrada">Entrada</option>
							<option value="Salida">Salida</option>
						</select>
						</div>
					</div>
				</div>
				</div>

 


 <div class="row">

 <div class="col-md-5"></div>
				<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					<div class="form-group">
						<div  id="elemento_telefono">

							<label for="">Cantidad </label>
							<input type="number" placeholder="" name='cantidad' id="cantidad" class="form-control">
							
						</div>
					</div>
				</div>
				</div>

				<div class="row">
				<div class="col-md-5"></div>
				<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					<div class="form-group">
						<div  id="elemento_tamaño">

							<label for="">Fecha</label>
							<input type="button" placeholder="" name="fecha" id="Fecha" class="form-control">
						</div>
					</div>
				</div>
				</div>

				<div class="row">
				<div class="col-md-5"></div>
				<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					<div class="form-group">
						<div  id="elemento_tamaño">

							<label for="">Observacion</label>
							<input type="text" placeholder="" name="Observacion" id="Observacion" class="form-control">
						</div>
					</div>
				</div>
				</div>

				<div class="col-md-10">
				<br>
				<br>
                <div class="col-md-5"></div>
                <a onclick="enviar()" title="Registrar Insumo" class="icon-button floppy-o"><i class="fa fa-floppy-o"></i><span></span></a>
				<a onclick="nuevo_registro()" title="Nuevo Registro" class="icon-button share"><i class="fa fa-share"></i><span></span></a>
				<a onclick="Actualizar()" title="Actualizar Insumo" class="icon-button refresh"><i class="fa fa-refresh"></i><span></span></a>
				<a onclick="consultar_modal()" title="Consultar Insumo" class="icon-button search"><i class="fa fa-search"></i><span></span></a>
				<a title="Exportar Insumo  Excel" onclick="exportar_excel()" class="icon-button file-excel-o"><i class="fa fa-file-excel-o"></i><span></span></a>
                <a onclick="exportar()" title="Exportar Insumo PDF" class="icon-button file-pdf-o"><i class="fa fa-file-pdf-o"></i><span></span></a>
                </div>

                
		<script src="../js/index.js"></script>

<div class="col-md-12" id="contenedor">
	
</div>

	<div class="modal fade" id="myModal" role="dialog">
 
<div class="modal-dialog">
      <!-- Modal content-->
 
<div class="modal-content">
 
<div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
 
<h1 class="modal-title text-center">Consultar Insumo</h1>
 
       </div>
 
 
<div class="modal-body">
<div class="container-fluid">

<div class="row">
		<div class="col-md-12">
			<div class="form-group"><label for="">Buscar Insumo</label>

					  <select name="" class="form-control" onclick="mostrar_fecha_producto()" id="producto_consulta">
	                    <option value="Selecciona">Selecciona</option>

						<?php 
							$loca="localhost";
							$usuario="root";
							$contra="";
							$base="sirpec";




							$conexion=mysqli_connect($loca,$usuario,$contra,$base);
							$query="SELECT * FROM producto";
							$resource=mysqli_query($conexion,$query);
							while ($fila=mysqli_fetch_row($resource)) {
							echo "<option name='' id='' value='$fila[0]'>$fila[2]</option>";
							}

						?>
					  </select>

					  <div id="contenedor_fecha">
					  	
					  </div>
			</div>
		</div>
				<div class="col-xs-1 col-md-1 col-lg-2">
					<a href="#" class="consultar" title="Consultar Lote"  data-dismiss="modal" onclick="consultar()"><h1 class="iconn negro icon-search"></h1></a>
				</div>

	</div>

</div>
       </div>
 
 
<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        </div>


</div>
</div>
</div> 	

</body>
<style>

.icono_menu{
	position: relative;
	z-index: 2;
	/*left: -100%;*/
	top: -150px;	
	left: 20px;
}
a{
	text-decoration: none;
	color:#fff;
}
a:hover{
	text-decoration: none;
	color: #000;
}

.logo{
	position: relative;
	display: block;
	z-index: 1;
	left: 93%;
	width: 90px	;
	height: 70px;
	top: -70px;
}

.uset{
	width: 100%;
	background: #1358BF;
	height: 10px;
	z-index: 0;
}

.icl{
	position: relative;
	max-width: 100px;
	width: 100%;
	background: #1358BF;
	height: 10px;
	left: 630px;
	z-index: 0;
}
	
.header{
	width: 100%;
	background: #1358BF;
	height: 70px;
	z-index: 0;
}

.cuadrito{
	left: 93%;	;
position: relative;
	 width: 92px; 
     height: 70px; 
     border: 2px solid #fff; 
     background: #fff;
     -moz-border-radius: 100px 100px 0 0;
     -webkit-border-radius: 100px 100px 0 0;
     border-radius: 100px 100px 0 0;
}
.iconn{
	font-size: 200%;
}
.negro{
	color:black;
}
.verde{
	color:green;
}
.azul{
	color:blue;
}
</style>

		<script src="../../js/classie.js"></script>
		<script src="../../js/mlpushmenu.js"></script>
		<!-- <script src="../../js/jquery.js"></script> -->
		<script>
			new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ), {
				type : 'cover'
			} );

			function consultar_modal() {
	$("#myModal").modal("show");
}

$(document).ready(inicio);


	function inicio(){

	  
	var hoy = new Date();
	var dd = hoy.getDate();
	var mm = hoy.getMonth()+1; //hoy es 0!
	var yyyy = hoy.getFullYear();

	if(dd<10) {
	    dd='0'+dd
	} 

	if(mm<10) {
	    mm='0'+mm
	} 

	hoy = yyyy+'/'+mm+'/'+dd;


	var Fecha=document.getElementById('Fecha').value=hoy;



	  
	};

	function enviar() {
		var producto=document.getElementById("producto").value;
		var novedad=document.getElementById("novedad").value;
		var cantidad=document.getElementById("cantidad").value;
		var Fecha=document.getElementById("Fecha").value;
		var Observacion=document.getElementById("Observacion").value;

		$("#contenedor").load("registrar_inventario.php",{producto:producto, novedad:novedad, cantidad:cantidad,Fecha:Fecha, Observacion:Observacion})
	}



function mostrar_fecha_producto() {
	var producto_consulta=document.getElementById('producto_consulta').value;
$("#contenedor_fecha").load("mostra_fecha_inventario.php",{producto_consulta:producto_consulta})

}


function consultar() {
	

	var id_inventario=document.getElementById("id_inventario").value;
	$("#contenedor").load("consultar_inventario.php",{id_inventario:id_inventario});

}

function Actualizar() {
		var id_inventario=document.getElementById("id_inventario").value;
		var producto=document.getElementById("producto").value;
		var novedad=document.getElementById("novedad").value;
		var cantidad=document.getElementById("cantidad").value;
		var Fecha=document.getElementById("Fecha").value;
		var Observacion=document.getElementById("Observacion").value;
	$("#contenedor").load("actualizar_inventario.php",{id_inventario:id_inventario,producto:producto,novedad:novedad,cantidad:cantidad, Fecha:Fecha, Observacion:Observacion });

}

function nuevo_registro() {
		var id_inventario=document.getElementById("id_inventario").value="";
		var producto=document.getElementById("producto").value="";
		var novedad=document.getElementById("novedad").value="";
		var cantidad=document.getElementById("cantidad").value="";
		inicio();
		var Fecha=document.getElementById("Fecha").value="";
		var Observacion=document.getElementById("Observacion").value="";
	}


	function exportar() {


// var formulario=document.getElementById("formulario").submit(); 

swal({
  title: "Advertencia",
  text: "Desea Exportar Este Insumo?",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#16e528",
  confirmButtonText: "Solo Este Fomulario",
  cancelButtonText: "No, Todas los Insumos",
  closeOnConfirm: true,
  closeOnCancel: true
},
function(isConfirm){
  if (isConfirm) {
var Fecha=document.getElementById("Fecha").type='text';


var formulario=document.getElementById('formulario').action="exportaciones/exportar_insumo.php";
$("#formulario").submit();


var Fecha=document.getElementById("Fecha").type='button';
 
  } else {
  	var formulario=document.getElementById('formulario').action="exportaciones/exportar_todos_insumos.php";

$("#formulario").submit();
  }
});


}

function exportar_excel() {
	swal({
  title: "Advertencia",
  text: "Desea Exportar Este Insumo?",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#16e528",
  confirmButtonText: "Solo Este Fomulario",
  cancelButtonText: "No, Todos Los Insumos",
  closeOnConfirm: true,
  closeOnCancel: true
},
function(isConfirm){
  if (isConfirm) {
var formulario=document.getElementById('formulario').action="exportaciones/exportar_insumo_excel.php";

$("#formulario").submit();
 
  } else {
  	var formulario=document.getElementById('formulario').action="exportaciones/exportar__todas_insumo_excel.php";

$("#formulario").submit();
  }
});

}

		</script>
</html>