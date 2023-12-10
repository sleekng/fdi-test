<?php

namespace App\Http\Controllers;

use App\Models\Emag;
use App\Models\Issue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $emags = Emag::orderBy('e_position', 'asc')->get();

        $issues = Issue::all();

        return view('emag/e-magazine', compact('emags', 'issues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $issues = Issue::all();
        $lastest = Emag::latest('id')->first();
        $last_postion = $lastest['e_position'];
        return view('emag.Create', compact('issues', 'last_postion'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {





        if($request->e_position == 1){

            $request->validate([
                'e_url' => 'max:255',
                'e_body' => 'required',
                'e_header' => 'required|max:255',
                'issue_id' => 'required|max:255',
                'e_sponsor' => 'required|max:255',
                'e_position' => ['required', 'integer', 'max:255'],
                'e_back' => 'image|mimes:png,jpg,jpeg',
                'e_front' => 'required|image|mimes:png,jpg,jpeg',
            ]);

            $emags = Emag::all();
        
            foreach ($emags as $emag) {
               $emag-> increment('e_position');
            }   


            if ($request->file('e_front')) {
                $front_image = $request->file('e_front');
                $front_name = 'front' . time() . '.' . $front_image->getClientOriginalExtension();
                $front_image->move('storage/emag/front', $front_name);
            }
    
    
            if ($request->file('e_back')) {
                $back_image = $request->file('e_back');
                $back_name = 'back' . time() . '.' . $back_image->getClientOriginalExtension();
                $back_image->move('storage/emag/back', $back_name);
            }
    
            $issue = Issue::findOrFail($request->issue_id);
    
    
            if ($request->remove_back == true) {
    
                Emag::create([
                    'e_header' => $request->e_header,
                    'e_url' => $request->e_url,
                    'e_sponsor' => $request->e_sponsor,
                    'e_position' => $request->e_position,
                    'issue_id' => $request->issue_id,
                    'issue' => $issue->issue,
                    'issue_year' => $request->issue_year,
                    'e_body' => $request->e_body,
                    'e_back' => null,
                    'e_front' => $front_name
                ]);
            } else {
                if (!$request->file('e_back')) {
                    return back()->with('errorimage', 'No back cover attached kindly click no cover to continue without a backcover')->withInput();
                }
                Emag::create([
                    'e_header' => $request->e_header,
                    'e_url' => $request->e_url,
                    'e_sponsor' => $request->e_sponsor,
                    'e_position' => $request->e_position,
                    'issue_id' => $request->issue_id,
                    'issue' => $issue->issue,
                    'issue_year' => $request->issue_year,
                    'e_body' => $request->e_body,
                    'e_back' => $back_name,
                    'e_front' => $front_name
                ]);
            }
    
    


        }else{



            $request->validate([
                'e_url' => 'max:255',
                'e_body' => 'required',
                'e_header' => 'required|max:255',
                'issue_id' => 'required|max:255',
                'e_sponsor' => 'required|max:255',
                'e_position' => ['required', 'integer', 'max:255', 'unique:' . Emag::class],
                'e_back' => 'image|mimes:png,jpg,jpeg',
                'e_front' => 'required|image|mimes:png,jpg,jpeg',
            ]);



            if ($request->file('e_front')) {
                $front_image = $request->file('e_front');
                $front_name = 'front' . time() . '.' . $front_image->getClientOriginalExtension();
                $front_image->move('storage/emag/front', $front_name);
            }
    
    
            if ($request->file('e_back')) {
                $back_image = $request->file('e_back');
                $back_name = 'back' . time() . '.' . $back_image->getClientOriginalExtension();
                $back_image->move('storage/emag/back', $back_name);
            }
    
            $issue = Issue::findOrFail($request->issue_id);
    
    
            if ($request->remove_back == true) {
    
                Emag::create([
                    'e_header' => $request->e_header,
                    'e_url' => $request->e_url,
                    'e_sponsor' => $request->e_sponsor,
                    'e_position' => $request->e_position,
                    'issue_id' => $request->issue_id,
                    'issue' => $issue->issue,
                    'issue_year' => $request->issue_year,
                    'e_body' => $request->e_body,
                    'e_back' => null,
                    'e_front' => $front_name
                ]);
            } else {
                if (!$request->file('e_back')) {
                    return back()->with('errorimage', 'No back cover attached kindly click no cover to continue without a backcover')->withInput();
                }
                Emag::create([
                    'e_header' => $request->e_header,
                    'e_url' => $request->e_url,
                    'e_sponsor' => $request->e_sponsor,
                    'e_position' => $request->e_position,
                    'issue_id' => $request->issue_id,
                    'issue' => $issue->issue,
                    'issue_year' => $request->issue_year,
                    'e_body' => $request->e_body,
                    'e_back' => $back_name,
                    'e_front' => $front_name
                ]);
            }
    
    
        }






        return back()->with('success', 'Your Magazine has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Emag  $emag
     * @return \Illuminate\Http\Response
     */
    public function show(Emag $emag)
    {
        //
    }


    public function edit($id)
    {

        $emag = Emag::findOrFail($id);
        $lastest = Emag::latest('id')->first();
        $last_postion = $lastest['e_position'];

        $issues = Issue::all();

        return view('emag.Edit', compact('emag', 'issues', 'last_postion'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Emag  $emag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Emag $emag)
    {


        if ($request->e_body == '') {
            return back()->with('error-message', 'Emag body cannot be empty');
        }

        $ema = Emag::findOrFail($request->id);


        $request->validate([

            'e_url' => 'max:255',
            'e_body' => 'required',
            'e_header' => 'required|max:255',
            'issue_id' => 'required|max:255',
            'e_sponsor' => 'required|max:255',
            'e_position' => 'required|integer|unique:emags,e_position,' . $request->id,
        ]);


        $issue = Issue::findOrFail($request->issue_id);


        if ($request->file('e_front') || $request->file('e_back')) {

            if ($request->file('e_front')) {

                $front_image = $request->file('e_front');
                $front_name = 'front' . time() . '.' . $front_image->getClientOriginalExtension();

                $front_url = 'emag/front/' . $ema->e_front;

                // Check if the image exists

                if (Storage::disk('public')->exists($front_url)) {
                    // Unlink the existing image
                    $destination = "storage/" . $front_url;
                    unlink($destination);
                } else {
                    return back()->with('errorimage', 'No image in the storage folder to update');
                }


                $front_image->move('storage/emag/front', $front_name);

                $ema->e_front = $front_name;
                $ema->save();
            }


            if ($request->remove_back == true) {


                if ($ema->e_back != null) {

                    $url = 'emag/back/' . $ema->e_back;

                    if (Storage::disk('public')->exists($url)) {
                        // Unlink the existing image
                        $destination = "storage/" . $url;
                        unlink($destination);
                    } else {
                        return back()->with('errorimage', 'No image in the storage folder to update');
                    }

                    $ema->e_back = null;
                    $ema->save();
                }



                $ema->update([
                    'e_header' => $request->e_header,
                    'e_url' => $request->e_url,
                    'e_sponsor' => $request->e_sponsor,
                    'e_position' => $request->e_position,
                    'issue_id' => $request->issue_id,
                    'issue' => $issue->issue,
                    'issue_year' => $request->issue_year,
                    'e_body' => $request->e_body,
                ]);
                
            } else {

                if ($request->file('e_back')) {

                    if ($ema->e_back != null) {

                        $url = 'emag/back/' . $ema->e_back;

                        if (Storage::disk('public')->exists($url)) {
                            // Unlink the existing image
                            $destination = "storage/" . $url;
                            unlink($destination);
                        } else {
                            return back()->with('errorimage', 'No image in the storage folder to update');
                        }
                    } else {

                        $file = $request->file('e_back');
                        $name = 'back' . time() . '.' . $file->getClientOriginalExtension();
                        $file->move('storage/emag/back', $name);

                        $ema->e_back = $name;
                        $ema->save();
                    }
                }

                $ema->update([
                    'e_header' => $request->e_header,
                    'e_url' => $request->e_url,
                    'e_sponsor' => $request->e_sponsor,
                    'issue_id' => $request->issue_id,
                    'issue' => $issue->issue,
                    'issue_year' => $request->issue_year,
                    'e_body' => $request->e_body,
                ]);
            }




            return back()->with('success', 'Emag updated successfullly');
        } else {



            if ($request->remove_back == true) {


                if ($ema->e_back != null) {

                    $url = 'emag/back/' . $ema->e_back;

                    if (Storage::disk('public')->exists($url)) {
                        // Unlink the existing image
                        $destination = "storage/" . $url;
                        unlink($destination);
                    } else {
                        return back()->with('errorimage', 'No image in the storage folder to update');
                    }

                    $ema->e_back = null;
                    $ema->save();
                }


                $ema->update([
                    'e_header' => $request->e_header,
                    'e_url' => $request->e_url,
                    'e_sponsor' => $request->e_sponsor,
                    'e_position' => $request->e_position,
                    'issue_id' => $request->issue_id,
                    'issue' => $issue->issue,
                    'issue_year' => $request->issue_year,
                    'e_body' => $request->e_body,
                    'e_front' => $ema->e_front

                ]);
            } else {
                $ema->update([
                    'e_header' => $request->e_header,
                    'e_url' => $request->e_url,
                    'e_sponsor' => $request->e_sponsor,
                    'e_position' => $request->e_position,
                    'issue_id' => $request->issue_id,
                    'issue' => $issue->issue,
                    'issue_year' => $request->issue_year,
                    'e_body' => $request->e_body,
                    'e_back' => $ema->e_back,
                    'e_front' => $ema->e_front

                ]);
            }


            return back()->with('success', 'Emag updated successfullly');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Emag  $emag
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $emag = Emag::findOrFail($id);


        $front_url = 'emag/front/' . $emag->e_front;
        $back_url = 'emag/back/' . $emag->e_back;



        // Check if the image exists

        if ($emag->e_front != null) {

            if (Storage::disk('public')->exists($front_url)) {
                // Unlink the existing image

                $destination = "storage/" . $front_url;
                unlink($destination);
            } else {

                return back()->with('errorimage', 'No image in the storage folder to delete');
            }
        }


        if ($emag->e_back != null) {
            if (Storage::disk('public')->exists($back_url)) {

                // Unlink the existing image
                $destination = "storage/" . $back_url;
                unlink($destination);
            } else {

                return back()->with('errorimage', 'No image in the storage folder to delete');
            }
        }


    // Define the threshold integer
    $threshold = $emag->e_position; // Replace with your desired threshold value

    // Use the update method with a where clause to decrement the values
    Emag::where('e_position', '>', $threshold)
    ->decrement('e_position', 1);

     $emag->delete();

        return back()->with('delete-success', 'Emagazine Deleted Successfully');
    }
}
