<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PersonalController extends Controller
{
    public function index(){
        $user = auth()->user()->id;
   
        return view('dashboard.personal',[
            "title" => "Daftar User",
            "users" => User::with('post')->where('id',$user)->first()
        ]);
    }
}
