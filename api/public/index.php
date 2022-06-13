<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../classes/Common_Model.php';
require __DIR__ . '/../classes/actions/skynet.php';
require __DIR__ . '/../classes/actions/dawnwing.php';

$app = AppFactory::create();
$app->setBasePath('/ideliver/api');
$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello Ideliver!");
    return $response;
});

$app->get('/token', function (Request $request, Response $response, $args) {

    $model = new Common_Model();

    $response->getBody()->write($model->token());

    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(201);

});
$app->get('/token/dawnwing', function (Request $request, Response $response, $args) {

    $model = new dawnwing();

    $response->getBody()->write($model->token());

    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(201);

});

$app->post('/validate', function (Request $request, Response $response, $args) {

    $params = $request->getParsedBody();

    $model = new skynet();

    $response->getBody()->write($model->ValidateSuburbPostalCode($params));

    return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(201);

});

$app->post('/GetQuote/skynet', function (Request $request, Response $response, $args) {

    $params = $request->getParsedBody();

    $model = new skynet();

    $response->getBody()->write($model->GetQuote($params));

    return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(201);

});
$app->post('/GetQuote/dawnwing', function (Request $request, Response $response, $args) {

    $params = $request->getParsedBody();

    $model = new dawnwing();

    $response->getBody()->write($model->getQuote($params));

    return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(201);

});
$app->post('/waybill/dawnwing', function (Request $request, Response $response, $args) {

    $params = $request->getParsedBody();

    $model = new dawnwing();

    $response->getBody()->write($model->getWaybill($params));

    return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(201);

});


$app->run();