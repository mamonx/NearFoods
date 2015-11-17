<?php

$app->get('/', function () {
    $service = new \App\Components\Services\HotPepperService();
    return view('index', $service->index('array'));
});

$app->get('/api/index', function() {
    $c = new \App\Http\Controllers\Api\HotPepperController();
    return $c->getIndex();
});