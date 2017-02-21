<?php namespace App;

use \Core\Router;

$router = new Router();
$router->add('/',['uses'=> 'HomeController@index']);
$router->add('/series',['uses'=> 'SeriesController@index']);
$router->add('/series/[slug]','SeriesController@series');
//$router->add('/series/{slug}/episode/{id}' ,['uses' => 'SeriesController@episode','namespace' =>'Admin']);
$router->add('/series/{slug}/episode/{id}' ,'SeriesController@episode');





$router->dispatch($_SERVER["QUERY_STRING"]);
return $router;