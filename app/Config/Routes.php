<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/login', 'LoginController::validar');
$routes->get('/admin', 'AdminController::index');

$routes->get('/profile', 'UsuariosController::profile');
$routes->get('/usuarios/list', 'UsuariosController::listar');
$routes->resource('usuarios', ['controller' => 'UsuariosController']);

$routes->resource('roles', ['controller' => 'RolesController']);

$routes->resource('bitacora', ['controller' => 'BitacoraController']);

$routes->resource('personas', ['controller' => 'PersonasController']);
$routes->resource('gradoacademico', ['controller' => 'GradoController']);
$routes->resource('perfilevaluadores', ['controller' => 'PerfilEvaluadorController']);
$routes->resource('universidades', ['controller' => 'UniversidadController']);