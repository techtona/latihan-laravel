<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
    	$data['nama'] = 'Lorem Ipsum 2';
    	
    	// call welcome.blade.php
    	return view('hello',$data);
    }
}
