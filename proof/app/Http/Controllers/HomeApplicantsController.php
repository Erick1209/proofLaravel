<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeApplicantsController extends Controller
{
	public function index(){
		return view('applicants.home');
	}
}
