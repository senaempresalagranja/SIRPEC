<?php 

require_once('../../../exportarPdf/tcpdf.php');


// P ORIENTACION VERTICA
// L ORIENTACION HORIZONTAL
$pdf = new TCPDF("P", PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);


$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('SIRPEC');
$pdf->SetTitle('SIRPEC');
$pdf->SetSubject('GUILLERMO');
$pdf->SetKeywords('EXPORTAR SIMULACION');

// $pdf->SetPrintHeader(false); AQUI ES PARA QUE NO IMPRIMAR CABECERA
// $pdf->SetPrintFooter(false); AQUI ES PARA QUE NO SE IMPRIMA EL PIE DE PAGINA OSEA EL NUMERO DE LA PAGINA


// AQUI ES PARA LAS MARGENES EN LA HOJA PONGO 20 PORQUE SON MILIMETROS LO QUE PUSIMOS ARRIBA mm LAS MEDIDAS QUE VASMOS A UTILIZAR 
$pdf->SetMargins(20,20,20, false); 


// ------IMPORTANTE AQUI ABAJO NO TOCAR: AQUI ABAJO ES SI EN ALGUN CASO LLEGO A ESCRIBIR MUCHO CODIGO HTML Y SOBRE PASA LA HOJA SIMPLEMENTE ME PONGA OTRA HOJA COMO EN WORD VOY ESCRIBIENDO Y ME SACA OTRA HOJA SI AQUI ABAJO PONGO false NO ME VA SA LIR OTRA HOJA SI NO QUE EL CONTENIDO DE QUE SOBREPASE LA HOJA SE VA A PERDER
$pdf->SetAutoPageBreak(true, 20);

// NO TOCA AQUI ARRIBA ^^^^^^


// HEADER LOGO ES PARA PONER EL LOGO PARA CAMBIARLO TOCA A IR A AUTO CONFIGURADO Y CAMBIAR ESO POR DEFECTO CAMBIAR LA CARPTEA Y CAMBIAR LA IMAGEN
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'SIRPEC V2', '');


$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);


$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);


$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);


if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}


$pdf->SetFont('helvetica', '', 9);

// PONEMOS UNA PAGINA SI PONGO OTRO AddPage PONGO OTRA PAGINA ES DECIR SON PAGINAS
$pdf->AddPage();


$espejo=$_POST["espejo"];
$densidad=$_POST["densidad"];
$cosecha=$_POST["cosecha"];
$mortalidad=$_POST["mortalidad"];
$sembrar=$_POST["sembrar"];
$producidos=$_POST["producidos"];
$bultos=$_POST["bultos"];
$eviscerados=$_POST["eviscerados"];
$val_total=$_POST["val_total"];
$val_tot=$_POST["val_tot"];
$vent_tilapia=$_POST["vent_tilapia"];
$tila_roja=$_POST["tila_roja"];
$val_ingreso=$_POST["val_ingreso"];
$beneficio=$_POST["beneficio"];


// CONTENIDO DE HTML

// TERMINANDO EL HPT DOCUMENTO ME DI CUENTA QUE SE PUEDE HACER ESPACIADOS EN PDF NO SE PUEDEN HACER ESPACIADOS O CON CSS LEFT O RIGTH O MOVER ETC.. POR ESTA RAZON LO ESTABA HACIENDO HACIA ABAJO PERO ME PUSE HA ANALIZAR EL EJEMPLO 21 QUE HABIAN ESPACIADOS Y MIRE COMO SE HACIAS Y LO HICE Y NO ME FUNCIONO PORQUE LO HACIA CON <P> Y ESTA ETIQUETA HTML DA UN SALTO DE LINEA AUTOMATICO EL CODIGO PARA EL ESPACIADO ES ESTE PONERLO PARA REALIZAR DOS TABULADORES "&nbsp;  &nbsp;&nbsp;" CREO QUE TRES PERO MENOS MAL ME DI CUENTA XD JERR
					
$html = <<<EOD

	<style>   

	*{
				font-family: arial;
	}
h1{
position: relative;
display: block; 
	color: red;
		font-family: arial;
		font-size: 20pt;
text-align: center;


}
table,tr,td{

	border:1px solid black;
	border-collapse:collapse;
}
.titulo_tabla{

	position: relative;
	display: block;
	text-align: center;
}

	</style>

<br>
<h1>SIMULACION</h1>


<table class="table table-bordered">
<tr>
					<td>Nombre Finca</td>
					<td>Numero Estanque</td>
					<td>Numero Siembra</td>
					<td>Fecha</td>
					<td>Hora</td>
					<td>Cantidad Peces</td>
					<td>Peso Pez Entero</td>
					<td>Numero Estanque</td>
					<td>Peso Pez Evicerado</td>
					<td>Peso Pez Evicerado</td>
					<td>Peso Pez Evicerado</td>
					<td>Peso Pez Evicerado</td>
					<td>Peso Pez Evicerado</td>
					<td>Peso Pez Evicerado</td>
									
</tr>
<tr>
					<td>$nom_Finca</td>
					<td>$n_estanque</td>
					<td>$n_siembra</td>
					<td>$n_fecha</td>
					<td>$n_hora</td>
					<td>$can_peces</td>
					<td>$pe_entero</td>
					<td>$pe_evice</td>
					<td>$obervac</td>
					<td>$obervac</td>
					<td>$obervac</td>
					<td>$obervac</td>
					<td>$obervac</td>
					<td>$obervac</td>
					
</tr>
			
			</table>			
		








EOD;


// ESCRIBO EL CONTENIDP AL LA PAGINA
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);


$pdf->lastPage();

// ---------------------------------------------------------

// NOMBRE DEL ARCHIVO
$pdf->Output('FORMULARIO_SIMULACION.pdf', 'I');


// AQUI EN I ( I ES PARA VISUALIZACION EN LINEA PARA QUE SE ABRA EL PDF EN EL NACEGADOR Y "D" DESCARGA AUTOMATICA ) 




 ?>