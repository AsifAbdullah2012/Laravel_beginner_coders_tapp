<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        // here we are taking all values from the customer table
        $customers = \App\Customer::all();
        // we are calling the customer.index php file
        return view('customer.index', compact('customers'));
    }
    public function create()
    {
        return view('Customer.create');
    }

    public function store()
    {
        $data = request()->validate([
           'name'=>'required',
            'email'=>'required|email'
        ]);

        \App\Customer::create($data);
        return redirect('/customers');
    }
}
