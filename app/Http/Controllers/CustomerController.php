<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Customer;

class CustomerController extends Controller
{
    //
    public function index()
    {
    	$model = Customer::all();
    	return view('customer.index',['model'=>$model]);
    }

    public function create()
    {
    	return view('customer.create');
    }

    public function store(Request $request)
    {
    	$this->validate($request,
    							[
    								'first_name'=>'required|max:100',
    								'last_name'=>'required|max:100',
    								'email'=>'required|max:20',
    							]);
    	$model = new Customer();
    	$model->first_name = $request->first_name;
    	$model->last_name = $request->last_name;
    	$model->email = $request->email;
    	$model->date_of_birth = date('Y-m-d');
    	$model->save();
    }
}
