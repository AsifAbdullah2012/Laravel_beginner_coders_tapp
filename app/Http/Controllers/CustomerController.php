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
    // here customer is the model/table
    // here $customer has to match with customer from the web.php file(where the route is created)
    public function show(\App\Customer $customer)
    {
        //$customer = \App\Customer::find($customerID); //grab all the values of customer by using the ID search
        // if the id is not found then it will generate a problem in laravel so we need to fix it.

        //$customer = \App\Customer::findOrFail($customerID);// this line will give a 404 not found error
        
        return view('customer.show', compact('customer'));
    }

    public function edit(\App\Customer $customer)
    {
        return view('customer.edit', compact('customer'));
    }

    public function update(\App\Customer $customer)
    {
        // here name and email should be same as database and form
        $data = request()->validate([
            'name'=>'required',
             'email'=>'required|email'
         ]);
        // here we are passing the updated data
        $customer->update($data);
        return redirect('/customers');
    }
}
