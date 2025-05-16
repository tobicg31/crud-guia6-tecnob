<?php

//se definen las credenciales de conexion:
$host = "localhost";
$user = "students_user";
$password = "12345";
$database = "students_db";

$conn = new mysqli($host, $user, $password, $database); //se crea un objeto con las credenciales

if ($conn->connect_error) { //verifica si hubo algun error en la conexion
    http_response_code(500);
    die(json_encode(["error" => "Database connection failed"]));
}
?>