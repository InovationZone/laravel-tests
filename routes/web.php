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


//define route get
//route name - controller@method
Route::get('example', 'WelcomeController@example');
Route::get('posts', 'PostController@index');
Route::get('posts/create', 'PostController@create');

//route with  paramater
Route::get('category/{category}', function($id){
    $category = new \App\Models\Category();
    $c = $category->find($id);

    return $c->name;
});


//create a service
//bind - create multiple instances
//singleton - keep the same instance
/*App::singleton('logExample' , function ($app){
   return 'Log registrado';
});


// call service
$example = App::make('logExample');
//dd($example);*/

/*$Person = new Person;
App::instance('Pessoa',Person);

dd(app::make('Person'));*/