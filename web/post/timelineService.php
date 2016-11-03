<?php 

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use DataAccess\postDataAccess as PostData;

require_once '../../data/fit-data/vendor/autoload.php';
require_once '../../data/data-access/postDataAccess.php';

$app = new \Slim\App;

$app->get('/', function (Request $request, Response $response) { 
    $dao = new PostData;
    $result = $dao->getPosts();

    return json_encode($result);
});

$app->get('/u={u}', function (Request $request, Response $response) { 
    
    $url = $request->getAttribute('u');

    $url = "http://" . $url;
    $url = str_replace("bbb", "aaa", $url);

    /*$urlContent = file_get_contents($url);
	preg_match('/<img(.*)/', $urlContent, $firstContent);
	foreach( $firstContent as $content ){		
		preg_match('/http([\w\W]*?)png|jpg/', $content, $finalContent);	*/	
	}
	return json_encode($url);
    
});

$app->run();