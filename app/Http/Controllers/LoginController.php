<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index', [
            'title' => 'login'
        ]);
    }

    public function authentication(Request $request){
        
        $credentials = $request->validate([
            'username' => 'required|min:3',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/main');

        }
        return back()->with('loginError','Login Failed!');

    }
    public function logout(){

        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');

    }
}
