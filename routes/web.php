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