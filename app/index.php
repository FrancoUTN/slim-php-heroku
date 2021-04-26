<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require_once '../vendor/autoload.php';



$app = new \Slim\App([]);



$app->get('[/]', function (Request $request, Response $response) {    
    // $response->getBody()->write("<a href='./ejer6.php'>Ejercicio 6</a>");
    $response->getBody()->write("<a href='./ejercicios.php'>Ejercicios de la Cursada</a>");
    $response->getBody()->write("<a href='./parcial.php'>Ejercicios del Parcial</a>");
    return $response;

});


$app->run();