<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('karyawan.index',[
            "title" => "Post",
            "posts" =>  Post::with('category')->get()
        ]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('karyawan.create',[
            "title" => "Karyawan Create",
            'category' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nik' => 'required|min:6|unique:posts',
            'nama' => 'required|max:255',
            'jabatan' => 'required|max:255',
            'category_id' => 'required'
        ]);
        
        Post::create($validatedData);
        return redirect('/main/post')->with('success', 'Creating Karyawan was successful!');
        // atau bisa juga
        //$this->$request->session()->flash('status', 'Registration was successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('karyawan.show',[
            "title" => "Post",
            "posts" =>  $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('karyawan.edit',[
            "title" => "Post",
            'posts' => $post,
            'category' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            
            'nama' => 'required|max:255',
            'jabatan' => 'required|max:255',
            'category_id' => 'required'
        ];
        if($request->nik != $post->nik){
            $rules['nik'] = 'required|min:6|unique:posts';
        }
        
        $validatedData = $request->validate($rules);
        Post::where('id',$post->id)-> update($validatedData);
        
        return redirect('/main/post')->with('success', 'Updating Karyawan was successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);
        return redirect('/main/post')->with('success', 'Karyawan has been deleted!');
    }
}
