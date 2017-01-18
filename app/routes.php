<?php

$app->get('/', 'HomeController:index'); //index este numele functiei - vezi definitia in controler
$app->get('/auth/signup', 'AuthController:getSignUp'); //getSignUp este numele functiei - vezi definitia in controler

?>
