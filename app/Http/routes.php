<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$router->get('', ['as' => 'index', 'uses' => 'IndexController@index']);

// Authentication routes...
$router->get('login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
$router->post('login', ['as' => 'login-post', 'uses' => 'Auth\AuthController@postLogin']);
$router->get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);
$router->get('forgot', ['as' => 'forgot', 'uses' => 'Auth\AuthController@getForgot']);

// Password reset link request routes...
$router->get('forgot', ['as' => 'forgot', 'uses' => 'Auth\PasswordController@getEmail']);
$router->post('forgot', ['as' => 'forgot-post', 'uses' => 'Auth\PasswordController@postEmail']);

// Password reset routes...
$router->get('password/reset/{token}', ['as' => 'reset', 'uses' => 'Auth\PasswordController@getReset']);
$router->post('password/reset', ['as' => 'reset-post', 'uses' => 'Auth\PasswordController@postReset']);

// Registration routes...
$router->get('register', ['as' => 'register', 'uses' => 'Auth\AuthController@getRegister']);
$router->post('register', ['as' => 'register-post', 'uses' => 'Auth\AuthController@postRegister']);

$router->get('admin', ['as' => 'admin', 'uses' => 'AdminController@index']);

$router->get('users/admin', ['as' => 'users.admin', 'uses' => 'UsersController@admin']);
$router->put('users/{users}/ban', ['as' => 'users.ban', 'uses' => 'UsersController@ban']);
$router->resource('users', 'UsersController');

$router->get('contents/admin', ['as' => 'contents.admin', 'uses' => 'ContentsController@admin']);
$router->resource('contents', 'ContentsController');
