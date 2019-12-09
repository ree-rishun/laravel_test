<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test/{param}', function ($param) {

    $html = <<<EOF
    
    <html>
    <head>
    
    </head>
    <body>
        <h1>{$param}</h1>
    </body>
    </html>

EOF;


    return $html;
});

Route::get('/param/{param?}', function ($param="empty") {

    $html = <<<EOF
    
    <html>
    <head>
    
    </head>
    <body>
        <h1>{$param}</h1>
    </body>
    </html>

EOF;


    return $html;
});


Route::get('/controller/{id?}', 'HelloController@index');
