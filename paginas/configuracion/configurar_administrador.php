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


<link rel='stylesheet prefetch' href='../../iconn/css/font-awesome.min.css'>
<link rel="stylesheet" href="../../iconn/css/style.css">
<link rel="shortcut icon" type="image/x-icon" href="../../img/sirpec.ico" />

<link rel="stylesheet" type="text/css" href="../../css/normalize.css"/>         
<link rel="stylesheet" type="text/css" href=".././css/iconos.css"/>
<link rel="stylesheet" type="text/css" href="../../css/component.css" />
<script src="../../js/modernizr.custom.js"></script>     
<title>Contraseña</title> 
</head>
<body>

<div class="uset">
<div class="icl">
<a class="icon icon-user"  href="#"><?php echo "$fila[1]"; ?></a>
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
    <h1 class="help-block text-center ">Configurar Contraseña</h1>
  </div>  
    <div class="container">

<div class="row">
<br>

<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">


        <div class="form-group">
          <label for="">Rol</label>
          <div id="elemento_usuario">
            <input type="button" name="usuario"  class="form-control btn  filestyle"  id="usuario">
            <span class=""></span>
          </div>

        </div>
      </div>



 <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">


        <div class="form-group">
          <label for="dirreccion">Contraseña Actual</label>
          <div id="elemento_contraseña_actual">
            <input type="password" placeholder="Contraseña" name="contraseña_actual"  class="form-control filestyle"  id="contraseña_actual">
            <span class=""></span>
          </div>

        </div>
      </div>
 <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">


        <div class="form-group">
          <label for="dirreccion">Contraseña Nueva</label>
          <div id="elemento_contraseña_nueva">
            <input type="password" name="contraseña_nueva"  class="form-control filestyle"  id="contraseña_nueva">
            <span class=""></span>
          </div>

        </div>
      </div>

 <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">


        <div class="form-group">
          <label for="dirreccion">Repita Contraseña</label>
          <div id="elemento_repita_contraseña">
            <input type="password" name="repita_contraseña"  class="form-control filestyle"  id="repita_contraseña">
            <span class=""></span>
          </div>

        </div>
      </div>
<div class="col-md-1">

<a onclick="actualizar()" id="Actualizar" title="Actualizar Contraseña" class="icon-button refresh"><i class="fa fa-refresh"></i><span></span></a>

</div>


</div>

<div class="col-md-12" id="contenedor">
  


</div>
</div>


<?php 

$hot='localhost';
$usuario='root';
$contra='';
$base='sirpec';

$conexion=mysqli_connect($hot,$usuario,$contra,$base);
$query="SELECT * FROM usuario  WHERE Rol='Administrador'";

$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);

echo "<script>

var Usuario=document.getElementById('usuario').value='$fila[2]';
var contraseña_actual=document.getElementById('contraseña_actual').value='';
var contraseña_nueva=document.getElementById('contraseña_nueva').value='';
var repita_contraseña=document.getElementById('repita_contraseña').value='';


</script>";
 ?>


</body>

<script>
$(document).ready(function(){
    $(document).bind("contextmenu", function(e){
        return false;
    });
});

$(document).ready(inicio);

function contraseña_igual() {


var contraseña_nueva=document.getElementById('contraseña_nueva').value;
var repita_contraseña=document.getElementById('repita_contraseña').value;


if (contraseña_nueva==repita_contraseña) {

return true;


}else{


return false;


}



}


function actualizar() {
if ( validar_usuario()==true &&validar_contraseña_actual()==true && validar_contraseña_nueva()==true && validar_repita_contraseña()==true) {


if (contraseña_igual()==true) { 


var Usuario=document.getElementById('usuario').value;
var contraseña_actual=document.getElementById('contraseña_actual').value;
var contraseña_nueva=document.getElementById('contraseña_nueva').value;
$('#contenedor').load('actualizar_contrasena.php',{Usuario:Usuario,contraseña_actual:contraseña_actual,contraseña_nueva:contraseña_nueva});



}else{

swal("ERROR","Contraseñas Diferentes","error");
var contraseña_nueva=document.getElementById('contraseña_nueva').value='';
var repita_contraseña=document.getElementById('repita_contraseña').value='';


}


}else{
  swal("ERROR","Algunos Campos Estan Vacios o Incorrectos Porfavor Reviselos","error");


}
}
  

function inicio() {



$('#usuario').keyup(validar_usuario);
$("#contraseña_actual").keyup(validar_contraseña_actual);
$("#contraseña_nueva").keyup(validar_contraseña_nueva);
$("#repita_contraseña").keyup(validar_repita_contraseña);
$(document).keyup(contraseña_igual);
}


function validar_usuario () {
      var usuario=document.getElementById('usuario').value;
      if(usuario==null  || usuario.length==0 || /^\s+$/.test(usuario)){
        $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
        $("#elemento_usuario").attr("class", "form-group has-error  has-feedback");
        $("#usuario").parent().children("span").text("").show();
        $("#usuario").parent().append('<span id="icono_texto" class="icon icon-cancel-circle form-control-feedback"></span>');
        return false;

      }else if (isNaN(usuario)==false) {
        $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
        $("#elemento_usuario").attr("class", "form-group has-error has-feedback");
        $("#usuario").parent().children("span").text("").show();
        $("#usuario").parent().append('<span id="icono_texto" class="icon icon-cancel-circle form-control-feedback"></span>');
        return false;

      }else if (usuario.length>30) {
        $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
        $("#elemento_usuario").attr("class", "form-group has-error has-feedback");
        $("#usuario").parent().children("span").text("").show();
        $("#usuario").parent().append('<span id="icono_texto" class=" icon icon-cancel-circle form-control-feedback"></span>');
        return false;

      }else{


        $("#usuario").parent().children("span").text("").show();
        $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
        $("#elemento_usuario").attr("class", "form-group has-success has-feedback");
        $("#usuario").parent().append('<span id="icono_texto" class=" icon  icon-checkmark form-control-feedback"></span>');

        return true;
      }

}



    

 function validar_contraseña_actual () {
      var contraseña_actual=document.getElementById('contraseña_actual').value;
      if(contraseña_actual==null  || contraseña_actual.length==0 || /^\s+$/.test(contraseña_actual)){
        $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
        $("#elemento_contraseña_actual").attr("class", "form-group has-error  has-feedback");
        $("#contraseña_actual").parent().children("span").text("").show();
        $("#contraseña_actual").parent().append('<span id="icono_texto" class="icon icon-cancel-circle form-control-feedback"></span>');
        return false;

      }else if (contraseña_actual.length>70) {
        $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
        $("#elemento_contraseña_actual").attr("class", "form-group has-error has-feedback");
        $("#contraseña_actual").parent().children("span").text("").show();
        $("#contraseña_actual").parent().append('<span id="icono_texto" class=" icon icon-cancel-circle form-control-feedback"></span>');
        return false;

      }else{


        $("#email").parent().children("span").text("").show();
        $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
        $("#elemento_contraseña_actual").attr("class", "form-group has-success has-feedback");
        $("#contraseña_actual").parent().append('<span id="icono_texto" class=" icon  icon-checkmark form-control-feedback"></span>');

        return true;
      }

}


 function validar_contraseña_nueva () {
      var contraseña_nueva=document.getElementById('contraseña_nueva').value;
      if(contraseña_nueva==null  || contraseña_nueva.length==0 || /^\s+$/.test(contraseña_nueva)){
        $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
        $("#elemento_contraseña_nueva").attr("class", "form-group has-error  has-feedback");
        $("#contraseña_nueva").parent().children("span").text("").show();
        $("#contraseña_nueva").parent().append('<span id="icono_texto" class="icon icon-cancel-circle form-control-feedback"></span>');
        return false;

      }else if (contraseña_nueva.length>70) {
        $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
        $("#elemento_contraseña_nueva").attr("class", "form-group has-error has-feedback");
        $("#contraseña_nueva").parent().children("span").text("").show();
        $("#contraseña_nueva").parent().append('<span id="icono_texto" class=" icon icon-cancel-circle form-control-feedback"></span>');
        return false;

      }else{


        $("#contraseña_nueva").parent().children("span").text("").show();
        $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
        $("#elemento_contraseña_nueva").attr("class", "form-group has-success has-feedback");
        $("#contraseña_nueva").parent().append('<span id="icono_texto" class=" icon  icon-checkmark form-control-feedback"></span>');

        return true;
      }

}



function validar_repita_contraseña () {
      var repita_contraseña=document.getElementById('repita_contraseña').value;
      if(repita_contraseña==null  || repita_contraseña.length==0 || /^\s+$/.test(repita_contraseña)){
        $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
        $("#elemento_repita_contraseña").attr("class", "form-group has-error  has-feedback");
        $("#repita_contraseña").parent().children("span").text("").show();
        $("#repita_contraseña").parent().append('<span id="icono_texto" class="icon icon-cancel-circle form-control-feedback"></span>');
        return false;

      }else if (repita_contraseña.length>70) {
        $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
        $("#elemento_repita_contraseña").attr("class", "form-group has-error has-feedback");
        $("#repita_contraseña").parent().children("span").text("").show();
        $("#repita_contraseña").parent().append('<span id="icono_texto" class=" icon icon-cancel-circle form-control-feedback"></span>');
        return false;

      }else{


        $("#repita_contraseña").parent().children("span").text("").show();
        $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
        $("#elemento_repita_contraseña").attr("class", "form-group has-success has-feedback");
        $("#repita_contraseña").parent().append('<span id="icono_texto" class=" icon  icon-checkmark form-control-feedback"></span>');

        return true;
      }

}




</script>
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
  width: 90px ;
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
  left: 93%;  ;
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


.head{
  border-bottom: solid black 1px;
}
.grupo{
  display: block;
  position: relative;
  left: 550px;
  bottom: 280px;
}

.Excel, .Excel:hover{
text-decoration: none;
  color: green;
}

.pdf, .pdf:hover{
text-decoration: none;
  color: brown;
}
.titulo img{


  position: relative;display: block;
top: 46px;
left: 45px;
}
.titulo h1{
position: relative;
color: white;
left: 25px;
top: 40px;
}

.titulo{
width: 150px;
  height: 180px;
  z-index: 1;
  background: #A5DF00;
}

  

  .padre{
position: relative;
z-index: 2;

  }

  .dr-menu{
    z-index: 3;
    bottom: 565px;

  }

  .ca-menu{


    position: absolute;
    top: 440px;
    left: 200px;
  }


.actualizar{
  color: green;
}

.actualizar:hover{

  color: green;
  text-decoration: none;
}
  

</style>




       
    <script src="../../js/classie.js"></script>
    <script src="../../js/mlpushmenu.js"></script>
    <script>
      new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ), {
        type : 'cover'
      } );
      </script>
  </html>
