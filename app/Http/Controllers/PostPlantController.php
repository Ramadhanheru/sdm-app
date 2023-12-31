<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostPlantController extends Controller
{
    public function index()
    {
        $user = auth()->user()->post_id;
         $cekUser = Post::with('category')->where('id',$user)->first();
        $userplant = $cekUser->category_id;
        return view('karyawan.indexx',[
            "title" => "Post",
            "postplant" => Post::with('category')->where('category_id',$userplant)->get()
        ]);
    }
}
