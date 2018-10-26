<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class TestController extends Controller
{
    public function create(Request $request)
    {
    	// dd($request->first_name);

    	// query insert dengan eloquent
    	$c = new Customer();
		$c->store_id = $request->store_id;
		$c->first_name = $request->first_name;
		$c->last_name = $request->last_name;
		$c->email = $request->email;
		$c->address_id = $request->address_id;
		$c->active = $request->active;
		$c->save();

    	return "sukses";
    }

    public function update(Request $request, $customer_id){
    	//cek isi customer id
    	// dd($customer_id);

    	$c = Customer::where('customer_id',$customer_id)->first();
		$c->store_id = $request->store_id;
		$c->first_name = $request->first_name;
		$c->last_name = $request->last_name;
		$c->email = $request->email;
		$c->address_id = $request->address_id;
		$c->active = $request->active;
		$c->save();

		return "sukses";

    }

    public function delete($customer_id){
    	Customer::where('customer_id',$customer_id)->delete();

    	return "sukses";
    }

}
