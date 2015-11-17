<?php

$app->get('/',           'ShopController@getIndex');
$app->get('/shops/{id}', 'ShopController@getShow');
$app->post('/shops',     'ShopController@postList');


$app->get('/api/index', function() {
    $c = new \App\Http\Controllers\Api\HotPepperController();
    return $c->getIndex();
});