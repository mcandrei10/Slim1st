<?php

use App\Middleware\AuthMiddleware;
use App\Middleware\GuestMiddleware;

$app->get('/', 'HomeController:index')->setName('home'); //index este numele functiei - vezi definitia in controler

$app->group('', function () {
  // routes Sign Up
  $this->get('/auth/signup', 'AuthController:getSignUp')->setName('auth.signup'); // getSignUp este numele functiei, conform mentiunii setName ea va fi referentiata cu auth.signup - vezi referinta in AuthControler.php
  $this->post('/auth/signup', 'AuthController:postSignUp'); // aceasta route preia requesturi de tip POST, conform mentiunii setName ea va fi referentiata cu auth.signup
  //

  // routes Sign In
  $this->get('/auth/signin', 'AuthController:getSignIn')->setName('auth.signin'); // getSignUp este numele functiei, conform mentiunii setName ruta va fi referentiata cu auth.signin - vezi referinta in AuthControler.php
  $this->post('/auth/signin', 'AuthController:postSignIn'); // aceasta route preia requesturi de tip POST, conform mentiunii setName ruta va fi referentiata cu auth.signup
  //
})->add(new GuestMiddleware($container));


$app->group('', function () {
  // routes Sign In
  $this->get('/auth/signout', 'AuthController:getSignOut')->setName('auth.signout');
  //

  // routes Password
  $this->get('/auth/password/change', 'PasswordController:getChangePassword')->setName('auth.password.change'); // route Change password
  $this->post('/auth/password/change', 'PasswordController:postChangePassword');
  //
})->add(new AuthMiddleware($container));
?>
