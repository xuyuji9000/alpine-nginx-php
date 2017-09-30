<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/', function($request, $response, $args){
    $response->getBody()->write('This is Home!');
    return $response;
});
$app->get('/index', App\Controllers\IndexController::class.':home');
$app->get('/db', App\Controllers\DBController::class.':index');
$app->get('/uploadimage/view', App\Controllers\UploadImageController::class.':view');
$app->post('/uploadimage/upload', App\Controllers\UploadImageController::class.':upload');
