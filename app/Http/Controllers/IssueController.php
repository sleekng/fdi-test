<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use Illuminate\Http\Request;

class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $issues = Issue::orderBy('created_at', 'Desc')->paginate(10);

        return view('Issue/index',compact('issues'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Issue/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
             $request->validate([

            'issue'=>'required|max:255',
          
        ]);
       
         
       Issue::create([
        'issue' => $request->issue,
       
       ]);
    
  


        return back()->with('success', 'Issue has been added successfully');
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
        $issue = Issue::findOrFail($id);
        
        return view('Issue/Edit',compact('issue'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        
        $issue = Issue::findOrFail($id);
        

        $request->validate([
            
            'issue'=>'required|max:255',
            
        ]);
        
         
        $issue->update([
        'issue' => $request->issue,       
       ]);
    
        return back()->with('success', 'Issue has been updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Issue = Issue::findOrFail($id);

        $Issue->delete();

        return back()->with('delete-success', 'Article Deleted Successfully');
    }
}
