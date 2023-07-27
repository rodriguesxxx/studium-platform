<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/teste', 'HomeController@teste');
$router->get('/login', 'LoginController@login');
$router->post('/login', 'LoginController@loginAction');
$router->get('/register', 'RegisterController@register');
$router->post('/register', 'RegisterController@registerAction');

