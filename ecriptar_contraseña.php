<?php 

$salt='AZC·$%9742#¬~€~¬~#bsg35679#~€¬$)%1243';


$contraseña="Sirpec17#09";
$contraseña=password_hash($salt .$contraseña, PASSWORD_DEFAULT,["cost"=> 12]);
echo "contraseña";
 ?>