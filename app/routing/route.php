<?php

use App\Routing\RouteDispatcher;
use App\Controllers;
$router=new AltoRouter();
$router->setBasePath("/E-Commerce/public");
$router->map('GET','/','App\Controllers\IndexController@index','Home');
$router->map('GET','/admin/create/categories','App\Controllers\CategoriesController@index','Categories Create');


new RouteDispatcher($router);