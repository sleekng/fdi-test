<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderBy('created_at', 'Desc')->paginate(10);

        return view('Category/index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Category/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
             $request->validate([

            'category'=>'required|max:255',
          
        ]);
       
         
       Category::create([
        'category' => $request->category,
       
       ]);
    
  


        return back()->with('success', 'Category has been added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        
        return view('Category/Edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        
        $category = Category::findOrFail($id);
        

        $request->validate([
            
            'category'=>'required|max:255',
            
        ]);
        
         
        $category->update([
        'category' => $request->category,       
       ]);
    
        return back()->with('success', 'Category has been updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Category = Category::findOrFail($id);

        $Category->delete();

        return back()->with('delete-success', 'Article Deleted Successfully');
    }
}
