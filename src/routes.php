<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/home', 'HomeController@index');
$router->get('/profile', 'ProfileController@profile');
$router->get('/news', 'NewsController@news');
$router->get('/login', 'LoginController@login');
$router->post('/login', 'LoginController@loginAction');
$router->get('/register', 'RegisterController@register');
$router->post('/register', 'RegisterController@registerAction');
$router->get('/forgot', 'ForgotController@forgot');
$router->post('/forgot', 'ForgotController@forgotAction');
$router->get('/change/{id}', 'ChangeController@change');
$router->post('/change', 'ChangeController@changeAction');

