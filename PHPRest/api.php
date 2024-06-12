<?php
// Include necessary files
require_once 'core/routes/router.php';
require_once 'includes/config.php';
// Instantiate Router
$router = new Router($db);
// Define routes
$router->addRoute('GET', 'PHPRest/api.php/posts', 'PostController', 'index');
$router->addRoute('GET', 'PHPRest/api.php/posts/{id}', 'PostController', 'read');

// Dispatch request
$requestMethod = $_SERVER['REQUEST_METHOD'];
$requestPath = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$router->dispatch($requestMethod, $requestPath);
?>
