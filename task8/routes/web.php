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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get("/home/create", "HomeController@create")->name("create");

Route::post("/home/store", "HomeController@store")->name("store");

Route::get("/home/edit/{id}","HomeController@edit")->name("edit");

Route::post("/admin/show/update","HomeController@update")->name("update");

Route::post("/home/delete", "HomeController@destroy")->name("delete");

Route::get("/home/show/{id}","HomeController@show")->name("show");



Route::get('/fail', function () {
    return "You can't edit posts";
})-> name("fail");



