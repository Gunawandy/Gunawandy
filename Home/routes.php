<?php


//Landing
Route::get("/pfandy", function() {
	return view('GunawandyHome::index');
	
	});

//Construct
	Route::get("/home", "Gunawandy\Home\Http\Controllers\HomeController@index");
//middleware
	Route::group(array('middleware'=>'auth'), function() {
	
	Route::get('/success', function() {
		return view('GunawandyHome::info.success');
		});
	});



//info
	Route::get('/abort', function() {
	return view('GunawandyHome::info.abort');
	});
	Route::get('/escape', function() {
	return view('GunawandyHome::info.escape');
	});
	Route::get('/registered', function() {
	return view('GunawandyHome::info.registered');
	});
