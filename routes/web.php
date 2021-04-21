<?php

use Illuminate\Support\Facades\Route;

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

Route::get('login','LoginController@index')->name('login');
Route::post('login','LoginController@confirmLogin')->name('confirmLogin');

/*Route::resource('category','CategoryCotroller');*/
/*Route::get('/', function () {
    return view('website.index')->name('website');
});*/

Route::get('/','UserPostController@index')->name('posts');

Route::get('category_post','UserPostController@category')->name('category_post');
Route::get('singlepost/{id}','UserPostController@show')->name('singlepost');




Route::group(['middleware' => 'auth','prefix'=> 'admin'], function() {


Route::resource('posts','PostsController');
Route::get('logout','LoginController@logout')->name('logout');

Route::resource('users','UsersController');
Route::get('profile','ProfileController@index')->name('profile');
Route::get('header/{id}','HeadertopController@edit')->name('header');
Route::put('header/{id}','HeadertopController@update')->name('header_update');



});