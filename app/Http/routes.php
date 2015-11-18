<?php

$app->get('/',           'ShopController@getIndex');
$app->post('/shops',     'ShopController@postList');
$app->get('/shops/{id}', 'ShopController@getShow');

$app->group([
    'namespace' => 'App\Http\Controllers\Api',
    'prefix'    => 'api'
], function ($app) {
    $app->post('page/{id:[0-9]+}', 'HotPepperController@postPage');
    $app->post('shops/{id}',       'HotPepperController@postShow');
});