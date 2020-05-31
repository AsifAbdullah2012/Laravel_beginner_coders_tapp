<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

// commenting is very important so always try to comment every thing

class ServiceController extends Controller
{
    public function index()
    {
        $services = \App\Service::all();

        return view('service.index', compact('services'));
    }

    public function store()
    {

        // we have to check the vaalidation of the text field so that the client can not submit an  empty form
        // to validate we have to use validate request
        
        $data = request()->validate([
            // in this parameter we will pass an array where we will write down every text field that we have
            'name' => 'required|min:5|max:20'// here required is a rule and we have to match this rule, the input is not blank
            // we can use as many validation rule as we want by typping '|'
            // service with minimum of 5 and maximum of 20 characters
            // for validation rule go laravel documentation > basics > available validation rules
            ]);
     

        // creating a service variable, that has the same structure of the service table
        // we will access this just like a table class with several variable
        $service = new \App\Service();// access a brand new service model

        // we are saving in the name field
        $service->name = request('name');

        // we have to save in the database

        $service->save();

        //here name is the text field name, so we are getting data from the text field
        // simply 'request' funtion will search for the name text
        //dd(request('name')); // this is used to check if we hit the proper place or not
        // we have to redirect back to the same  page after pushing the dat in the database
        
        return redirect()->back();
    }
}
