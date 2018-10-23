<?php

Route::get('/', function () {
	// echo "hello world, now : ".date('Y-m-d H:i:s');
    return view('welcome');
});

Route::get('/hello','HelloController@index')->name('hello.index');

// untuk belajar bootstrap 3
Route::get('test',function(){
	return view('test');
})->name('test');

Route::get('blank',function(){
	return view('blank');
})->name('blank');

/*
	membuat route baru dengan view baru mengimplementasikan extending layout dan components
*/
Route::get('chart',function(){
	return view('chart');
})->name('chart');


Route::get('test_db','HelloController@test_db')->name('test_db');

Route::get('customer','HelloController@customer');