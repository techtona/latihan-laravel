<?php

Route::get('/', function () {
	// echo "hello world, now : ".date('Y-m-d H:i:s');
    return view('welcome');
});

Route::get('/hello','HelloController@index')->name('hello.index');

// untuk belajar bootstrap 3
// Route::get('test',function(){
// 	return view('test');
// })->name('test');

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

Route::get('test_store', function(){
	//select data
	// $store = \App\Store::limit(10)->get();

	//die and dump
	// dd($store);

	//insert data
	$data = [
		'store_id'	=> 1,
		'first_name'=> 'Lorem',
		'last_name'	=> 'Ipsum',
		'email'		=> 'lorem@ipsum.com',
		'address_id'	=> 1,
		'active'	=> '1'
	];

	\App\Customer::create($data);

	// insert 

	$c = new \App\Customer();
	$c->store_id = '1';
	$c->first_name = 'Selamat';
	$c->last_name = 'Siang';
	$c->email = 'selamat@siang.com';
	$c->address_id = '1';
	$c->active = '1';
	$c->save();

	return "sukses";
});


Route::get('test_create','TestController@create');

Route::get('test_update/{customer_id}','TestController@update');
Route::get('test_delete/{customer_id}','TestController@delete');
