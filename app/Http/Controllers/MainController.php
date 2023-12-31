<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MainController extends Controller
{
    public function index()
    {
        return view('dashboard.dashboard',[
            "title" => "Dashboard"
        ]);
    }
}
