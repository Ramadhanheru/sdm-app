<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            'title' => 'register'
        ]);
    }

    public function storee(Request $request){

        // return request()->all();
    $validatedData = $request->validate([
        'name' => 'required|max:255',
        'username' => ['required', 'min:3','unique:users'],
        'email' => ['required','email:dns','unique:users'],
        'password' => ['required','min:5','max:255']
    ]);
    
    $validatedData['password'] = Hash::make($validatedData['password']);
    User::create($validatedData);

    //$this->$request->session()->flash('status', 'Registration was successful!');
    return redirect('/')->with('success', 'Registration was successful!');
        
    }
}
