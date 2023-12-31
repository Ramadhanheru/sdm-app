<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.index',[
            "title" => "Daftar User",
            "userss" =>  User::with('post')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create',[
            "title" => "Create User",
            "userss" =>  Post::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $validatedData = $request->validate([
            'username' => ['required', 'min:3','unique:users'],
             'email' => ['required','email:dns','unique:users'],
             'password' => ['required','min:5'],
            'role' => ['required'],
            'post_id' => ['required']
        ]);
        
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect('/main/user')->with('success', 'Creating New User was successful!');
        //$this->$request->session()->flash('status', 'Registration was successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('user.show',[
            "title" => "Daftar User",
            "user" =>  $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('user.edit',[
            "title" => "Daftar User",
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
 

        $rules = [
            
            'role' => 'required'
        ];
        if($request->username != $user->username){
            $rules['username'] = 'required|min:3|max:255|unique:users';
        }
        if($request->email != $user->email){
            $rules['email'] = 'required|max:255|email:dns|unique:users';
        }
        if($request->password != null){
            $rules['password'] = 'required|min:5|max:255';
            $validatedData = $request->validate($rules);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::where('id',$user->id)-> update($validatedData);
        
        return redirect('/main/user')->with('success', 'Updating Users Data was successful!');
        }else{
            $validatedData = $request->validate($rules);
       
        User::where('id',$user->id)-> update($validatedData);
        
        return redirect('/main/user')->with('success', 'Updating Users Data was successful!');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('/main/user')->with('success', 'Users has been deleted!');
    }
}
