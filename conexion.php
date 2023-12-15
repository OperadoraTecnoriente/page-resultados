<?php


$servername ='localhost';
$username = 'mainuser2';
$pass = '6w3^aF5f8';
$dbname = 'db_sorteos3';


$conexion = mysqli_connect($servername,$username,$pass,$dbname);

if($conexion) { 
   // echo "Conexion establecida";
}else{
     echo "Conexion no se pudo establecer";
     die( print_r( sqlsrv_errors(), true));
}



?>