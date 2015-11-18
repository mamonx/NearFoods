<?php

$app->get('/',           'ShopController@getIndex');
$app->post('/shops',     'ShopController@postList');
$app->get('/shops/{id}', 'ShopController@getShow');

$app->group([
    'namespace' => 'App\Http\Controllers\Api',
    'prefix'    => 'api'
], function ($app) {
    $app->post('shops',      'HotPepperController@postList');
    $app->post('shops/{id}', 'HotPepperController@postShow');
});