<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdministratorsController extends Controller
{
	use AuthenticatesUsers;

	protected $loginView = 'loginAdministrators.login';

	protected $guard = 'admins';

	function __construct(){
		$this->middleware('auth:admins', ['only' => ['secret']]);
	}

	public function authenticated(){
		return redirect('admins/dashboard');
	}

	public function secret(){
		return view('admins.dashboard');
	}
}
