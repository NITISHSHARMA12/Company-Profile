<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	return view('layouts.index'); 
    }

    public function abouts()
    {
    	return 'hello Science';
    }

    public function contact()
    {
    	return view('layouts.contact_us');
    }
}
