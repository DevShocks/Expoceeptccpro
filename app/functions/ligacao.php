<?php

 include 'login.php'; 

$hostname = "localhost"; /* hospedagem na maquina*/
$bancodedados = "db_expoceep";/*nome do banco*/
$usuario = "root"; /*no xamp usa root*/
$senha = ""; /*senha do banco*/

$bd_feira = new mysqli($hostname, $usuario, $senha,  $bancodedados);
if ($bd_feira->connect_errno) {
    echo "Falha ao conectar: (" . $bd_feira->connect_errno . ")" . $bd_feira->connect_error;
}
?>