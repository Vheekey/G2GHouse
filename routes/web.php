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
use GuzzleHttp\Client;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/notifications', function () {
    return view('notifications');
});
Route::get('/programme', function () {
    return view('programme');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/adminGallery', function () {
    return view('adminGallery');
});
Route::get('/getThumbnail', function () {
    return view('getThumbnail');
});
Route::get('/display/{id}', function ($id) {
    return view('display')->with('id', $id);
});


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/displayers', 'HomeController@displayGallery')->name('displayers');
//Route::post('/contact', 'HomeController@contact');
Route::post('contact', 'HomeController@contact')->name('contact');
Route::post('upload', 'AdminController@upload')->name('upload');
Route::post('uploadProgramme', 'AdminController@uploadProgramme')->name('uploadProgramme');
Route::post('setImage', 'HomeController@displayImage')->name('displayImage');
Route::post('getVideo', 'HomeController@getVideo')->name('getVideo');
Route::post('getCategories', 'HomeController@getThumbnail')->name('getCategories');
Route::post('uploadGallery', 'AdminController@newGallery')->name('uploadGallery');
Route::post('uploadThumbnail', 'AdminController@thumbnail')->name('uploadThumbnail');
//Route::post('contact', [ 'as' => 'contact', 'uses' => 'HomeController@contact']);
