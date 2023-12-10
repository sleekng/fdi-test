<?php

namespace App\Http\Controllers;

use App\Models\SentMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SentMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sentmessages = SentMessage::orderByDesc('created_at')->paginate(10);
        return view('SentMessages',compact('sentmessages'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SentMessage $sentMessage)
    {
   
        return Redirect::back()->with('view-message', $sentMessage);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SentMessage $sentMessage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SentMessage $sentMessage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SentMessage $sentMessage)
    {
        //
    }
}
