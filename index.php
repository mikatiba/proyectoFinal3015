<?php
// Incluye la configuración de la base de datos
require_once('./app/config/Database.php');

//incluye los modelos y controladores necesarios
require_once './app/models/UserModel.php';
require_once './app/controllers/UserController.php';

require_once './app/models/ProductModel.php';
require_once './app/controllers/ProductController.php';

// Añadir aquí los controladores y modelos nuevos
//Verifica el método de solicitud HTTP
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Captura todos los datos POST

    $url = isset($_GET['url']) ? explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL)) : [];
    //si es GET, captura todos los dato del URL
    $controller = isset($url[0]) ? ucwords($url[0]) . 'Controller' : 'HomeController';
    $method = isset($url[1]) ? $url[1] : 'index';
    $id = isset($url[2]) ? $url[2] : null;
}
else {
    //analizar el URL y extraer su contenido
    $url = isset($_GET['url']) ? explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL)) : [];

    //determina el controlador, método y ID del URL
    $controller = isset($url[0]) ? ucwords($url[0]) . 'Controller' : 'HomeController';
    $method = isset($url[1]) ? $url[1] : 'index';
    $id = isset($url[2]) ? $url[2] : null;

    $datos = $_POST;
}
//verificar si existe el archivo del controlador
if (file_exists('./app/controllers/' . $controller . '.php')) {
    require_once './app/controllers/' . $controller . '.php';
    $controller = new $controller;

    //verificar si el método existe
    if (method_exists($controller, $method)) {

        if (isset($id)) {
            if (isset($datos)) {
                $controller->$method($datos);
            }
            else
                $controller->$method($id);
        } else {
            $controller->$method();
        }
    } else {
        // Método no encontrado, cargar vista de error o redirigir
    }
} else {
    // Controlador no encontrado, cargar vista de error o redirigir
    // Si no hay un controlador, cargar la pagina de inicio

    require_once './app/views/home.php';
}
