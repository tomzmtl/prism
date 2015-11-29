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

$app->get( '/', 'PageController@index' );

$app->group(
[
    'prefix' => 'api',
    'namespace' => 'App\Http\Controllers'
],
function ($app)
{
    $app->get( 'get', 'ApiController@getColor');
});
