<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Issue;
use App\Models\Showcase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ShowcaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $showcases = Showcase::where('issue_id','4')->where('issue_year', '2023')->get();
        $featureds = Showcase::where('featured','true')->get();
      
        $issues = Issue::all();
        $currentissue = Issue::where('id','4')->get();

        return view('showcases/Showcases', compact('showcases', 'issues','currentissue','featureds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $issues = Issue::all();
        $categories = Category::all();

        return view('showcases.Create', compact('issues', 'categories'));
    }


    public function filterByIssue(Request $request)
    {        
        if($request->issue_id == 'All'){
            
            $issues = Issue::all();
            $showcases = Showcase::orderBy('created_at', 'Desc')->get();
            return back();
        }
        
        $issues = Issue::all();
        
        $showcases = Showcase::where('issue_year',$request->year)->where('issue_id',$request->issue_id)->get();

        if($showcases->count() > 0){

            if($showcases->count() == 0){

                return back()->with('searcherror','The searched Issue does not exist');

            }else{

                $issue = Issue::findOrFail($request->issue_id);
                $featureds = Showcase::where('featured','true')->get();

                return view('showcases/SearchShowcase', compact('showcases','issues','issue','featureds'));
            }

            

            
        }else{
            
            return back()->with('searcherror','The searched collection does not exist');
        }
        
        

    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([

            'showcase' => 'required|max:255',
            'featured' => 'required|max:255',
            'homeslide' => 'required|max:255',
            'contact' => 'max:255',
            'title' => 'max:255',
            'phone' => 'max:255',
            'category' => 'max:255',
            'email' => 'max:255',
            'address' => 'max:255',
            'website' => 'max:255',
            'url' => 'max:255',
            'location' => 'required|max:255',
            'image_url' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'contact_pic' => 'required|image|mimes:png,jpg,jpeg|max:2048'

        ], [
            'email.required' => 'Please enter email',
            'email.email' => 'Please enter valid email',
            'email.max' => 'Email length should be less than 255',

        ]);


 

        $showcase_image = $request->file('image_url');
        $showcase_name = 'showcase' . time() . '.' . $showcase_image->getClientOriginalExtension();
        $showcase_image->move('storage/showcase', $showcase_name);

        $showcase_logo = $request->file('logo');
        $logo_name = 'logo' . time() . '.' . $showcase_logo->getClientOriginalExtension();
        $showcase_logo->move('storage/showcase/logo', $logo_name);


        $contact_image = $request->file('contact_pic');
        $contact_name = 'showcase_contact' . time() . '.' . $contact_image->getClientOriginalExtension();
        $contact_image->move('storage/showcase/contact', $contact_name);

        $issue = Issue::findOrFail($request->issue_id);


        Showcase::create([
            'title' => $request->title,
            'showcase' => $request->showcase,
            'contact' => $request->contact,
            'category' => $request->category,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'featured' => $request->featured,
            'homeslide' => $request->homeslide,
            'url' => $request->url,
            'location' => $request->location,
            'website' => $request->website,
            'issue_id' => $request->issue_id,
            'issue' => $issue->issue,
            'issue_year' => $request->issue_year,
            'content' => $request->content,
            'image_url' => $showcase_name,
            'contact_pic' => $contact_name,
            'logo' => $logo_name
        ]);

        return back()->with('success', 'Your Showcase has been added successfully');
    }



    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $showcase = Showcase::findOrFail($id);
        $issues = Issue::all();
        return view('showcases.Show', compact('showcase', 'issues'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Showcase $showcase)
    {

        $issues = Issue::all();
        $categories = Category::all();

        return view('showcases.Edit', compact('showcase', 'issues', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Showcase $showcase)
    {


        if ($request->content == '') {
            return back()->with('error-message', 'Showcase Content cannot be empty');
        }

        $show = Showcase::findOrFail($request->id);


        $request->validate([

            'showcase' => 'required|max:255',
            'featured' => 'required|max:255',
            'homeslide' => 'required|max:255',
            'contact' => 'max:255',
            'title' => 'max:255',
            'phone' => 'max:255',
            'category' => 'max:255',
            'email' => 'max:255',
            'address' => 'max:255',
            'website' => 'max:255',
            'url' => 'max:255',
            'location' => 'required|max:255',
            'image_url' => 'image|mimes:png,jpg,jpeg|max:2048',
            'contact_pic' => 'image|mimes:png,jpg,jpeg|max:2048'

        ], [
            'email.required' => 'Please enter email',
            'email.email' => 'Please enter valid email',
            'email.max' => 'Email length should be less than 255',

        ]);



        $show->featured =$request->featured;
        $show->homeslide =$request->homeslide;
        $show->save;

        $issue = Issue::findOrFail($request->issue_id);




        if ($request->file('image_url') || $request->file('contact_pic') || $request->file('logo')) {


            if ($request->file('contact_pic')) {

                $contact_pic = $request->file('contact_pic');
                $contact_pic_name = 'showcase' . time() . '.' . $contact_pic->getClientOriginalExtension();

                $contact_pic_url = 'showcase/contact/' . $show->contact_pic;

                // Check if the image exists

            if ($show->contact_pic != null) {
                if (Storage::disk('public')->exists($contact_pic_url)) {
                    // Unlink the existing image
                    $destination = "storage/" . $contact_pic_url;
                    unlink($destination);
                } else {
                    return back()->with('errorimage', 'No image in the storage folder to update');
                }
            }


                $contact_pic->move('storage/showcase/contact', $contact_pic_name);

                $show->contact_pic = $contact_pic_name;
                $show->save();
                 
            }

            if ($request->remove_logo == true) {
                if ($show->logo != null) {
                    $logo_url = 'showcase/logo/' . $show->logo;

                    // Check if the image exists
    
                    if (Storage::disk('public')->exists($logo_url)) {
                        // Unlink the existing image
                        $destination = "storage/" . $logo_url;
                        unlink($destination);
                    } else {
                        return back()->with('errorimage', 'No image in the storage folder to update');
                    }
    
                    $show->logo = null;
                    $show->save();

                }
            }else{

                if ($request->file('logo')) {
    
    
                    if ($show->logo != null) {

                        $logo_url = 'showcase/logo/' . $show->logo;
        
                        // Check if the image exists
        
                        if (Storage::disk('public')->exists($logo_url)) {
                            // Unlink the existing image
                            $destination = "storage/" . $logo_url;
                            unlink($destination);
                        } else {
                            return back()->with('errorimage', 'No image in the storage folder to update');
                        }

                        $logo_file = $request->file('logo');
                        $logo_name = 'logo' . time() . '.' . $logo_file->getClientOriginalExtension();
                        $logo_file->move('storage/showcase/logo', $logo_name);
        
                        $show->logo = $logo_name;
                        $show->save();

                    }else{
                        $logo_file = $request->file('logo');
                        $logo_name = 'logo' . time() . '.' . $logo_file->getClientOriginalExtension();
                        $logo_file->move('storage/showcase/logo', $logo_name);
        
                        $show->logo = $logo_name;
                        $show->save();
                    }
    
    
                    
                }
            }



            if ($request->file('image_url')) {


                $url = 'showcase/' . $show->image_url;

                // Check if the image exists

                if (Storage::disk('public')->exists($url)) {
                    // Unlink the existing image
                    $destination = "storage/" . $url;
                    unlink($destination);
                } else {
                    return back()->with('errorimage', 'No image in the storage folder to update');
                }


                $file = $request->file('image_url');
                $name = 'showcase' . time() . '.' . $file->getClientOriginalExtension();
                $file->move('storage/showcase', $name);

                $show->image_url = $name;
                $show->save();
            }


            $show->update([
                'title' => $request->title,
                'showcase' => $request->showcase,
                'contact' => $request->contact,
                'category' => $request->category,
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
                'url' => $request->url,
                'location' => $request->location,
                'content' => $request->content,
                'website' => $request->website,
                'issue_id' => $request->issue_id,
                'issue' => $issue->issue,
                'issue_year' => $request->issue_year,
            ]);

            return back()->with('success', 'Your showcase has been updated successfully');
        } else {


            if ($request->remove_logo == true) {


                if ($show->logo != null) {
                    $logo_url = 'showcase/logo/' . $show->logo;

                    // Check if the image exists
    
                    if (Storage::disk('public')->exists($logo_url)) {
                        // Unlink the existing image
                        $destination = "storage/" . $logo_url;
                        unlink($destination);
                    } else {
                        return back()->with('errorimage', 'No image in the storage folder to update');
                    }
    
                    $show->logo = null;
                    $show->save();
                }

                $show->update([
                    'title' => $request->title,
                    'showcase' => $request->showcase,
                    'contact' => $request->contact,
                    'category' => $request->category,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'address' => $request->address,
                    'url' => $request->url,
                    'location' => $request->location,
                    'content' => $request->content,
                    'website' => $request->website,
                    'issue_id' => $request->issue_id,
                    'issue' => $issue->issue,
                    'issue_year' => $request->issue_year,
                    'image_url' => $show->image_url,
                    'contact_pic' => $show->contact_pic,
                ]);

            }else{

                $show->update([
                    'title' => $request->title,
                    'showcase' => $request->showcase,
                    'contact' => $request->contact,
                    'category' => $request->category,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'address' => $request->address,
                    'url' => $request->url,
                    'location' => $request->location,
                    'content' => $request->content,
                    'website' => $request->website,
                    'issue_id' => $request->issue_id,
                    'issue' => $issue->issue,
                    'issue_year' => $request->issue_year,
                    'image_url' => $show->image_url,
                    'contact_pic' => $show->contact_pic,
                    'logo' => $show->logo
                ]);
            }




            return back()->with('success', 'Showcase update successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Showcase $showcase)
    {


        $url = 'showcase/' . $showcase->image_url;
        $contact_pic = 'showcase/contact/' . $showcase->contact_pic;
        $logo_url = 'showcase/logo/' . $showcase->logo;

         if($showcase->logo != null){

            if (Storage::disk('public')->exists($logo_url)) {
                // Unlink the existing image
                $destination = "storage/" . $logo_url;
                unlink($destination);
            } else {
                return back()->with('errorimage', 'No image in the storage folder to update');
            }

         }

 

        // Check if the image exists
        if($showcase->image_url != null){

        if (Storage::disk('public')->exists($url)) {
            // Unlink the existing image
            $destination = "storage/" . $url;
            unlink($destination);
        } else {
            return back()->with('errorimage', 'No image in the storage folder to update');
        }

    }


    if($showcase->contact_pic != null){

        if (Storage::disk('public')->exists($contact_pic)) {
            // Unlink the existing image
            $destination = "storage/" . $contact_pic;
            unlink($destination);
        } else {
            return back()->with('errorimage', 'No image in the storage folder to update');
        }

    }
        $showcase->delete();

        return back()->with('delete-success', 'Showcase Deleted Successfully');
    }
}
