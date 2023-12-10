<?php

namespace App\Http\Controllers;

use App\Models\Emag;
use App\Models\MediaKitEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MediaKitEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mediakits = MediaKitEmail::paginate(10);
        return view('MediaKit', compact('mediakits'));

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
         
     $request->validate([

        'company_email' => 'required|email|max:255',
        'company_name' => 'required|max:255',

    ],[
        'company_email.required' => 'Please enter email where neccessary',
        'company_name.required' => 'Please enter your name or company name',
        'company_email.email' => 'Please enter a valid email',
        'company_email.max' => 'Email length should be less than 255',
        
    ]);

    MediaKitEmail::create(
        [
            'email'=>$request->company_email,
            'company_name'=>$request->company_name
        ]
    );

    $emags = Emag::where('e_position','1')->get();
 
    return Redirect::route('home')->with('mediakit-success', 'Thank you');

    
    }

    /**
     * Display the specified resource.
     */
    public function show(MediaKitEmail $mediaKitEmail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MediaKitEmail $mediaKitEmail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MediaKitEmail $mediaKitEmail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MediaKitEmail $mediaKitEmail)
    {
        //
    }
}
