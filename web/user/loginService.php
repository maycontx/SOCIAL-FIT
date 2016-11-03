<?php 

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use DataAccess\userDataAccess as UserData;

require '../../data/fit-data/vendor/autoload.php';
require_once '../../data/data-access/userDataAccess.php';

$app = new \Slim\App;

$app->get('/a={e}&b={p}', function (Request $request, Response $response) {
    $email = $request->getAttribute('e');
    $password = $request->getAttribute('p');
    
    $dao = new UserData;
    $result = $dao->login($email, $password);

    return json_encode($result[0]);
});

$app->run();