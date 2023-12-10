<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */ 
    public function index()
    {
        $magazinesubscriptions = Subscription::orderByDesc('created_at')->paginate(10);
        return view('MagazineSubscribers',compact('magazinesubscriptions'));
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

            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'subscription' => 'required|max:255',
            'terms' => 'required|max:255',
    
        ],[
            'email.required' => 'Please enter email where neccessary',
            'terms.required' => 'Please kindly check the terms and condition box',

            'name.required' => 'Please enter your name or company name',
            'email.email' => 'Please enter a valid email',
            'email.max' => 'Email length should be less than 255',
            
        ]);
    
        Subscription::create(
            [
                'name'=>$request->name,
                'subscription'=>$request->subscription,
                'email'=>$request->email,
                'terms'=>$request->terms
            ]
        );

        return Redirect::route('home')->with('subcription-success', 'Thank you');


    }

    /**
     * Display the specified resource.
     */
    public function show(Subscription $subscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subscription $subscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subscription $subscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscription $subscription)
    {
        //
    }
}
