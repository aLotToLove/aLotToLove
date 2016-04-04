<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return view('index');
});

$app->get('/howto', function () use ($app) {
    return view('howto');
});

$app->get('/grants', function () use ($app) {
    return view('grants');
});

$app->get('/inspiration', function () use ($app) {
    return view('inspiration');
});

$app->get('/getfunding', function () use ($app) {
    return view('getfunding');
});

$app->get('/contact', function () use ($app) {
    return view('contact');
});

