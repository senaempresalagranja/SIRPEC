<?php 

require '../conexion_login/inicio_sesion.php';

echo "<script>


var Rol='$fila[2]';


</script>";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/iconos.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="../../js/sweetalert.js"></script>

  <link rel='stylesheet prefetch' href='../../iconn/css/font-awesome.min.css'>
<link rel="stylesheet" href="../../iconn/css/style.css">
<link rel="stylesheet" href="bootstrap.css">
<link rel="shortcut icon" type="image/x-icon" href="../../img/sirpec.ico" />


<link rel="stylesheet" type="text/css" href="../../css/normalize.css"/>         
<link rel="stylesheet" type="text/css" href="../../css/component.css" />
<link rel="stylesheet" type="text/css" href="../../css/sweetalert.css" />


<script src="../../js/modernizr.custom.js"></script> 
	<script src="../../jquery.js"></script>
	<title>SIMULADOR</title>
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
						<div id="registrar">
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
							</div>
							<li><a class="icon icon-table" href="#">  Simulador</a></li>
							<li class="icon icon-arrow-left">
								<a class="icon icon-search" href="#">   Consulta</a>
								<div class="mp-level">
									<h2 class="icon icon-search">  Consulta</h2>
									<a class="mp-back" href="#">Atras</a>
									<ul>
										<li><a class="icon  icon-books" href="../consultas/buscar_cosecha.php">  Cosecha</a></li>
										<li><a class="icon  icon-books" href="../consultas/buscar_especie.php">  Especie</a></li>
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
							<div id="registrar1">
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
							</div>
							<li><a class="icon icon-switch" href="../conexion_login/cerrar_sesion.php" >Cerrar Sesion</a></li>
						</ul>
							
					</div>
				</nav>
				<!-- /mp-menu -->


<div class="container">
	
<h1 class="text-center ">PRODUCCION DE TILAPIA ROJA EN ESTANQUES</h1>

<div class="row">
	<div class="col-md-3">
		<table class="table table-bordered">
	<tr>
	
		<td colspan="2" class="danger">PROYECCION DE PECES DE TILAPIA ROJA</td>
	</tr>
	<tr>
		<td>Espejo de Agua (M2):</td>
		<td ><input type="number" class="form-control" name="espejo" id="espejo_agua"></td>
	</tr>
	<tr>
		<td>Densidad a la cosecha (Peces/M2)</td>
		<td ><input type="number" class="form-control" name="densidad" id="densidad_cosecha"></td>
	</tr>
	<tr>
		<td>Numero de peces a cosechar</td>
		<td ><input type="button" class="form-control" name="cosecha" value="" id="numero_peces_cosechar"></td>
	</tr>
	<tr>
		<td>Porcentaje de mortalidad 
		
		  		<input type="number" id="porcentaje_mortalidad_Prueba" style="    width: 100%;" class="form-control"></td>
		</td>
		<td > <input type="button" class="form-control" name="mortalidad" value="" id="porcentaje_mortalidad"></td>
	</tr>
	<tr>
		<td>Total peces a sembrar</td>
		<td > <input type="button" class="form-control" name="sembrar" value="" id="total_peces_sembrar"></td>
	</tr>
</table>
	</div>

	<div class="col-md-9">
		<table class="table table-bordered">
			<tr>
				<td colspan="4" class="danger text-center">COSTOS DE ALIMENTO BALANCEADO</td>

			</tr>
			<tr>
				<td>DIAS</td>
				<td>BULTOS/MES</td>
				<td>VALOR BULTO</td>
				<td>VALOR TOTAL ALIMENTO</td>
			</tr>
			<tr>
				<td>1 - 30</td>
				<td><input type="button" value="" class="form-control" id="bultos_por_mes1"></td>
				<td><input type="number" name="" id="valor_bulto_mes1" class="form-control" value="102000"></td>
				<td><input type="button" value="" class="form-control" id="valor_total_alimento_mes1"></td>
			</tr>
			<tr>
				<td>31 - 60</td>
				<td><input type="button" value="" class="form-control" id="bultos_por_mes2"></td>
				<td><input type="number" name="" id="valor_bulto_mes2" class="form-control" value="82000"></td>
				<td><input type="button" value="" class="form-control" id="valor_total_alimento_mes2"></td>
			</tr>
			<tr>
				<td>61 - 90</td>
				<td><input type="button" value="" class="form-control" id="bultos_por_mes3"></td>
				<td><input type="number" name="" id="valor_bulto_mes3" class="form-control" value="72000"></td>
				<td><input type="button" value="" class="form-control" id="valor_total_alimento_mes3"></td>
			</tr>
			<tr>
				<td>91 - 120</td>
				<td><input type="button" value="" class="form-control" id="bultos_por_mes4"></td>
				<td><input type="number" name="" id="valor_bulto_mes4" class="form-control" value="62000"></td>
				<td><input type="button" value="" class="form-control" id="valor_total_alimento_mes4"></td>
			</tr>
			<tr>
				<td>121 - 150</td>
				<td><input type="button" value="" class="form-control" id="bultos_por_mes5"></td>
				<td><input type="number" name="" id="valor_bulto_mes5" class="form-control" value="62000"></td>
				<td><input type="button" value="" class="form-control" id="valor_total_alimento_mes5"></td>
			</tr>
			<tr>
				<td>151 - 180</td>
				<td><input type="button" value="" class="form-control" id="bultos_por_mes6"></td>
				<td><input type="number" name="" id="valor_bulto_mes6" class="form-control" value="62000"></td>
				<td><input type="button" value="" class="form-control" id="valor_total_alimento_mes6"></td>
			</tr>
			<tr>
				<td>TOTAL</td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</table>
	</div>
</div>

<div class="row">
	<div class="col-md-12"><table class="table table-bordered">
		<tr>
			<td class="text-center danger" colspan="7">MORTALIDAD MENSUAL Y NUMERO DE PECES A COSECHAR</td>

		</tr>
		<tr>
			<td>DIAS</td>
			<td>NUMERO  DE PECES/MES</td>
			<td>% MORTALIDAD/ MES</td>
			<td>NUMERO PECES MUERTOS</td>
			<td>CONSUMO EN GRAMOS/ PEZ/ MES</td>
			<td>CONSUMO EN KILOS/ LOTE DE PECES</td>
			<td>BULTOS/MES</td>
		</tr>
		<tr>
			<td>1 - 30</td>
			<td><input type="button" value="" id="numero_peces_muerto_mes1" class="form-control"></td>
			<td></td>
			<td><input type="button" value="" id="numero_peces_muertos1" class="form-control"></td>
			<td><input type="button" value="" class="form-control" id="consumo_gramos_mes1"></td>
			<td><input type="button" value="" class="form-control" id="consumo_kilos_mes1"></td>
			<td><input type="button" value="" class="form-control" id="bultos_mes1"></td>
		</tr>
		<tr>
			<td>31 - 60</td>
			<td><input type="button" value="" id="numero_peces_muerto_mes2" class="form-control"></td>
			<td><input type="number" name="" value="10" class="form-control" id="mortalidad_mes2"></td>
			<td><input type="button" value="" id="numero_peces_muertos2" class="form-control"></td>
			<td><input type="button" value="" id="consumo_gramos_mes2" class="form-control"></td>
			<td><input type="button" value="" class="form-control" id="consumo_kilos_mes2"></td>
			<td><input type="button" value="" class="form-control" id="bultos_mes2"></td>
		</tr>
		<tr>
			<td>61 - 90</td>
			<td><input type="button" id="numero_peces_muerto_mes3" value="" class="form-control"></td>
			<td> <input type="number" name="" value="10" class="form-control" id="mortalidad_mes3"></td>
			<td><input type="button" value="" id="numero_peces_muertos3" class="form-control"></td>
			<td><input type="button" value="" id="consumo_gramos_mes3" class="form-control"></td>
			<td><input type="button" value="" class="form-control" id="consumo_kilos_mes3"></td>
			<td><input type="button" value="" class="form-control" id="bultos_mes3"></td>
		</tr>
		<tr>
			<td>91 - 120</td>
			<td><input type="button" id="numero_peces_muerto_mes4" value="" class="form-control"></td>
			<td> <input type="number" value="4" name="" class="form-control" id="mortalidad_mes4"></td>
			<td><input type="button" value="" id="numero_peces_muertos4"  class="form-control"></td>
			<td><input type="button" value="" id="consumo_gramos_mes4" class="form-control"></td>
			<td><input type="button" value="" class="form-control" id="consumo_kilos_mes4"></td>
			<td><input type="button" value="" class="form-control" id="bultos_mes4"></td>
		</tr>
		<tr>
			<td>121 - 150</td>
			<td><input type="button" id="numero_peces_muerto_mes5" value="" class="form-control"></td>
			<td> <input type="number" value="3" name="" class="form-control" id="mortalidad_mes5"></td>
			<td><input type="button" value="" id="numero_peces_muertos5"  class="form-control"></td>
			<td><input type="button" id="consumo_gramos_mes5" value="" class="form-control"></td>
			<td><input type="button" value="" class="form-control" id="consumo_kilos_mes5"></td>
			<td><input type="button" value="" class="form-control" id="bultos_mes5"></td>
		</tr>
		<tr>
			<td>151 - 180</td>
			<td><input type="button" value="" id="numero_peces_muerto_mes6" class="form-control"></td>
			<td> <input type="number" value="2" name="" class="form-control" id="mortalidad_mes6"></td>
			<td><input type="button" value="" id="numero_peces_muertos6"  class="form-control"></td>
			<td><input type="button" id="consumo_gramos_mes6" value="" class="form-control"></td>
			<td><input type="button" value="" class="form-control" id="consumo_kilos_mes6"></td>
			<td><input type="button" value="" class="form-control" id="bultos_mes6"></td>
		</tr>
		<tr>
			<td>COSECHA</td>
			<td><input type="button" id="cosecha" value="" class="form-control"></td>
			<td> <input type="number" value="1"   name="" class="form-control" id="mortalidad_cosecha"></td>
			<td></td>
			<td></td>
			<td></td>
			<td><input type="button" value=""   name="" class="form-control" id="total_Bultos"></td></td>
		</tr>
		<tr>
			<td colspan="3" class="success">KILOS PRODUCIDOS</td>
			<td><input type="button" name="producidos" value="" class="form-control" id="kilos_producidos"></td>
			<td colspan="2" class="warning">BULTOS/1000 PECES</td>
			<td><input type="button" name="bultos" value="" class="form-control" id="butlos_1000_peces"></td>
	
		</tr>
		<tr>
			<td colspan="3" class="success">KILOS EVISCERADOS</td>
			<td><input type="button" name="eviscerados" value="" class="form-control" id="kilos_vicerados"></td>

		</tr>
	</table></div>
</div>

<div class="row">
	<div class="col-md-12">
		<table class="table table-bordered">
			<tr>
				<td colspan="7" class="danger text-center">REQUERIMIENTO DE ALIMENTO BALANCEADO POR CICLO DE ENGORDA</td>

			</tr>
			<tr>
				<td>DIAS </td>
				<td>PESO INICIAL EN GRAMOS</td>
				<td>PESO FINAL EN GRAMOS</td>
				<td>PESO PROMEDIO EN GRAMOS</td>
				<td>% DE TASA ALIMENTARIA</td>
				<td>CONSUMO EN GRAMOS/ PEZ/ DIA</td>
				<td>CONSUMO EN GRAMOS/ PEZ/ MES</td>
			</tr>
			<tr>
				<td>1 - 30</td>
				<td><input type="number" name="" id="peso_inicial_mes1" value="2" class="form-control"></td>
				<td><input type="number" name="" id="peso_final_mes1" class="form-control" value="20"></td>
				<td><input type="button" value="" class="form-control" id="peso_promedio_mes1"></td>
				<td><input type="number" name="" id="tasa_alimentaria_mes1" value="10" class="form-control" value=""></td>
				<td><input type="button" value="" class="form-control" id="consumo_pez_dia_mes1"></td>
				<td><input type="button" value="" class="form-control" id="consumo_pez_mes_mes1"></td>
			</tr>
			<tr>
				<td>31 - 60</td>
				<td><input type="number" name="" id="peso_inicial_mes2" value="20" class="form-control"></td>
				<td><input type="number" name="" id="peso_final_mes2" class="form-control" value="50"></td>
				<td><input type="button" value="" class="form-control" id="peso_promedio_mes2"></td>
				<td><input type="number" name="" id="tasa_alimentaria_mes2" value="8" class="form-control" value=""></td>
				<td><input type="button" value="" class="form-control" id="consumo_pez_dia_mes2"></td>
				<td><input type="button" value="" class="form-control" id="consumo_pez_mes_mes2"></td>
			</tr>
			<tr>
				<td>61 - 90</td>
				<td><input type="number" name="" id="peso_inicial_mes3" value="50" class="form-control"></td>
				<td><input type="number" name="" id="peso_final_mes3" class="form-control" value="100"></td>
				<td><input type="button" value="" class="form-control" id="peso_promedio_mes3"></td>
				<td><input type="number" name="" id="tasa_alimentaria_mes3" value="4" class="form-control" value=""></td>
				<td><input type="button" value="" class="form-control" id="consumo_pez_dia_mes3"></td>
				<td><input type="button" value="" class="form-control" id="consumo_pez_mes_mes3"></td>
			</tr>
			<tr>
				<td>91 - 120</td>
				<td><input type="number" name="" id="peso_inicial_mes4" value="100" class="form-control"></td>
				<td><input type="number" name="" id="peso_final_mes4" class="form-control" value="180"></td>
				<td><input type="button" value="" class="form-control" id="peso_promedio_mes4"></td>
				<td><input type="number" name="" id="tasa_alimentaria_mes4" value="2" class="form-control" value=""></td>
				<td><input type="button" value="" class="form-control" id="consumo_pez_dia_mes4"></td>
				<td><input type="button" value="" class="form-control" id="consumo_pez_mes_mes4"></td>
			</tr>
			<tr>
				<td>121 - 150</td>
				<td><input type="number" name="" id="peso_inicial_mes5" value="180" class="form-control"></td>
				<td><input type="number" name="" id="peso_final_mes5" class="form-control" value="280"></td>
				<td><input type="button" value="" class="form-control" id="peso_promedio_mes5"></td>
				<td><input type="number" name="" id="tasa_alimentaria_mes5" value="1.5" class="form-control" value=""></td>
				<td><input type="button" value="" class="form-control" id="consumo_pez_dia_mes5"></td>
				<td><input type="button" value="" class="form-control" id="consumo_pez_mes_mes5"></td>
			</tr>
			<tr>
				<td>151 - 180</td>
				<td><input type="number" name="" id="peso_inicial_mes6" value="280" class="form-control"></td>
				<td><input type="number" name="" id="peso_final_mes6" class="form-control" value="400"></td>
				<td><input type="button" value="" class="form-control" id="peso_promedio_mes6"></td>
				<td><input type="number" name="" id="tasa_alimentaria_mes6" value="1" class="form-control" value=""></td>
				<td><input type="button" value="" class="form-control" id="consumo_pez_dia_mes6"></td>
				<td><input type="button" value="" class="form-control" id="consumo_pez_mes_mes6"></td>
			</tr>

						<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td><input type="button" value="" class="form-control" id="total_consumo_pez_mes_mes6"></td>
			</tr>


								<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td>Conversion: <input type="button" value="" class="form-control" id="conversion_consumo_pez_mes_mes6"></td>
			</tr>
		</table>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<table class="table table-bordered">
			<tr>
				<td class="danger text-center" colspan="6">COSTOS ETAPA ENGORDA</td>

			</tr>
			<tr>
				<td>EGRESOS</td>
				<td>UNIDAD</td>
				<td>CANTIDAD</td>
				<td>V/ UNITARIO</td>
				<td>V/ TOTAL</td>
				<td>% RUBRO</td>
			</tr>
			<tr>
				<td>ALEVIN DE TILAPIA ROJA DE 2 GRAMOS</td>
				<td>BULTO</td>
				<td><input type="button" name="" id="cantidad_alevin" class="form-control"></td>
				<td><input type="number" name="" id="valor_unitario_alevin" class="form-control" value="160"></td>
				<td><input type="button" value="" class="form-control" id="valor_total_alevin"></td>
				<td><input type="button" value="" class="form-control" id="rubro_alevin_tilapia_roja"></td>
			</tr>
			<tr>
				<td>ALIMENTO BALANCEADO DE 45% DE PROTEINA</td>
				<td>BULTO</td>
				<td><input type="button" name="" id="cantidad_alimento_45" class="form-control"></td>
				<td><input type="button" value="" class="form-control" id="valor_unitario_alimento45"></td>
				<td><input type="button" value="" class="form-control" id="valor_total_alimento45"></td>
				<td><input type="button" value="" id="rubro_alimento_balanceado_45" class="form-control"></td>
			</tr>
			<tr>
				<td>ALIMENTO BALANCEADO DE 38% DE PROTEINA</td>
				<td>BULTO</td>
				<td><input type="button" name="" id="cantidad_alimento_38" class="form-control"></td>
				<td><input type="button" value="" class="form-control" id="valor_unitario_alimento38"></td>
				<td><input type="button" value="" class="form-control" id="valor_total_alimento38"></td>
				<td><input type="button" value="" id="rubro_alimento_balanceado_38" class="form-control"></td>
			</tr>
			<tr>
				<td>ALIMENTO BALANCEADO DE 32% DE PROTEINA</td>
				<td>BULTO</td>
				<td><input type="button" name="" id="cantidad_alimento_32" class="form-control"></td>
				<td><input type="button" value="" class="form-control" id="valor_unitario_alimento32"></td>
				<td><input type="button" value="" class="form-control" id="valor_total_alimento32"></td>
				<td><input type="button" value="" id="rubro_alimento_balanceado_32" class="form-control"></td>
			</tr>
			<tr>
				<td>ALIMENTO BALANCEADO DE 25% DE PROTEINA</td>
				<td>BULTO</td>
				<td><input type="button" name="" id="cantidad_alimento_25" class="form-control"></td>
				<td><input type="button" value="" class="form-control" id="valor_unitario_alimento25"></td>
				<td><input type="button" value="" class="form-control" id="valor_total_alimento25"></td>
				<td><input type="button" value="" id="rubro_alimento_balanceado_25" class="form-control"></td>
			</tr>
			<tr>
				<td class="danger text-center" colspan="6">ADECUACION ESTANQUE</td>

			</tr>
			<tr>
				<td>LIMPIEZA</td>
				<td>JORNAL</td>
				<td><input type="number" name="" id="adecuacuacion_limpieza" class="form-control" value="2"></td>
				<td><input type="number" name="" id="valor_unitario_limpieza" class="form-control" value="30000"></td>
				<td><input type="button" value="" class="form-control" id="valor_total_limpieza"></td>
				<td><input type="button" value="" id="rubro_adecuacion_limpieza" class="form-control"></td>
			</tr>
			<tr>
				<td>ENCALADO (CAL AGRICOLA + MANO DE OBRA)</td>
				<td>METRO 2</td>
				<td><input type="number" name="" id="adecuacuacion_encalado" class="form-control" value="3000"></td>
				<td><input type="number" name="" id="valor_unitario_encalado" class="form-control" value="80"></td>
				<td><input type="button" value="" class="form-control" id="valor_total_encalado"></td>
				<td><input type="button" value="" id="rubro_adecuacion_encalcado" class="form-control"></td>
			</tr>
			<tr>
				<td>ABONADO (HUMUS DE LOMBRIZ)</td>
				<td>KILO</td>
				<td><input type="number" name="" id="adecuacuacion_abonado" class="form-control" value="600"></td>
				<td><input type="number" name="" id="valor_unitario_abonado" class="form-control" value="80"></td>
				<td><input type="button" value="" class="form-control" id="valor_total_abonado"></td>
				<td><input type="button" value="" id="rubro_adecuacion_abonado" class="form-control"></td>
			</tr>
			<tr>
				<td>LLENADO (MANO DE OBRA)</td>
				<td>JORNAL</td>
				<td><input type="number" name="" id="adecuacuacion_llenado" class="form-control" value="1"></td>
				<td><input type="number" name="" id="valor_unitario_llenado" class="form-control" value="30000"></td>
				<td><input type="button" value="" class="form-control" id="valor_total_llenado"></td>
				<td><input type="button" value="" id="rubro_adecuacion_llenado" class="form-control"></td>
			</tr>
			<tr>
				<td>FERTILIZADO (TRIPLE 15 + MANO DE OBRA)</td>
				<td>METRO 2</td>
				<td><input type="number" name="" id="adecuacuacion_fertilizado" class="form-control" value="3000"></td>
				<td><input type="number" name="" id="valor_unitario_fertilizado" class="form-control" value="18"></td>
				<td><input type="button" value="" class="form-control" id="valor_total_fertilizado"></td>
				<td><input type="button" value="" id="rubro_adecuacion_fertilizado" class="form-control"></td>
			</tr>
			<tr>
				<td class="text-center danger" colspan="6">COSECHA DE PECES</td>
	
			</tr>
			<tr>
				<td>ATRAPE Y CAPTURA (MANO DE OBRA)</td>
				<td>JORNAL</td>
				<td><input type="number" name="" id="cosecha_atrape" class="form-control" value="18"></td>
				<td><input type="number" name="" id="valor_unitario_atrape" class="form-control" value="30000"></td>
				<td><input type="button" value="" class="form-control" id="valor_total_atrape"></td>
				<td><input type="button" value="" id="rubro_cosecha_atrape" class="form-control"></td>
			</tr>
			<tr>
				<td>EVISCERADO Y LAVADO (MANO DE OBRA)</td>
				<td>JORNAL</td>
				<td><input type="number" name="" id="cosecha_evicerado" class="form-control" value="36"></td>
				<td><input type="number" name="" id="valor_unitario_evicerado" class="form-control" value="30000"></td>
				<td><input type="button" value="" class="form-control" id="valor_total_evicerado"></td>
				<td><input type="button" value="" id="rubro_cosecha_evicerado" class="form-control"></td>
			</tr>
			<tr>
				<td>ADMINISTRACION (APROXIMADAMENTE 3%)</td>
				<td>UNIDAD</td>
				<td><input type="number" name="" id="cosecha_administracion" class="form-control" value="1"></td>
				<td><input type="number" name="" id="valor_unitario_administracion" class="form-control" value="1200000"></td>
				<td><input type="button" value="" class="form-control" id="valor_total_administracion"></td>
				<td><input type="button" value="" id="rubro_cosecha_administracion" class="form-control"></td>
			</tr>
			<tr>
				<td>MANEJO DEL ESTANQUE (MANO DE OBRA)</td>
				<td>JORNAL</td>
				<td><input type="number" name="" id="cosecha_manejo" class="form-control" value="90"></td>
				<td><input type="number" name="" id="valor_unitario_manejo" class="form-control" value="30000"></td>
				<td><input type="button" value="" class="form-control" id="valor_total_manejo"></td>
				<td><input type="button" value="" id="rubro_cosecha_manejo" class="form-control"></td>
			</tr>
			<tr>
				<td>SEGURIDAD SOCIAL (70% DEL MANEJO)</td>
				<td>UNIDAD</td>
				<td><input type="number" name="" id="cosecha_seguridad" class="form-control" value="1"></td>
				<td><input type="number" name="" id="valor_unitario_seguridad" class="form-control" value="1890000"></td>
				<td><input type="button" value="" class="form-control" id="valor_total_seguridad"></td>
				<td><input type="button" value="" id="rubro_cosecha_seguridad" class="form-control"></td>
			</tr>
			<tr>
				<td>TRANSPORTE (BULTOS + DESPLAZAMIENTOS)</td>
				<td>UNIDAD</td>
				<td><input type="number" name="" id="cosecha_transporte" class="form-control" value="12"></td>
				<td><input type="number" name="" id="valor_unitario_transporte" class="form-control" value="40000"></td>
				<td><input type="button" value="" class="form-control" id="valor_total_transporte"></td>
				<td><input type="button" value="" id="rubro_cosecha_transporte" class="form-control"></td>
			</tr>
			<tr>
				<td>SANIDAD DE LOS PECES (APROXIMADAMENTE 2%)</td>
				<td>UNIDAD</td>
				<td><input type="number" name="" id="cosecha_sanidad" class="form-control" value="1"></td>
				<td><input type="number" name="" id="valor_unitario_sanidad" class="form-control" value="800000"></td>
				<td><input type="button" value="" class="form-control" id="valor_total_sanidad"></td>
				<td><input type="button" value="" id="rubro_cosecha_sanidad" class="form-control"></td>
			</tr>
			<tr>
				<td>VARIOS (REPRESENTA EL 10%)</td>
				<td>UNIDAD</td>
				<td><input type="number" name="" id="cosecha_varios" class="form-control" value="1"></td>
				<td><input type="number" name="" id="valor_unitario_varios" class="form-control" value="4000000"></td>
				<td><input type="button" value="" class="form-control" id="valor_total_varios"></td>
				<td><input type="button" value="" id="rubro_cosecha_varios" class="form-control"></td>
			</tr>
			<tr>
				<td class="success" colspan="4">TOTAL COSTOS DE PRODUCCION</td>

				<td><input type="button" name="val_total" value="" class="form-control" id="valor_total_costos"></td>
				<td><input type="button" name="val_tot" value="" id="rubro_valor_total_costos" class="form-control"></td>
			</tr>
		</table>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<table class="table table-bordered">
			<tr style="background: red; color: white">
			
				<td colspan="2">INGRESOS</td>
				<td>UNIDAD</td>
				<td>CANTIDAD</td>
				<td>V/UNITARIO</td>
				<td>V/ TOTAL</td>
			</tr>
			<tr>
				<td colspan="2" class="danger">VENTA KILOS TILAPIA ROJA</td>
				<td>KILO</td>
				<td><input type="button" name="vent_tilapia" value="" id="cantidad_venta_tilapia" class="form-control"></td>
				<td><input type="number" name="tila_roja" id="valor_unitario_tilapia_roja" value='70000' class="form-control"></td>
				<td><input type="button" name="val_ingreso" value="" id="valor_total_ingresos" class="form-control"></td>
			</tr>
		</table>
	</div>

	<div class="col-md-6">
		
<table class="table table-bordered">
			<tr>
				<td colspan="2">BENEFICIO ECONOMICO</td>
				<td><input type="button" name="beneficio" value="" id="beneficio_economico" class="form-control"></td>
			</tr>
		</table>
	</div>
		<div class="col-md-6">
		
<table class="table table-bordered">
			<tr>
				<td colspan="2">VALOR KILO TILAPIA</td>
				<td><input type="button" name="val_kilo" value="" id="valor_kilo" class="form-control"></td>
			</tr>
		</table>
	</div>


	<div class="col-md-8">
	<div class="col-md-8">


</div>

</div>
				
                
				
              

</body>

<style>
	input[type="number"] {
    width: 150px;
    display: block;
    margin-bottom: 10px;
    background-color: #99ff00;
}

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
	overflow: hidden;
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
     overflow: hidden;
}
.iconn{
	font-size: 200%;
}

.inic{
	text-decoration: none;
	color: #000;
}

</style>

<script>

if (Rol=="Consulta") {
var registrar=document.getElementById('registrar').style.display="none";
var registrar1=document.getElementById('registrar1').style.display="none";


}

</script>

<script src="../../js/classie.js"></script>
		<script src="../../js/mlpushmenu.js"></script>

<script>

new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ), {
				type : 'cover'
			} );
	
$(document).ready(inicio)

// ---------------------------------------||||||------------------------------||||--------------------------------||||--------------------

function inicio() {
simular();
$("#espejo_agua").keyup(simular);
$("#densidad_cosecha").keyup(simular);
$("#porcentaje_mortalidad_Prueba").keyup(simular);

$("#mortalidad_mes2").keyup(simular);
$("#mortalidad_mes3").keyup(simular);
$("#mortalidad_mes4").keyup(simular);
$("#mortalidad_mes5").keyup(simular);
$("#mortalidad_mes6").keyup(simular);
$("#mortalidad_cosecha").keyup(simular);

$("#peso_inicial_mes1").keyup(simular);
$("#peso_inicial_mes2").keyup(simular);
$("#peso_inicial_mes3").keyup(simular);
$("#peso_inicial_mes4").keyup(simular);
$("#peso_inicial_mes5").keyup(simular);
$("#peso_inicial_mes6").keyup(simular);


$("#peso_final_mes1").keyup(simular);
$("#peso_final_mes2").keyup(simular);
$("#peso_final_mes3").keyup(simular);
$("#peso_final_mes4").keyup(simular);
$("#peso_final_mes5").keyup(simular);
$("#peso_final_mes6").keyup(simular);

$("#tasa_alimentaria_mes1").keyup(simular);
$("#tasa_alimentaria_mes2").keyup(simular);
$("#tasa_alimentaria_mes3").keyup(simular);
$("#tasa_alimentaria_mes4").keyup(simular);
$("#tasa_alimentaria_mes5").keyup(simular);
$("#tasa_alimentaria_mes6").keyup(simular);

$("#valor_bulto_mes1").keyup(simular);
$("#valor_bulto_mes2").keyup(simular);
$("#valor_bulto_mes3").keyup(simular);
$("#valor_bulto_mes4").keyup(simular);
$("#valor_bulto_mes5").keyup(simular);
$("#valor_bulto_mes6").keyup(simular);


$("#valor_unitario_alevin").keyup(simular);


$("#adecuacuacion_limpieza").keyup(simular);
$("#adecuacuacion_encalado").keyup(simular);
$("#adecuacuacion_abonado").keyup(simular);
$("#adecuacuacion_llenado").keyup(simular);
$("#adecuacuacion_fertilizado").keyup(simular);


$("#valor_unitario_limpieza").keyup(simular);
$("#valor_unitario_encalado").keyup(simular);
$("#valor_unitario_abonado").keyup(simular);
$("#valor_unitario_llenado").keyup(simular);


$("#valor_unitario_limpieza").keyup(simular);
$("#valor_unitario_encalado").keyup(simular);
$("#valor_unitario_abonado").keyup(simular);
$("#valor_unitario_llenado").keyup(simular);
$("#valor_unitario_fertilizado").keyup(simular);
$("#valor_unitario_limpieza").keyup(simular);
$("#valor_unitario_encalado").keyup(simular);
$("#valor_unitario_fertilizado").keyup(simular);
$("#valor_unitario_tilapia_roja").keyup(simular);


var cosecha_atrape=parseFloat(document.getElementById("cosecha_atrape").value);
var cosecha_evicerado=parseFloat(document.getElementById("cosecha_evicerado").value);
var cosecha_administracion=parseFloat(document.getElementById("cosecha_administracion").value);
var cosecha_manejo=parseFloat(document.getElementById("cosecha_manejo").value);
var cosecha_seguridad=parseFloat(document.getElementById("cosecha_seguridad").value);
var cosecha_transporte=parseFloat(document.getElementById("cosecha_transporte").value);
var cosecha_sanidad=parseFloat(document.getElementById("cosecha_sanidad").value);
var cosecha_varios=parseFloat(document.getElementById("cosecha_varios").value);


var valor_unitario_atrape=parseFloat(document.getElementById("valor_unitario_atrape").value);
var valor_unitario_evicerado=parseFloat(document.getElementById("valor_unitario_evicerado").value);
var valor_unitario_administracion=parseFloat(document.getElementById("valor_unitario_administracion").value);
var valor_unitario_manejo=parseFloat(document.getElementById("valor_unitario_manejo").value);
var valor_unitario_seguridad=parseFloat(document.getElementById("valor_unitario_seguridad").value);
var valor_unitario_transporte=parseFloat(document.getElementById("valor_unitario_transporte").value);
var valor_unitario_sanidad=parseFloat(document.getElementById("valor_unitario_sanidad").value);
var valor_unitario_varios=parseFloat(document.getElementById("valor_unitario_varios").value)

}
	

// ---------------------------------------||||||------------------------------||||--------------------------------||||--------------------
	function simular() {
		// ACA ABAJO VA PROYECCION DE PECES DE TILAPIA ROJA
	var espejo_agua=parseFloat(document.getElementById('espejo_agua').value);
	var densidad_cosecha=parseFloat(document.getElementById('densidad_cosecha').value);
	var numero_peces_cosechar=document.getElementById('numero_peces_cosechar').value=espejo_agua*densidad_cosecha;
	var porcentaje_mortalidad_Prueba=document.getElementById("porcentaje_mortalidad_Prueba").value;

	var porcentaje_mortalidad=document.getElementById('porcentaje_mortalidad').value=(numero_peces_cosechar*(porcentaje_mortalidad_Prueba/100));
	var total_peces_sembrar=document.getElementById('total_peces_sembrar').value=(porcentaje_mortalidad+numero_peces_cosechar);


// ---------------------------------------||||||------------------------------||||--------------------------------||||--------------------

// ACA ABAJO VA LA TABLA DE REQUERIMIENTO DE ALIMENTO BALANCEADO POR CICLO DE ENGORDA

var peso_inicial_mes1=parseFloat(document.getElementById("peso_inicial_mes1").value);
var peso_inicial_mes2=parseFloat(document.getElementById("peso_inicial_mes2").value);
var peso_inicial_mes3=parseFloat(document.getElementById("peso_inicial_mes3").value);
var peso_inicial_mes4=parseFloat(document.getElementById("peso_inicial_mes4").value);
var peso_inicial_mes5=parseFloat(document.getElementById("peso_inicial_mes5").value);
var peso_inicial_mes6=parseFloat(document.getElementById("peso_inicial_mes6").value);



var peso_final_mes1=parseFloat(document.getElementById("peso_final_mes1").value);
var peso_final_mes2=parseFloat(document.getElementById("peso_final_mes2").value);
var peso_final_mes3=parseFloat(document.getElementById("peso_final_mes3").value);
var peso_final_mes4=parseFloat(document.getElementById("peso_final_mes4").value);
var peso_final_mes5=parseFloat(document.getElementById("peso_final_mes5").value);
var peso_final_mes6=parseFloat(document.getElementById("peso_final_mes6").value);




var peso_promedio_mes1=document.getElementById("peso_promedio_mes1").value=(peso_inicial_mes1+peso_final_mes1)/2;
var peso_promedio_mes2=document.getElementById("peso_promedio_mes2").value=(peso_inicial_mes2+peso_final_mes2)/2;
var peso_promedio_mes3=document.getElementById("peso_promedio_mes3").value=(peso_inicial_mes3+peso_final_mes3)/2;
var peso_promedio_mes4=document.getElementById("peso_promedio_mes4").value=(peso_inicial_mes4+peso_final_mes4)/2;
var peso_promedio_mes5=document.getElementById("peso_promedio_mes5").value=(peso_inicial_mes5+peso_final_mes5)/2;
var peso_promedio_mes6=document.getElementById("peso_promedio_mes6").value=(peso_inicial_mes6+peso_final_mes6)/2;



var tasa_alimentaria_mes1=parseFloat(document.getElementById("tasa_alimentaria_mes1").value);
var tasa_alimentaria_mes2=parseFloat(document.getElementById("tasa_alimentaria_mes2").value);
var tasa_alimentaria_mes3=parseFloat(document.getElementById("tasa_alimentaria_mes3").value);
var tasa_alimentaria_mes4=parseFloat(document.getElementById("tasa_alimentaria_mes4").value);
var tasa_alimentaria_mes5=parseFloat(document.getElementById("tasa_alimentaria_mes5").value);
var tasa_alimentaria_mes6=parseFloat(document.getElementById("tasa_alimentaria_mes6").value);



var consumo_pez_dia_mes1=document.getElementById("consumo_pez_dia_mes1").value=(peso_promedio_mes1*tasa_alimentaria_mes1)/100;
var consumo_pez_dia_mes2=document.getElementById("consumo_pez_dia_mes2").value=(peso_promedio_mes2*tasa_alimentaria_mes2)/100;
var consumo_pez_dia_mes3=document.getElementById("consumo_pez_dia_mes3").value=(peso_promedio_mes3*tasa_alimentaria_mes3)/100;
var consumo_pez_dia_mes4=document.getElementById("consumo_pez_dia_mes4").value=(peso_promedio_mes4*tasa_alimentaria_mes4)/100;
var consumo_pez_dia_mes5=document.getElementById("consumo_pez_dia_mes5").value=(peso_promedio_mes5*tasa_alimentaria_mes5)/100;
var consumo_pez_dia_mes6=document.getElementById("consumo_pez_dia_mes6").value=(peso_promedio_mes6*tasa_alimentaria_mes6)/100;


var consumo_pez_mes_mes1=document.getElementById("consumo_pez_mes_mes1").value=consumo_pez_dia_mes1*30;
var consumo_pez_mes_mes2=document.getElementById("consumo_pez_mes_mes2").value=consumo_pez_dia_mes2*30;
var consumo_pez_mes_mes3=document.getElementById("consumo_pez_mes_mes3").value=consumo_pez_dia_mes3*30;
var consumo_pez_mes_mes4=document.getElementById("consumo_pez_mes_mes4").value=consumo_pez_dia_mes4*30;
var consumo_pez_mes_mes5=document.getElementById("consumo_pez_mes_mes5").value=consumo_pez_dia_mes5*30;
var consumo_pez_mes_mes6=document.getElementById("consumo_pez_mes_mes6").value=consumo_pez_dia_mes6*30;


var total_consumo_pez_mes_mes6=document.getElementById('total_consumo_pez_mes_mes6').value=consumo_pez_mes_mes1+consumo_pez_mes_mes2+consumo_pez_mes_mes3+consumo_pez_mes_mes4+consumo_pez_mes_mes5+consumo_pez_mes_mes6;



var conversion_consumo_pez_mes_mes6=document.getElementById('conversion_consumo_pez_mes_mes6').value=total_consumo_pez_mes_mes6/peso_final_mes6;





// ---------------------------------------||||||------------------------------||||--------------------------------||||--------------------
// ACA ABJO VA LA TABLA DE MORTALIDAD MENSUAL Y NUMERO DE PECES A COSECHAR


// ACA ABAJO VA LA COLUMAN DE MORTALIDAD}
	var mortalidad_mes2=parseFloat(document.getElementById("mortalidad_mes2").value);
	var mortalidad_mes3=parseFloat(document.getElementById("mortalidad_mes3").value);
	var mortalidad_mes4=parseFloat(document.getElementById("mortalidad_mes4").value);
	var mortalidad_mes5=parseFloat(document.getElementById("mortalidad_mes5").value);
	var mortalidad_mes6=parseFloat(document.getElementById("mortalidad_mes6").value);
	var mortalidad_cosecha=parseFloat(document.getElementById("mortalidad_cosecha").value);





// ACA ABAJO VA LA COLUMAN DE % NUMERO DE PECES MUERTOS}
	var numero_peces_muerto_mes1=document.getElementById('numero_peces_muerto_mes1').value=total_peces_sembrar*1;
	var numero_peces_muerto_mes2=document.getElementById('numero_peces_muerto_mes2').value=(numero_peces_muerto_mes1-(numero_peces_cosechar*mortalidad_mes2/100));
	var numero_peces_muerto_mes3=document.getElementById('numero_peces_muerto_mes3').value=(numero_peces_muerto_mes2-(numero_peces_cosechar*mortalidad_mes3/100));
	var numero_peces_muerto_mes4=document.getElementById('numero_peces_muerto_mes4').value=(numero_peces_muerto_mes3-(numero_peces_cosechar*mortalidad_mes4/100));
	var numero_peces_muerto_mes5=document.getElementById('numero_peces_muerto_mes5').value=(numero_peces_muerto_mes4-(numero_peces_cosechar*mortalidad_mes5/100));
	var numero_peces_muerto_mes6=document.getElementById('numero_peces_muerto_mes6').value=(numero_peces_muerto_mes5-(numero_peces_cosechar*mortalidad_mes6/100));
	var cosecha=document.getElementById('cosecha').value=(numero_peces_muerto_mes6-(numero_peces_cosechar*mortalidad_cosecha/100));




// ACA ABAJO VA LA COLUMAN DE NUMERO DE PECESE MUERTO SEGUN EL MES}
var numero_peces_muertos1=document.getElementById("numero_peces_muertos1").value=numero_peces_muerto_mes1-numero_peces_muerto_mes2;
var numero_peces_muertos2=document.getElementById("numero_peces_muertos2").value=numero_peces_muerto_mes2-numero_peces_muerto_mes3;
var numero_peces_muertos3=document.getElementById("numero_peces_muertos3").value=numero_peces_muerto_mes3-numero_peces_muerto_mes4;
var numero_peces_muertos4=document.getElementById("numero_peces_muertos4").value=numero_peces_muerto_mes4-numero_peces_muerto_mes5;
var numero_peces_muertos5=document.getElementById("numero_peces_muertos5").value=numero_peces_muerto_mes5-numero_peces_muerto_mes6;
var numero_peces_muertos6=document.getElementById("numero_peces_muertos6").value=numero_peces_muerto_mes6-cosecha;



var consumo_gramos_mes1=document.getElementById('consumo_gramos_mes1').value=consumo_pez_mes_mes1*1;
var consumo_gramos_mes2=document.getElementById('consumo_gramos_mes2').value=consumo_pez_mes_mes2*1;
var consumo_gramos_mes3=document.getElementById('consumo_gramos_mes3').value=consumo_pez_mes_mes3*1;
var consumo_gramos_mes4=document.getElementById('consumo_gramos_mes4').value=consumo_pez_mes_mes4*1;
var consumo_gramos_mes5=document.getElementById('consumo_gramos_mes5').value=consumo_pez_mes_mes5*1;
var consumo_gramos_mes6=document.getElementById('consumo_gramos_mes6').value=consumo_pez_mes_mes6*1;



var consumo_kilos_mes1=document.getElementById('consumo_kilos_mes1').value=numero_peces_muerto_mes1*consumo_gramos_mes1/1000;
var consumo_kilos_mes2=document.getElementById('consumo_kilos_mes2').value=numero_peces_muerto_mes2*consumo_gramos_mes2/1000;
var consumo_kilos_mes3=document.getElementById('consumo_kilos_mes3').value=numero_peces_muerto_mes3*consumo_gramos_mes3/1000;
var consumo_kilos_mes4=document.getElementById('consumo_kilos_mes4').value=numero_peces_muerto_mes4*consumo_gramos_mes4/1000;
var consumo_kilos_mes5=document.getElementById('consumo_kilos_mes5').value=numero_peces_muerto_mes5*consumo_gramos_mes5/1000;
var consumo_kilos_mes6=document.getElementById('consumo_kilos_mes6').value=numero_peces_muerto_mes6*consumo_gramos_mes6/1000;


// 

//    --------Con el parseInt para modificar --------
var bultos_mes1=parseInt(Math.round(document.getElementById('bultos_mes1').value=consumo_kilos_mes1/40));
var bultos_mes2=parseInt(Math.round(document.getElementById('bultos_mes2').value=consumo_kilos_mes2/40));
var bultos_mes3=parseInt(Math.round(document.getElementById('bultos_mes3').value=consumo_kilos_mes3/40));
var bultos_mes4=parseInt(Math.round(document.getElementById('bultos_mes4').value=consumo_kilos_mes4/40));
var bultos_mes5=parseInt(Math.round(document.getElementById('bultos_mes5').value=consumo_kilos_mes5/40));
var bultos_mes6=parseInt(Math.round(document.getElementById('bultos_mes6').value=consumo_kilos_mes6/40));

//    --------sin el (parseInt) para modificar --------

// var bultos_mes1=(document.getElementById('bultos_mes1').value=consumo_kilos_mes1/40);
// var bultos_mes2=(document.getElementById('bultos_mes2').value=consumo_kilos_mes2/40);
// var bultos_mes3=(document.getElementById('bultos_mes3').value=consumo_kilos_mes3/40);
// var bultos_mes4=(document.getElementById('bultos_mes4').value=consumo_kilos_mes4/40);
// var bultos_mes5=(document.getElementById('bultos_mes5').value=consumo_kilos_mes5/40);
// var bultos_mes6=(document.getElementById('bultos_mes6').value=consumo_kilos_mes6/40);


// para que meaparesca el resultado con ningun decimal
var total_Bultos=document.getElementById("total_Bultos").value=(bultos_mes1+bultos_mes2+bultos_mes3+bultos_mes4+bultos_mes5+bultos_mes6).toFixed(0);

// para que meaparesca el resultado con 2 desimales
var butlos_1000_peces=document.getElementById("butlos_1000_peces").value=(total_Bultos/(cosecha/1000)).toFixed(2); 


var kilos_producidos=document.getElementById("kilos_producidos").value=cosecha*peso_final_mes6/1000;

var kilos_vicerados=document.getElementById("kilos_vicerados").value=kilos_producidos*90/100;

// ---------------------------------------||||||------------------------------||||--------------------------------||||--------------------


//    --------ACA ABAJO VA LA TABLA DE COSTOS DE ALIMENTO BALANCEADO--------


//    --------Con el (parseFloat) para modificar --------
// var bultos_por_mes1=(document.getElementById("bultos_por_mes1").value=bultos_mes1*1);
// var bultos_por_mes2=(document.getElementById("bultos_por_mes2").value=bultos_mes2*1);
// var bultos_por_mes3=(document.getElementById("bultos_por_mes3").value=bultos_mes3*1);
// var bultos_por_mes4=(document.getElementById("bultos_por_mes4").value=bultos_mes4*1);
// var bultos_por_mes5=(document.getElementById("bultos_por_mes5").value=bultos_mes5*1);
// var bultos_por_mes6=(document.getElementById("bultos_por_mes6").value=bultos_mes6*1);


//    --------Con el (parseFloat) para modificar --------
var bultos_por_mes1=parseInt(Math.round(document.getElementById("bultos_por_mes1").value=bultos_mes1*1)).toFixed(0);
var bultos_por_mes2=parseInt(Math.round(document.getElementById("bultos_por_mes2").value=bultos_mes2*1)).toFixed(0);
var bultos_por_mes3=parseInt(Math.round(document.getElementById("bultos_por_mes3").value=bultos_mes3*1)).toFixed(0);
var bultos_por_mes4=parseInt(Math.round(document.getElementById("bultos_por_mes4").value=bultos_mes4*1)).toFixed(0);
var bultos_por_mes5=parseInt(Math.round(document.getElementById("bultos_por_mes5").value=bultos_mes5*1)).toFixed(0);
var bultos_por_mes6=parseInt(Math.round(document.getElementById("bultos_por_mes6").value=bultos_mes6*1)).toFixed(0);




var valor_bulto_mes1=parseFloat(document.getElementById("valor_bulto_mes1").value);
var valor_bulto_mes2=parseFloat(document.getElementById("valor_bulto_mes2").value);
var valor_bulto_mes3=parseFloat(document.getElementById("valor_bulto_mes3").value);
var valor_bulto_mes4=parseFloat(document.getElementById("valor_bulto_mes4").value);
var valor_bulto_mes5=parseFloat(document.getElementById("valor_bulto_mes5").value);
var valor_bulto_mes6=parseFloat(document.getElementById("valor_bulto_mes6").value);

var valor_total_alimento_mes1=parseFloat(document.getElementById("valor_total_alimento_mes1").value=valor_bulto_mes1*bultos_por_mes1);
var valor_total_alimento_mes2=parseFloat(document.getElementById("valor_total_alimento_mes2").value=valor_bulto_mes2*bultos_por_mes2);
var valor_total_alimento_mes3=parseFloat(document.getElementById("valor_total_alimento_mes3").value=valor_bulto_mes3*bultos_por_mes3);
var valor_total_alimento_mes4=parseFloat(document.getElementById("valor_total_alimento_mes4").value=valor_bulto_mes4*bultos_por_mes4);
var valor_total_alimento_mes5=parseFloat(document.getElementById("valor_total_alimento_mes5").value=valor_bulto_mes5*bultos_por_mes5);
var valor_total_alimento_mes6=parseFloat(document.getElementById("valor_total_alimento_mes6").value=valor_bulto_mes6*bultos_por_mes6);


// ---------------------------------------||||||------------------------------||||--------------------------------||||--------------------


//    --------ACA ABAJO VA LA TABLA DE COSTOS ETAPA ENGORDA--------


var cantidad_alevin=document.getElementById("cantidad_alevin").value=total_peces_sembrar*1;
var cantidad_alimento_45=document.getElementById("cantidad_alimento_45").value=bultos_mes1*1;
var cantidad_alimento_38=document.getElementById("cantidad_alimento_38").value=bultos_mes2*1;
var cantidad_alimento_32=document.getElementById("cantidad_alimento_32").value=bultos_mes3*1;
var cantidad_alimento_25=document.getElementById("cantidad_alimento_25").value=bultos_mes4+bultos_mes5+bultos_mes6;


var valor_unitario_alevin=parseFloat(document.getElementById("valor_unitario_alevin").value);
var valor_unitario_alimento45=parseFloat(document.getElementById("valor_unitario_alimento45").value=valor_bulto_mes1);
var valor_unitario_alimento38=parseFloat(document.getElementById("valor_unitario_alimento38").value=valor_bulto_mes2);
var valor_unitario_alimento32=parseFloat(document.getElementById("valor_unitario_alimento32").value=valor_bulto_mes3);
var valor_unitario_alimento25=parseFloat(document.getElementById("valor_unitario_alimento25").value=valor_bulto_mes4);




var valor_total_alevin=parseFloat(document.getElementById("valor_total_alevin").value=valor_unitario_alevin*cantidad_alevin);
var valor_total_alimento45=document.getElementById("valor_total_alimento45").value=cantidad_alimento_45*valor_unitario_alimento45;
var valor_total_alimento38=document.getElementById("valor_total_alimento38").value=cantidad_alimento_38*valor_unitario_alimento38;
var valor_total_alimento32=document.getElementById("valor_total_alimento32").value=cantidad_alimento_32*valor_unitario_alimento32;
var valor_total_alimento25=document.getElementById("valor_total_alimento25").value=cantidad_alimento_25*valor_unitario_alimento25;

// ---------------------------------------||||||------------------------------||||--------------------------------||||--------------------


//    --------ACA ABAJO VA LA TABLA DE ADECUACION ESTANQUE--------

var adecuacuacion_limpieza=parseFloat(document.getElementById("adecuacuacion_limpieza").value);
var adecuacuacion_encalado=parseFloat(document.getElementById("adecuacuacion_encalado").value);
var adecuacuacion_abonado=parseFloat(document.getElementById("adecuacuacion_abonado").value);
var adecuacuacion_llenado=parseFloat(document.getElementById("adecuacuacion_llenado").value);
var adecuacuacion_fertilizado=parseFloat(document.getElementById("adecuacuacion_fertilizado").value);


var valor_unitario_limpieza=parseFloat(document.getElementById("valor_unitario_limpieza").value);
var valor_unitario_encalado=parseFloat(document.getElementById("valor_unitario_encalado").value);
var valor_unitario_abonado=parseFloat(document.getElementById("valor_unitario_abonado").value);
var valor_unitario_llenado=parseFloat(document.getElementById("valor_unitario_llenado").value);
var valor_unitario_fertilizado=parseFloat(document.getElementById("valor_unitario_fertilizado").value);



var valor_total_limpieza=document.getElementById("valor_total_limpieza").value=adecuacuacion_limpieza*valor_unitario_limpieza;
var valor_total_encalado=document.getElementById("valor_total_encalado").value=adecuacuacion_encalado*valor_unitario_encalado;
var valor_total_abonado=document.getElementById("valor_total_abonado").value=adecuacuacion_abonado*valor_unitario_abonado;
var valor_total_llenado=document.getElementById("valor_total_llenado").value=adecuacuacion_llenado*valor_unitario_llenado;
var valor_total_fertilizado=document.getElementById("valor_total_fertilizado").value=adecuacuacion_fertilizado*valor_unitario_fertilizado;




// ---------------------------------------||||||------------------------------||||--------------------------------||||--------------------


//    --------ACA ABAJO VA LA TABLA DE COSECHA DE PECES--------



var cosecha_atrape=parseFloat(document.getElementById("cosecha_atrape").value);
var cosecha_evicerado=parseFloat(document.getElementById("cosecha_evicerado").value);
var cosecha_administracion=parseFloat(document.getElementById("cosecha_administracion").value);
var cosecha_manejo=parseFloat(document.getElementById("cosecha_manejo").value);
var cosecha_seguridad=parseFloat(document.getElementById("cosecha_seguridad").value);
var cosecha_transporte=parseFloat(document.getElementById("cosecha_transporte").value);
var cosecha_sanidad=parseFloat(document.getElementById("cosecha_sanidad").value);
var cosecha_varios=parseFloat(document.getElementById("cosecha_varios").value);


var valor_unitario_atrape=parseFloat(document.getElementById("valor_unitario_atrape").value);
var valor_unitario_evicerado=parseFloat(document.getElementById("valor_unitario_evicerado").value);
var valor_unitario_administracion=parseFloat(document.getElementById("valor_unitario_administracion").value);
var valor_unitario_manejo=parseFloat(document.getElementById("valor_unitario_manejo").value);
var valor_unitario_seguridad=parseFloat(document.getElementById("valor_unitario_seguridad").value);
var valor_unitario_transporte=parseFloat(document.getElementById("valor_unitario_transporte").value);
var valor_unitario_sanidad=parseFloat(document.getElementById("valor_unitario_sanidad").value);
var valor_unitario_varios=parseFloat(document.getElementById("valor_unitario_varios").value);


var valor_total_atrape=document.getElementById("valor_total_atrape").value=cosecha_atrape*valor_unitario_atrape;
var valor_total_evicerado=document.getElementById("valor_total_evicerado").value=cosecha_evicerado*valor_unitario_evicerado;
var valor_total_administracion=document.getElementById("valor_total_administracion").value=cosecha_administracion*valor_unitario_administracion;
var valor_total_manejo=document.getElementById("valor_total_manejo").value=cosecha_manejo*valor_unitario_manejo;
var valor_total_seguridad=document.getElementById("valor_total_seguridad").value=cosecha_seguridad*valor_unitario_seguridad;
var valor_total_sanidad=document.getElementById("valor_total_sanidad").value=cosecha_sanidad*valor_unitario_sanidad;
var valor_total_transporte=document.getElementById("valor_total_transporte").value=cosecha_transporte*valor_unitario_transporte;
var valor_total_varios=document.getElementById("valor_total_varios").value=cosecha_varios*valor_unitario_varios;


var valor_total_costos=document.getElementById("valor_total_costos").value=valor_total_atrape+valor_total_evicerado+valor_total_administracion+valor_total_manejo+valor_total_seguridad+valor_total_sanidad+valor_total_transporte+valor_total_varios+valor_total_limpieza+valor_total_encalado+valor_total_abonado+valor_total_llenado+valor_total_fertilizado+valor_total_alevin+valor_total_alimento45+valor_total_alimento38+valor_total_alimento32+valor_total_alimento25;





// -------------------------------------||||||||||||||||-----------------------------------------||||||||||||||||||||||-------------------
	// AQUI ABAJO ESTA LA MISMA TABABLA DE COSECHAS DE PECES PERO LA COLUMNA %TUBRO QUE NECESITA EL valor_total_costos PARA REALIZAR LOS CALCULOS POR ESTA RAZON LO PONGO AQUI ABAJO PORQUE SI NO ME DARIA ERROR PORQUE NO EXISTIRIA SI LO PUSIERA ARRIBA


var rubro_alevin_tilapia_roja=parseFloat(document.getElementById('rubro_alevin_tilapia_roja').value=((valor_total_alevin*100)/valor_total_costos).toFixed(1));

var rubro_alimento_balanceado_45=parseFloat(document.getElementById('rubro_alimento_balanceado_45').value=((valor_total_alimento45*100)/valor_total_costos).toFixed(1));

var rubro_alimento_balanceado_38=parseFloat(document.getElementById('rubro_alimento_balanceado_38').value=((valor_total_alimento38*100)/valor_total_costos).toFixed(1));

var rubro_alimento_balanceado_32=parseFloat(document.getElementById('rubro_alimento_balanceado_32').value=((valor_total_alimento32*100)/valor_total_costos).toFixed(1));

var rubro_alimento_balanceado_25=parseFloat(document.getElementById('rubro_alimento_balanceado_25').value=((valor_total_alimento25*100)/valor_total_costos).toFixed(1));



// ---------|||||||||||||------AQUI ABAJO ES EL % DE RUBRO DE ADECUACION DE ESTANQUE------------------|||||||||||||||||||--------------


var rubro_adecuacion_limpieza=parseFloat(document.getElementById('rubro_adecuacion_limpieza').value=((valor_total_limpieza*100)/valor_total_costos).toFixed(1));

var rubro_adecuacion_encalcado=parseFloat(document.getElementById('rubro_adecuacion_encalcado').value=((valor_total_encalado*100)/valor_total_costos).toFixed(1));

var rubro_adecuacion_abonado=parseFloat(document.getElementById('rubro_adecuacion_abonado').value=((valor_total_abonado*100)/valor_total_costos).toFixed(1));

var rubro_adecuacion_llenado=parseFloat(document.getElementById('rubro_adecuacion_llenado').value=((valor_total_llenado*100)/valor_total_costos).toFixed(1));


var rubro_adecuacion_fertilizado=parseFloat(document.getElementById('rubro_adecuacion_fertilizado').value=((valor_total_fertilizado*100)/valor_total_costos).toFixed(1));



// ---------|||||||||||||------AQUI ABAJO ES EL % DE RUBRO DE COSECHA DE PECES------------------|||||||||||||||||||--------------


var rubro_cosecha_atrape=parseFloat(document.getElementById('rubro_cosecha_atrape').value=((valor_total_atrape*100)/valor_total_costos).toFixed(1));

var rubro_cosecha_evicerado=parseFloat(document.getElementById('rubro_cosecha_evicerado').value=((valor_total_evicerado*100)/valor_total_costos).toFixed(1));

var rubro_cosecha_administracion=parseFloat(document.getElementById('rubro_cosecha_administracion').value=((valor_total_administracion*100)/valor_total_costos).toFixed(1));


var rubro_cosecha_manejo=parseFloat(document.getElementById('rubro_cosecha_manejo').value=((valor_total_manejo*100)/valor_total_costos).toFixed(1));

var rubro_cosecha_seguridad=parseFloat(document.getElementById('rubro_cosecha_seguridad').value=((valor_total_seguridad*100)/valor_total_costos).toFixed(1));

var rubro_cosecha_transporte=parseFloat(document.getElementById('rubro_cosecha_transporte').value=((valor_total_transporte*100)/valor_total_costos).toFixed(1));

var rubro_cosecha_sanidad=parseFloat(document.getElementById('rubro_cosecha_sanidad').value=((valor_total_sanidad*100)/valor_total_costos).toFixed(1));

var rubro_cosecha_varios=parseFloat(document.getElementById('rubro_cosecha_varios').value=((valor_total_varios*100)/valor_total_costos).toFixed(1));


var rubro_valor_total_costos=parseFloat(document.getElementById('rubro_valor_total_costos').value=(rubro_alevin_tilapia_roja+rubro_alimento_balanceado_45+rubro_alimento_balanceado_38+rubro_alimento_balanceado_32+rubro_alimento_balanceado_25+rubro_adecuacion_limpieza+rubro_adecuacion_encalcado+rubro_adecuacion_abonado+rubro_adecuacion_llenado+rubro_adecuacion_fertilizado+rubro_cosecha_atrape+rubro_cosecha_evicerado+rubro_cosecha_administracion+rubro_cosecha_manejo+rubro_cosecha_seguridad+rubro_cosecha_transporte+rubro_cosecha_sanidad+rubro_cosecha_varios));



// AQUI ABAJO ES LA TABLA PEQUEÑA DE INGRESOS

var valor_unitario_tilapia_roja=document.getElementById('valor_unitario_tilapia_roja').value;
var cantidad_venta_tilapia=document.getElementById('cantidad_venta_tilapia').value=kilos_vicerados;
var valor_total_ingresos=document.getElementById('valor_total_ingresos').value=(kilos_vicerados*valor_unitario_tilapia_roja).toFixed(1);



// AQUI ABAJO ES LA TABALA ULTIMA DE BENEFICIO ECONOMICO

var beneficio_economico=document.getElementById('beneficio_economico').value=(valor_total_ingresos-valor_total_costos).toFixed(1);



var valor_kilo=document.getElementById('valor_kilo').value=(valor_total_costos/kilos_vicerados).toFixed(1);


	}


	function exportar() {


// var formulario=document.getElementById("formulario").submit(); 

swal({
  title: "Advertencia",
  text: "Desea Exportar Esta Simulacion?",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#16e528",
  confirmButtonText: "Si, Exportar",
  cancelButtonText: "No, Cancelar",
  closeOnConfirm: true,
  closeOnCancel: true
},
function(isConfirm){
  if (isConfirm) {
var espejo_agua=document.getElementById("espejo_agua").type='text';
var densidad_cosecha=document.getElementById("densidad_cosecha").type='text';
var numero_peces_cosechar=document.getElementById("numero_peces_cosechar").type='text';
var porcentaje_mortalidad=document.getElementById("porcentaje_mortalidad").type='text';
var total_peces_sembrar=document.getElementById("total_peces_sembrar").type='text';
var kilos_producidos=document.getElementById("kilos_producidos").type='text';

var butlos_1000_peces=document.getElementById("butlos_1000_peces").type='text';

var total_Bultos=document.getElementById("total_Bultos").type='text';

// total_Bultos
var kilos_vicerados=document.getElementById("kilos_vicerados").type='text';
var valor_total_costos=document.getElementById("valor_total_costos").type='text';
var rubro_valor_total_costos=document.getElementById("rubro_valor_total_costos").type='text';
var cantidad_venta_tilapia=document.getElementById("cantidad_venta_tilapia").type='text';
var valor_unitario_tilapia_roja=document.getElementById("valor_unitario_tilapia_roja").type='text';
var valor_total_ingresos=document.getElementById("valor_total_ingresos").type='text';
var beneficio_economico=document.getElementById("beneficio_economico").type='text';


var formulario=document.getElementById('formulario').action="exportacion/exportar_simulacion.php";
$("#formulario").submit();


var espejo_agua=document.getElementById("espejo_agua").type='button';
var densidad_cosecha=document.getElementById("densidad_cosecha").type='button';
var numero_peces_cosechar=document.getElementById("numero_peces_cosechar").type='button';
var porcentaje_mortalidad=document.getElementById("porcentaje_mortalidad").type='button';
var total_peces_sembrar=document.getElementById("total_peces_sembrar").type='button';
var kilos_producidos=document.getElementById("kilos_producidos").type='button';

var butlos_1000_peces=document.getElementById("butlos_1000_peces").type='button';

var total_Bultos=document.getElementById("total_Bultos").type='button';

var kilos_vicerados=document.getElementById("kilos_vicerados").type='button';
var valor_total_costos=document.getElementById("valor_total_costos").type='button';
var rubro_valor_total_costos=document.getElementById("rubro_valor_total_costos").type='button';
var cantidad_venta_tilapia=document.getElementById("cantidad_venta_tilapia").type='button';
var valor_unitario_tilapia_roja=document.getElementById("valor_unitario_tilapia_roja").type='button';
var valor_total_ingresos=document.getElementById("valor_total_ingresos").type='button';
var beneficio_economico=document.getElementById("beneficio_economico").type='button';
 
  } else {

  }
});



}


</script>
</html>