<?php


$router->group(['prefix'=>'api'], function() use($router){

    $router->get('/items', 'affsub24afdController@index');
    $router->post('/PALogin', 'PAController@PaLogin');

});