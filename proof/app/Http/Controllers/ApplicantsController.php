<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

class ApplicantsController extends Controller
{
	use AuthenticatesUsers;

	protected $loginView = 'loginApplicants.login';

	protected $guard = 'applicants';

	function __construct(){
		$this->middleware('auth:applicants', ['only' => ['secret']]);
	}

	public function authenticated(){
		return redirect('applicants/dashboard');
	}

	public function secret(){
		return view('applicants.dashboard');
	}
}
