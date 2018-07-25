<?php

$router->get('', 'TaskController@index');
$router->post('add', 'TaskController@add');
$router->get('delete', 'TaskController@delete');
