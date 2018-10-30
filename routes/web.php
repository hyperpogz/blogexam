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

Route::get('/', [
	'uses' => 'BlogController@index',
	'as' => 'index'
]);

Route::get('/post/{id}/{slugs}', [
	'uses' => 'BlogController@show',
	'as' => 'post.single-post'
]);

Route::get('/posts/archive', [
	'uses' => 'BlogController@archive',
	'as' => 'posts.archive'
]);

Route::group(['middleware' => 'guest'], function(){

	Route::get('/admin', [
		'uses' => 'Auth\LoginController@login',
		'as' => 'login'
	]);

	Route::post('/login', [
		'uses' => 'Auth\LoginController@doLogin',
		'as' => 'doLogin'
	]);

});

Route::group(['middleware' => 'auth', 'prefix' => '/admin'], function(){

	Route::get('/listing', [
		'uses' => 'AdminController@index',
		'as' => 'admin.index'
	]);

	Route::group(['prefix' => 'post'], function(){

		Route::get('/create', [
			'uses' => 'AdminController@create',
			'as' => 'admin.post.create'
		]);

		Route::post('/save', [
			'uses' => 'AdminController@save',
			'as' => 'admin.post.save'
		]);

		Route::get('/edit/{id}', [
			'uses' => 'AdminController@edit',
			'as' => 'admin.post.edit'
		]);

		Route::get('/delete/{id}', [
			'uses' => 'AdminController@delete',
			'as' => 'admin.post.delete'
		]);

		Route::get('/logout', [
			'uses' => 'Auth\LoginController@logout',
			'as' => 'logout'
		]);

	});
	
});


