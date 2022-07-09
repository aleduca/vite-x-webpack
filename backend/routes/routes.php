<?php

use app\database\Connection;
use Slim\http\Response;
use Psr\Http\Message\ServerRequestInterface as Request;

return function ($app) {
    $app->get('/api/users', function (Request $request, Response $response, array $args) {
        $connection = Connection::getConnection();
        
        $prepare = $connection->prepare("select * from users");
        $prepare->execute();

        $users = $prepare->fetchAll();
        
        return $response->withJson($users);
    });
};
