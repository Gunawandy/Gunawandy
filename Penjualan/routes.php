<?php
//Guest's Pages
Route::get("/contact", "Gunawandy\User\Http\Controllers\ProfileController@contact");
Route::get("/listisp", "Gunawandy\Penjualan\Http\Controllers\IspController@show");

//Register Mahasiswa
Route::get("/ksm/register", "Gunawandy\Penjualan\Http\Controllers\KsmController@create");
Route::post("/ksm/store", "Gunawandy\Penjualan\Http\Controllers\KsmController@store");

//Must be login first!
Route::group(array('middleware'=>'auth'), function() {


	Route::get("/members", "Gunawandy\Penjualan\Http\Controllers\KsmController@index");
	Route::get("/mbr", "Gunawandy\Penjualan\Http\Controllers\KsmController@konsumen");
	Route::get("/members/{id}", "Gunawandy\Penjualan\Http\Controllers\KsmController@show")->where("id", "\d+");
	Route::get("/members/{id}/edit", "Gunawandy\Penjualan\Http\Controllers\KsmController@edit");
	Route::post("/members/{id}/update", "Gunawandy\Penjualan\Http\Controllers\KsmController@update");
	Route::get("/members/{id}/delete", "Gunawandy\Penjualan\Http\Controllers\KsmController@delete");
	Route::get("/members/{id}/jual", "Gunawandy\Penjualan\Http\Controllers\KsmController@jual");
	Route::get("/mbr/{id}/jual", "Gunawandy\Penjualan\Http\Controllers\KsmController@jual2");
	Route::post("/members/{id}/prosesjual", "Gunawandy\Penjualan\Http\Controllers\KsmController@prosesjual");
	Route::post("/mbr/{id}/prosesjual2", "Gunawandy\Penjualan\Http\Controllers\KsmController@prosesjual2");


	Route::get("/isp", "Gunawandy\Penjualan\Http\Controllers\IspController@index");
	Route::get("/isp/create", "Gunawandy\Penjualan\Http\Controllers\IspController@create");
	Route::post("/isp/store", "Gunawandy\Penjualan\Http\Controllers\IspController@store");
	Route::get("/isp/{id}/edit", "Gunawandy\Penjualan\Http\Controllers\IspController@edit");
	Route::post("/isp/{id}/update", "Gunawandy\Penjualan\Http\Controllers\IspController@update");
	Route::get("/isp/{id}/delete", "Gunawandy\Penjualan\Http\Controllers\IspController@delete");

	Route::get("/penjualan", "Gunawandy\Penjualan\Http\Controllers\PenjualanController@index");
	Route::get("/penjualan/create", "Gunawandy\Penjualan\Http\Controllers\PenjualanController@create");
	Route::post("/penjualan/store", "Gunawandy\Penjualan\Http\Controllers\PenjualanController@store");
	Route::get("/penjualan/{id}/edit", "Gunawandy\Penjualan\Http\Controllers\PenjualanController@edit");
	Route::post("/penjualan/{id}/update", "Gunawandy\Penjualan\Http\Controllers\PenjualanController@update");
	Route::get("/penjualan/{id}/delete", "Gunawandy\Penjualan\Http\Controllers\PenjualanController@delete");
});
?>