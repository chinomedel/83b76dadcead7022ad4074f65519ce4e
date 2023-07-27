<?php
// Parámetros de conexión a la base de datos
$host = "localhost";
$username = "nelsonme_iotemmes";
$password = "Emmes_2023";
$database = "nelsonme_iotemmes";

// Establecer la conexión
$conn = mysqli_connect($host, $username, $password, $database);

// Verificar la conexión
if (!$conn) {
   
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
    
}

?>