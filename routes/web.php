<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->post('login', 'LoginController@login');
$router->post('create', 'UserController@create');

// aplicamos el middleware auth
//$router->group(['middleware' => 'auth'], function() use ($router){
  
  // aqui van todas las rutas que se necesitar estar autenticado para el acceso
  // $router->post('logout', 'LoginController@logout');
	$router->get('profile', 'UserController@profile');

	$router->post('ftp/upload', 'FtpController@upload');
	$router->get('ftp/download', 'FtpController@download');

//});