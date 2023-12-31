<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('category.index',[
            "title" => "Category",
            "category" => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create',[
            "title" => "Category Create"
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
        $validatedData = $request->validate([
            'kode_unit' => 'required|max:4|min:4|unique:categories',
            'nama_unit' => ['required', 'min:8','max:255','unique:categories'],
            'alias' => ['required','min:3','max:255'],
            'nickname' => ['required','min:3','max:3']
        ]);
        
        Category::create($validatedData);
        return redirect('/main/category')->with('success', 'Creating Category was successful!');
        //$this->$request->session()->flash('status', 'Registration was successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        
        return view('category.show',[
            "title" => "Category",
            'category' => $category
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('category.edit',[
            "title" => "Category",
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $validatedData = $request->validate([
            'kode_unit' => 'required|max:4|min:4',
            'nama_unit' => ['required', 'min:8','max:255'],
            'alias' => ['required','min:3','max:255'],
            'nickname' => ['required','min:3','max:3']
        ]);
        
        Category::where('id',$category->id)-> update($validatedData);
        
        return redirect('/main/category')->with('success', 'Updating Category was successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        Category::destroy($category->id);
        return redirect('/main/category')->with('success', 'Category has been deleted!');
    }

    
    
}
