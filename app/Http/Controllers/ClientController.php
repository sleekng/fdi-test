<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $clients = Client::all();

        return view('Clients.Create',compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'client'=>'required|max:255',

            'logo'=>'required|image|mimes:png,jpg,jpeg|max:2048',  
        ]);


        $client_logo = $request->file('logo');
        $client_logo_name = 'client'.time().'.'.$client_logo->getClientOriginalExtension();
        $client_logo->move('storage/client_logo', $client_logo_name);
        
         
       Client::create([
        'client' => $request->client,
        'logo' => $client_logo_name,
       ]);
    
  


        return back()->with('success', 'The Client\'s logo has been added successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {

        $url = 'client_logo/'.$client->logo;

        // Check if the image exists

        if (Storage::disk('public')->exists($url)) {
                    // Unlink the existing image
              
                    $destination = "storage/".$url ;
                    unlink($destination );


        }else{

            return back()->with('errorimage', 'No logo in the storage folder to delete');
        }

        $client->delete();

        return back()->with('delete-success', 'Client logo Deleted Successfully');
    }
}
