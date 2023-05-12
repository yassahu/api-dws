<?php

$router = new \Bramus\Router\Router();
 
 
$router->setNamespace('\App');
 
/**
 * Definimos nuestras rutas
 */
$router->get('/', function() { echo "Bienvenido a la API de películas"; });
$router->get('/peliculas', function() { echo "Listado de todas las películas"; });
$router->get('/peliculas/(\d+)', function($id) { echo "Detalle de la película con id " . $id; });

$router->set404(function() {
    header('HTTP/1.1 404 Not Found');
    echo "Error 404: La ruta solicitada no existe";
});
 
$router->run();