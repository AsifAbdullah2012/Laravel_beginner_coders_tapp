<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function index()
    {
        $customers = \App\Customer::all();
        return view('customer.index');
    }
}
