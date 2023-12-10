<?php

namespace App\Http\Controllers;

use App\Mail\messageMail;
use App\Models\MediaKitEmail;
use App\Models\Newsletter;
use App\Models\SentMessage;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('CreateMessage');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $request->flash();

        $request->validate([
            'type' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'content'  => 'required|min:10',
        ]);

 
        //Send by type individual

        if($request->type == 'individual-message'){
            $request->validate([
                'email' => 'required|string|email|max:255',
            ]);



            $UserInfo = [
                'to' => $request->email,
                'message' => $request->content,
                'subject' => $request->subject
            ];
            
      


            SentMessage::create([
                'type'  => $request->type,
                'to' => $request->email,
                'message' => $request->content,
                'subject' => $request->subject
            ]);


            Mail::to($request->email)->send(new messageMail($UserInfo));

            
    
            return redirect()->back()->with('status', 'Message sent successfully');


        }

        //Send by Category

        if($request->type == 'newsletter-subscribers' ){
        
          $Users = Newsletter::select('email')->get();
       
            
            if(count($Users) == 0){
                return redirect()->back()->with('status', 'No Newsletter Subscriber Yet');
                }
           
            foreach ($Users as $user) {

                $UserInfo = [
                    'to' => $user->email,
                    'message' => $request->content,
                    'subject' => $request->subject
                ];


                Mail::to($user->email)->send(new messageMail($UserInfo));
            }

            SentMessage::create([
                'type'  => $request->type,
                'to' => $request->type,
                'message' => $request->content,
                'subject' => $request->subject
                 ]);
            
            return redirect()->back()->with('status', 'Message sent successfully');

        }

        if($request->type == 'magazine-subscribers' ){
        
          $Users = Subscription::select('email')->get();
        
          if(count($Users) == 0){
            return redirect()->back()->with('status', 'No Magazine Subscriber Yet');
            }

            foreach ($Users as $user) {

                $UserInfo = [
                    'to' => $user->email,
                    'message' => $request->content,
                    'subject' => $request->subject
                ];

             
                Mail::to($user->email)->send(new messageMail($UserInfo));
            }

            SentMessage::create([
                'type'  => $request->type,
                'to' => $request->type,
                'message' => $request->content,
                'subject' => $request->subject
                 ]);
    

            
            return redirect()->back()->with('status', 'Message sent successfully');

        }

        if($request->type == 'media-kit' ){
        
          $Users = MediaKitEmail::select('email')->get();

        if(count($Users) == 0){
        return redirect()->back()->with('status', 'No MediaKit Request Yet');
        }
       
            foreach ($Users as $user) {

                $UserInfo = [
                    'to' => $user->email,
                    'message' => $request->content,
                    'subject' => $request->subject
                ];

                return $user->email;
                Mail::to($user->email)->send(new messageMail($UserInfo));
            }

            SentMessage::create([
                'type'  => $request->type,
                'to' => $request->type,
                'message' => $request->content,
                'subject' => $request->subject
                 ]);
    

            
            return redirect()->back()->with('status', 'Message sent successfully');

        }


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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
