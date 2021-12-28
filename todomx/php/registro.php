<?php 
 $host="localhost";
 $user="root";


 $connection = mysqli_connect($host, $user);


$nombre=$_POST["nombre"];
$edad=$_POST["edad"];
$contacto=$_POST["contacto"];
$oficio=$_POST["oficio"];


$basededatos = "registro";

$db = mysqli_select_db($connection, $basededatos);


$instruction_sql = "INSERT INTO usuarios
(nombre, edad, contacto, oficio)
values ('$nombre', '$edad', '$contacto', '$oficio')";

if ($connection) {
    echo "gracias por registarte";
}


$resultado = mysqli_query($connection, $instruction_sql);


?>


