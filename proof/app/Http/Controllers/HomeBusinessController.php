<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeBusinessController extends Controller
{
	public function index(){
		return view('business.home');
	}
}
