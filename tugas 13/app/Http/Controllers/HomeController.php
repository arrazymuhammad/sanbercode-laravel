<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
	function index(){
		return view('index');
	}

	function dataTables(){
		return view('data-tables');
	}
}
