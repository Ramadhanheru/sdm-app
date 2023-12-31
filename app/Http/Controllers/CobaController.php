<?php

namespace App\Http\Controllers;
use App\Models\Coba;
use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function index()
    {
        return view('about',[
            "title" => "About",
            "posts" =>  Coba::all()
        ]);
    }
    public function show($slug)
    {
        return view('detail',[
            "title" => "Detail",
            "posts" =>  Coba::find($slug)
        ]);
    }
}
