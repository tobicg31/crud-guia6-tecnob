<?php
require_once("./config/databaseConfig.php");//incluye archivo de configuracion
require_once("./controllers/studentsController.php");//incluyo arch de funciones

switch ($_SERVER['REQUEST_METHOD']) { //revisa que metodo se uso
    case 'GET':
        handleGet($conn);
        break;
    case 'POST':
        handlePost($conn);
        break;
    case 'PUT':
        handlePut($conn);
        break;
    case 'DELETE':
        handleDelete($conn);
        break;
    default: //si no es ninguna de las opciones ant se tira error 405 y un mensaje
        http_response_code(405);
        echo json_encode(["error" => "Método no permitido"]);
        break;
}
?>