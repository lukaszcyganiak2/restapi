<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

//  require '../../../vendor/autoload.php';

$app = new Slim\App;

// get all books

$app->get('/api/books', function(Request $request, Response $response) {
  echo "sssssssssssss";
});