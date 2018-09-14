<?php

Route::get('/', function () {
	echo "hello world, now : ".date('Y-m-d H:i:s');
    //return view('welcome');
});
