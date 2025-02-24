<?php

// return [
//     '/' =>  'controllers/home.php',
//     '/listings' => 'controllers/listings/index.php',
//     '/listings/create' => 'controllers/listings/create.php',
// ];


// $router->get('/','controllers/home.php');
// $router->get('/listings','controllers/listings/index.php');
// $router->get('/listings/create','controllers/listings/create.php');
// $router->get('/listing', 'controllers/listings/show.php');

$router->get('/','HomeController@index');
$router->get('/listings','ListingController@index');
$router->get('/listings/create','ListingController@create');
$router->get('/listings/edit/{id}','ListingController@edit');
$router->get('/listings/{id}','ListingController@show');

$router->post('/listings','ListingController@store');
$router->put('/listings/{id}','ListingController@update');
$router->delete('/listings/{id}','ListingController@destroy');