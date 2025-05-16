<?php
/**
 * DEBUG MODE
 */
ini_set('display_errors', 1); //muestra los errores en pantalla
error_reporting(E_ALL); //muestra todos los tipos de error

header("Access-Control-Allow-Origin: *"); //permite a cualquier frontend acceder
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS"); //le indica al nav q http acepta el back
header("Access-Control-Allow-Headers: Content-Type"); //permite enviar encabezados personalizados

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') { 
    http_response_code(200);
    exit();
}

require_once("./routes/studentsRoutes.php"); //incluye el archivo que define las rutas o la logica
/*
require_once("routes/nuevomoduloRoutes.php"); si creo un nuevo archivo lo llamo aca
*/
?>
