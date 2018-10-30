<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{

    public function login(){

		return view('auth.login');

	}

	public function doLogin(){

		$rules = [
			'username' => 'required',
			'password' => 'required|min:3'
		];

		$error = ['message' => 'Error'];

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()){
			return Redirect(route('login'))
				->withErrors($error);
		}else{
			$data = [
				'username' => Input::get('username'),
				'password' => Input::get('password')
			];

			if(auth()->attempt($data)){
				return redirect(route('admin.index'));
			}

			return redirect(route('login'))->withErrors($error);
		}

	}

	public function logout(){

		auth()->logout();
		return redirect(route('login'));

	}
}
