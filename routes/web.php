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

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->get('/key', function() {
    return str_random(32);
});

$router->group(['prefix' => 'api/v1','middleware'], function($router){

    $router->get('/getunit','Api\UnitController@getItem');
    $router->get('/getshowE','Api\ShowequipmentController@getItem');
    $router->get('/getshowC','Api\ShowchemicalController@getItem');
    $router->get('/getadviser','Api\AdviserController@getItem');
    $router->get('/getlistE','Api\ListequipmentController@getItem');
    $router->get('/getlistC','Api\ListchemicalController@getItem');

    $router->get('/getborrow','Api\BorrowController@getItem');
    $router->post('/postborrow','Api\BorrowController@postItem');
    $router->put('/putborrow/{id}','Api\BorrowController@putItem');
    $router->delete('/deleteborrow/{id}','Api\BorrowController@deleteItem');


    
 
});

// $router->get('',['middleware' => 'cors', function() {
//     return 'Yuo did it!';

// }]);

