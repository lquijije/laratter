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
	$links = [
		'https://platzi.com/laravel' => 'Curso de laravel',
		'https://laravel.com'=> 'WebSite de Laravel'
	];
    return view('welcome',[
    	'teacher' => 'Guido Contreras',
    	'links' => $links
    ]);
});


Route::get('/about',function(){
	return view('about');
});