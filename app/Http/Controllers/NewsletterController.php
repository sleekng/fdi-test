<?php

namespace App\Http\Controllers;

use App\Models\Emag;
use App\Models\Newsletter;
use App\Models\SentMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $newsletters = Newsletter::orderByDesc('created_at')->paginate(10);
        return view('Newsletter',compact('newsletters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

        $request->session()->forget('errors');
        
     $request->validate([

        'email' => 'required|email|unique:newsletters|max:255',

    ],[
        'email.required' => 'Please enter email',
        'email.email' => 'Please enter valid email',
        'email.unique' => 'Email already subscribed',
        'email.max' => 'Email length should be less than 255',
        
    ]);

    Newsletter::create(
        [
            'email'=>$request->email
        ]
    );

    return redirect()->route('home')->with('success', 'Thank you for signing up');
    }

    /**
     * Display the specified resource.
     */
    public function show(Newsletter $newsletter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Newsletter $newsletter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Newsletter $newsletter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Newsletter $newsletter)
    {
        //
    }
}
