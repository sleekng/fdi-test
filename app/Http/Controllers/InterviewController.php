<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Emag;
use App\Models\Interview;
use App\Models\Issue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InterviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $interviews = Interview::orderBy('issue_year', 'Desc')
            ->paginate(10);
        $randomInterview = Interview::inRandomOrder()->first();
        $issues = Issue::all();
        $emags = Emag::where('e_position','1')->get();

        return view('interview/Interviews', compact('interviews', 'issues', 'randomInterview','emags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $issues = Issue::all();
        $categories = Category::all();

        return view('interview.Create', compact('issues', 'categories'));
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

            'interview' => 'required|max:255',
            'contact' => 'max:255',
            'title' => 'max:255',
            'phone' => 'max:255',
            'category' => 'max:255',
            'email' => 'max:255',
            'address' => 'max:255',
            'website' => 'max:255',
            'interviewee' => 'required|max:255',
            'interviewee_title' => 'required|max:255',
            'interviewee_image' => 'image|mimes:png,jpg,jpeg|max:2048',
            'url' => 'max:255',
            'location' => 'required|max:255',
            'image_url' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'contact_pic' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'company_logo' => 'image|mimes:png,jpg,jpeg|max:2048'

        ], [
            'email.required' => 'Please enter email',
            'email.email' => 'Please enter valid email',
            'email.max' => 'Email length should be less than 255',

        ]);




        $interview_image = $request->file('image_url');
        $interview_name = 'interview' . time() . '.' . $interview_image->getClientOriginalExtension();
        $interview_image->move('storage/interview', $interview_name);

        $interviewee_image = $request->file('interviewee_image');
        $interviewee_image_name = 'interviewee_image' . time() . '.' . $interviewee_image->getClientOriginalExtension();
        $interviewee_image->move('storage/interview/interviewee_image', $interviewee_image_name);

        if ($request->file('company_logo')) {

            $company_logo = $request->file('company_logo');
            $company_logo_name = 'interview' . time() . '.' . $company_logo->getClientOriginalExtension();
            $company_logo->move('storage/interview/company_logo', $company_logo_name);
        }



        $contact_image = $request->file('contact_pic');
        $contact_name = 'interview_contact' . time() . '.' . $contact_image->getClientOriginalExtension();
        $contact_image->move('storage/interview/contact', $contact_name);

        $issue = Issue::findOrFail($request->issue_id);

        if ($request->remove_logo == true) {
            Interview::create([
                'title' => $request->title,
                'interview' => $request->interview,
                'contact' => $request->contact,
                'category' => $request->category,
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
                'url' => $request->url,
                'location' => $request->location,
                'website' => $request->website,
                'issue_id' => $request->issue_id,
                'issue' => $issue->issue,
                'issue_year' => $request->issue_year,
                'content' => $request->content,
                'image_url' => $interview_name,
                'company_logo' => null,
                'contact_pic' => $contact_name,
                'interviewee_image' => $interviewee_image_name,
                'interviewee_title' => $request->interviewee_title,
                'interviewee' => $request->interviewee,
            ]);
        } 
        else {
            if (!$request->file('company_logo')) {
                return back()->with('errorimage', 'No logo attached kindly click no logo to continue without a Logo')->withInput();
            }
            Interview::create([
                'title' => $request->title,
                'interview' => $request->interview,
                'contact' => $request->contact,
                'category' => $request->category,
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
                'url' => $request->url,
                'location' => $request->location,
                'website' => $request->website,
                'issue_id' => $request->issue_id,
                'issue' => $issue->issue,
                'issue_year' => $request->issue_year,
                'content' => $request->content,
                'image_url' => $interview_name,
                'company_logo' => $company_logo_name,
                'contact_pic' => $contact_name,
                'interviewee_image' => $interviewee_image_name,
                'interviewee_title' => $request->interviewee_title,
                'interviewee' => $request->interviewee,
            ]);
        }


        return back()->with('success', 'Your Interview has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $interview = Interview::findOrFail($id);
        $issues = Issue::all();
        $emags = Emag::where('e_position','1')->get();
        return view('interview.Show', compact('interview', 'issues','emags'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function edit(Interview $interview)
    {
        $issues = Issue::all();
        $categories = Category::all();

        return view('interview.Edit', compact('interview', 'issues', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Interview $interview)
    {


        if ($request->content == '') {

            return back()->with('error-message', 'Interview Content cannot be empty');
        }

        $inter = Interview::findOrFail($request->id);


        $request->validate([

            'interview' => 'required|max:255',
            'contact' => 'max:255',
            'title' => 'max:255',
            'phone' => 'max:255',
            'category' => 'max:255',
            'email' => 'max:255',
            'interviewee' => 'required|max:255',
            'interviewee_title' => 'required|max:255',
            'interviewee_image' => 'image|mimes:png,jpg,jpeg|max:2048',
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



        $issue = Issue::findOrFail($request->issue_id);




        if ($request->file('image_url') || $request->file('interviewee_image') || $request->file('contact_pic')  || $request->file('company_logo')) {


            if ($request->file('interviewee_image')) {

                $interviewee_image = $request->file('interviewee_image');
                $interviewee_image_name = 'interview' . time() . '.' . $interviewee_image->getClientOriginalExtension();

                $interviewee_image_url = 'interview/interviewee_image/' . $inter->interviewee_image;

                // Check if the image exists

                if (Storage::disk('public')->exists($interviewee_image_url)) {
                    // Unlink the existing image
                    $destination = "storage/" . $interviewee_image_url;
                    unlink($destination);
                } else {
                    return back()->with('errorimage', 'No image Interviewee Image in the storage folder to update');
                }

                $interviewee_image->move('storage/interview/interviewee_image ', $interviewee_image_name);

                $inter->interviewee_image = $interviewee_image_name;
                $inter->save();
            }



            if ($request->file('contact_pic')) {

                $contact_pic = $request->file('contact_pic');
                $contact_pic_name = 'interview' . time() . '.' . $contact_pic->getClientOriginalExtension();

                $contact_pic_url = 'interview/contact/' . $inter->contact_pic;

                // Check if the image exists

                if (Storage::disk('public')->exists($contact_pic_url)) {
                    // Unlink the existing image
                    $destination = "storage/" . $contact_pic_url;
                    unlink($destination);
                } else {
                    return back()->with('errorimage', 'No image Contact Pic in the storage folder to update');
                }


                $contact_pic->move('storage/interview/contact', $contact_pic_name);

                $inter->contact_pic = $contact_pic_name;
                $inter->save();
            }


            if ($request->remove_logo == true) {


                if ($inter->company_logo != null) {

                    $company_logo_url = 'interview/company_logo/' . $inter->company_logo;

                    // Check if the image exists

                    if (Storage::disk('public')->exists($company_logo_url)) {
                        // Unlink the existing image
                        $destination = "storage/" . $company_logo_url;
                        unlink($destination);
                    } else {
                        return back()->with('errorimage', 'No image in the storage folder to remove');
                    }


                    $inter->company_logo = null;
                    $inter->save();
                }
            } else {

                if ($request->file('company_logo')) {

                    if ($inter->company_logo != null) {

                        $company_logo = $request->file('company_logo');
                        $company_logo_name = 'interview' . time() . '.' . $company_logo->getClientOriginalExtension();

                        $company_logo_url = 'interview/company_logo/' . $inter->company_logo;

                        // Check if the image exists

                        if (Storage::disk('public')->exists($company_logo_url)) {
                            // Unlink the existing image
                            $destination = "storage/" . $company_logo_url;
                            unlink($destination);
                        } else {
                            return back()->with('errorimage', 'No image in the storage folder to update');
                        }


                        $company_logo->move('storage/interview/company_logo', $company_logo_name);

                        $inter->company_logo = $company_logo_name;
                        $inter->save();
                    } else {
                        $company_logo = $request->file('company_logo');
                        $company_logo_name = 'interview' . time() . '.' . $company_logo->getClientOriginalExtension();

                        $company_logo->move('storage/interview/company_logo', $company_logo_name);

                        $inter->company_logo = $company_logo_name;
                        $inter->save();
                    }
                }
            }


            if ($request->file('image_url')) {


                $url = 'interview/' . $inter->image_url;

                // Check if the image exists

                if (Storage::disk('public')->exists($url)) {
                    // Unlink the existing image
                    $destination = "storage/" . $url;
                    unlink($destination);
                } else {
                    return back()->with('errorimage', 'No image in the storage folder to update');
                }


                $file = $request->file('image_url');
                $name = 'interview' . time() . '.' . $file->getClientOriginalExtension();
                $file->move('storage/interview', $name);

                $inter->image_url = $name;
                $inter->save();
            }


            $inter->update([
                'title' => $request->title,
                'interview' => $request->interview,
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
                'interviewee_title' => $request->interviewee_title,
                'interviewee' => $request->interviewee,
                'issue' => $issue->issue,
                'issue_year' => $request->issue_year,


            ]);

            return back()->with('success', 'Your Interview has been updated successfully');
        } else {


            if ($request->remove_logo == true) {


                if ($inter->company_logo != null) {

                    $company_logo_url = 'interview/company_logo/' . $inter->company_logo;

                    // Check if the image exists

                    if (Storage::disk('public')->exists($company_logo_url)) {
                        // Unlink the existing image
                        $destination = "storage/" . $company_logo_url;
                        unlink($destination);
                    } else {
                        return back()->with('errorimage', 'No image in the storage folder to remove');
                    }


                    $inter->company_logo = null;
                    $inter->save();
                }
            } else {
                $inter->update([
                    'title' => $request->title,
                    'interview' => $request->interview,
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
                    'interviewee_title' => $request->interviewee_title,
                    'interviewee' => $request->interviewee,
                    'interviewee_image' => $inter->interviewee_image,
                    'image_url' => $inter->image_url,
                    'contact_pic' => $inter->contact_pic,

                ]);
            }


            $inter->update([
                'title' => $request->title,
                'interview' => $request->interview,
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
                'interviewee_title' => $request->interviewee_title,
                'interviewee' => $request->interviewee,
                'interviewee_image' => $inter->interviewee_image,
                'image_url' => $inter->image_url,
                'contact_pic' => $inter->contact_pic,
                '$company_logo' => $inter->company_logo
            ]);



            return back()->with('success', 'Interview update successfully');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function destroy(Interview $interview)
    {


        $url = 'interview/' . $interview->image_url;
        $contact_pic = 'interview/contact/' . $interview->contact_pic;
        $company_logo = 'interview/company_logo/' . $interview->company_logo;
        $interviewee_image = 'interview/interviewee_image/' . $interview->interviewee_image;



        // Check if the image exists

        if (Storage::disk('public')->exists($interviewee_image)) {
            // Unlink the existing image
            $destination = "storage/" . $interviewee_image;
            unlink($destination);
        } else {
            return back()->with('errorimage', 'No image in the storage folder to update');
        }

        if (Storage::disk('public')->exists($url)) {
            // Unlink the existing image
            $destination = "storage/" . $url;
            unlink($destination);
        } else {
            return back()->with('errorimage', 'No image in the storage folder to update');
        }

        if (Storage::disk('public')->exists($contact_pic)) {
            // Unlink the existing image
            $destination = "storage/" . $contact_pic;
            unlink($destination);
        } else {
            return back()->with('errorimage', 'No image in the storage folder to update');
        }
        if (Storage::disk('public')->exists($company_logo)) {
            // Unlink the existing image
            $destination = "storage/" . $company_logo;
            unlink($destination);
        } else {
            return back()->with('errorimage', 'No image in the storage folder to update');
        }


        $interview->delete();

        return back()->with('delete-success', 'Interview Deleted Successfully');
    }
}
