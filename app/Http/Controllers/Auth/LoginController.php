<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

use App\Helpers\Helpers as Help;
use Auth;

class LoginController extends Controller
{
    public function login(Request $request){
		return Auth::user() ? redirect()->route('dashboard.main') : view('auth.main');
	}
	public function doLogin(Request $request){
		if(User::where('username',$request->username)->first() && Auth::attempt($request->only('username','password'))){
			return Help::resHttp(['code'=>200,'message'=>'Login successful!']);
		}
		return Help::resHttp(['code'=>401,'message'=>'Username atau password tidak valid!']);
	}
	public function logout(Request $request){
		$request->session()->flush();
		Auth::logout();
		return redirect()->route('auth.login');
	}
}
