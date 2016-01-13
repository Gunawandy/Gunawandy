<?php


Route::get('/auth/login', ['as'=>'user_auth_login',
	'uses'=>'Gunawandy\User\Http\Controllers\AuthController@loginForm']);
Route::post('/auth/proses-login', 'Gunawandy\User\Http\Controllers\AuthController@prosesLogin');
Route::get('/auth/logout', ['as'=>'user_auth_logout',
	'uses'=>'Gunawandy\User\Http\Controllers\AuthController@logout']);

//autentifikasi


//Must be logged in first!
Route::group(array('middleware'=>'auth'), function() {

	//Register petugas
	Route::get("/user/register", "Gunawandy\User\Http\Controllers\UserController@create");
	Route::post("/user/store", "Gunawandy\User\Http\Controllers\UserController@store");

	//User Management
	Route::get("/users", "Gunawandy\User\Http\Controllers\UserController@index");
	Route::get("/user", "Gunawandy\User\Http\Controllers\UserController@sellersUser");
	Route::get("/user/{id}/edit", "Gunawandy\User\Http\Controllers\UserController@edit");
	Route::post("/user/{id}/update", "Gunawandy\User\Http\Controllers\UserController@update");
	Route::get("/user/{id}/delete", "Gunawandy\User\Http\Controllers\UserController@delete");

	//Profile Management
	Route::get("/seller", "Gunawandy\User\Http\Controllers\ProfileController@index");
	Route::get("/profile", "Gunawandy\User\Http\Controllers\ProfileController@sellerProfile");
	Route::get("/profile/{id}", "Gunawandy\User\Http\Controllers\ProfileController@show")->where("id", "\d+");
	Route::get("/profile/{id}/edit", "Gunawandy\User\Http\Controllers\ProfileController@edit");
	Route::post("/profile/{id}/update", "Gunawandy\User\Http\Controllers\ProfileController@update");
});
?>