<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require_once '../vendor/autoload.php';



$app = new \Slim\App([]);



$app->get('[/]', function (Request $request, Response $response) {
    $response->getBody()->write("<ul>
                                    <li><a href='./ejercicios'>Ejercicios de la Cursada</a></li>
                                    <li><a href='./parcial'>Ejercicios del Parcial</a></li>
                                </ul>");
    return $response;

});


$app->run();