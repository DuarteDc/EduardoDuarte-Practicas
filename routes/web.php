<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!  Route::get('Helloworld'; function () { 
    return '<h1>Hello World Carlos</h1>';
});
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('prueba', function(){
    return View::make('prueba');
});

Route::get('alumnos', 'alumnos@index');




/*Route:get(‘Helloworld’ function(){ return ‘<h1>Hello World Carlos</h1>’});
From Bonifacio to Everyone:  08:23 AM
return view(helloworld);
 */