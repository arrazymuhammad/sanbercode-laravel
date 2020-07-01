<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
    	return view('index');
    }
    public function welcome()
    {
    	$data['f_name'] = request()->f_name;
    	$data['l_name'] = request()->l_name;
    	return view('welcome', $data);
    }
}
