<?php 


/**
 * Twig
 */
require '../vendor/autoload.php';

/**
 * Error & exception handling
 */
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');

/**
 * Routing
 */

$router = new Core\Router();

// Add the routess
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('posts', ['controller' => 'Posts', 'action' => 'index']);
// $router->add('posts/new', ['controller' => 'Posts', 'action' => 'new']);

$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');
$router->add('admin/{controller}/{action}', ['namespace' => 'Admin']);

// Display the routing table
// echo '<pre>';
// var_dump($router->getRoutes());
// echo '<pre>';

// Match the requested route
// $url = $_SERVER['QUERY_STRING'];

// if($router->match($url)){
//     echo '<pre>';
//     var_dump($router->getRoutes());
//     echo '<pre>';
//     var_dump($router->getParams());
// }else {
//     echo "No route found for URL '$url'";
// }

$router->dispatch($_SERVER['QUERY_STRING']);
      
?>