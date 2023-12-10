<?php

namespace App\Http\Controllers;

use App\Models\Emag;
use App\Models\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inbox = Messages::orderByDesc('created_at')->paginate(10);
        return view('Inbox',compact('inbox'));
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

        'email' => 'required|email|max:255',
        'message' => 'required|max:255',
        'name' => 'required|max:255',

    ],[
        'email.required' => 'Please enter email',
        'email.email' => 'Please enter valid email',
        'email.max' => 'Email length should be less than 255',
        
    ]);


    $message = new Messages();
    $message->name = $request->name;
    $message->message = $request->message;
    $message->email = $request->email;
    $message->save();



    
    return redirect()->route('home')->with('message-success','Message sent successfully
    ');

    
    
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $message = Messages::where('id', $id)->get();

        return Redirect::back()->with('view-message', $message[0]);
    }


    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Messages $messages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Messages $messages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Messages $messages)
    {
        //
    }
}
