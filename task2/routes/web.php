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

use Illuminate\Http\Request;


// Route::get('/', function () {
//     // return view('info.index');
//     return App\Products::get();
// });

Route::get("/","ProductsController@Function1")->name("toredirect");

Route::get("/create/products","ProductsController@create");

Route::post("/product/store","ProductsController@store")->name("store");

Route::get("/getinfo", function() {
	return view("info.form");
});
Route::post("/info",function(Request $req){
	$data=[
		[
			"name"=>$req->post()["name"]
		],

	];
	$data2=[
		[
			"lastname"=>$req->post()["lastname"]
		],

	];
	$data3=[
		[
			"address"=>$req->post()["address"]
		],

	];
	$data4=[
		[
			"biography"=>$req->post()["biography"]
		],

	];
	$data5=[
		[
			"birthday"=>$req->post()["birthday"]
		],

	];
	return view("info.table",
		        [
            'newdata' => $data,
            'newdata2' => $data2,
            'newdata3' => $data3,
            'newdata4'=> $data4,
            'newdata5' => $data5
        ]);
})->name("testpost");