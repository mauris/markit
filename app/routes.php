<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::any('{slug}', function ($slug) {
    $controller = new Mauris\Markit\RenderController();
    return $controller->render($slug);
})->where('slug', '([A-z\d-\/_.]+)?');
