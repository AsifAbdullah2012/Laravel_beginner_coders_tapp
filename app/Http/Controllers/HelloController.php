<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function about()
    {
        return view('about');
    }
    public function services()
    {
        $services = [
            'service from controller 1',
            'service from controller 2',
            'service from controller 3',
            'service from controller 4',
            'service from controller 5',
        ];
        return view('services', compact('services'));
    }
}
