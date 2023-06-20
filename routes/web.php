<?php


$router->get('/', function () use ($router) {
    return $router->app->version();
});

// USER CONTROLLER ROUTES

$router->get('/users',['uses' => 'UserController@getUser']); //LISTUSER - show all user records

$router->get('/users/{id}', 'UserController@getID'); //GETIDUSER - gets user by id

$router->post('/users', 'UserController@addUser'); //ADDUSER - creates a new user

$router->put('/users/{id}', 'UserController@updateUser');  //UPDATEUSER - updates user records with put

$router->patch('/users/{id}', 'UserController@updateUser');  //UPDATEUSER - updates user records with patch

$router->delete('/users/{id}', 'UserController@deleteUser'); //DELETEUSER - delete an existing user




// USER JOB CONTROLLER ROUTES

$router->get('/usersjob','UserJobController@index');

$router->get('/userjob/{id}','UserJobController@show');