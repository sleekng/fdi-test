<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Emag;
use App\Models\Issue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $articles = Article::orderBy('issue_year', 'Desc')
        ->paginate(10);

        $featureds = Article::where('featured','true')->get();
        $emags = Emag::where('e_position','1')->get();
        $issues = Issue::all();

        return view('articles/Articles',compact('articles','issues','featureds','emags'));
    }

    public function filterByIssue(Request $request)
    {        
        if($request->issue_id == 'All'){
            
            
            $issues = Issue::all();
            $articles = Article::orderBy('created_at', 'Desc')
            ->paginate(10);
            return back();
        }
        
        $issues = Issue::all();
        
        $articles = Article::where('issue_year',$request->year)->where('issue_id',$request->issue_id)->get();

        if($articles->count() > 0){
            

            

            if($articles->count() == 0){

                return back()->with('searcherror','The searched Issue does not exist');

            }else{

                $issue = Issue::findOrFail($request->issue_id);
                $featureds = Article::where('featured','true')->get();
                $emags = Emag::where('e_position','1')->get();

                return view('articles/SearchArticle', compact('articles','issues','issue','featureds','emags'));
            }

            

            
        }else{
            
            return back()->with('searcherror','The search collection does not exist');
        }
        
        

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $issues = Issue::all();
        return view('articles.Create',compact('issues'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

       /*  dd($request->image_url); */

        $request->validate([

            'email' => 'max:255',
            'title'=>'required|max:255',
            'issue_id'=>'required|max:255',
            'issue_year'=>'required|max:255',
            'article'=>'required|max:255',
            'author'=>'required|max:255',
            'featured'=>'required|max:255',
            'title'=>'required|max:255',
            'phone'=>'max:255',
            'address'=>'max:255',
            'url'=>'max:255',
            'website'=>'max:255',
            'image_url'=>'required|image|mimes:png,jpg,jpeg|max:2048',
            'picture'=>'required|image|mimes:png,jpg,jpeg|max:2048',
            'content' => 'required',   
        ],[
            'email.required' => 'Please enter email',
            'email.email' => 'Please enter valid email',
            'email.max' => 'Email length should be less than 255',
            
        ]);


        $profile_image = $request->file('image_url');
        $profile_name = 'article'.time().'.'.$profile_image->getClientOriginalExtension();
        $profile_image->move('storage/article', $profile_name);


        $article_image = $request->file('picture');
        $article_name = 'article'.time().'.'.$article_image->getClientOriginalExtension();
        $article_image->move('storage/article/picture', $article_name);
        
       
        $issue = Issue::findOrFail($request->issue_id);

         
       Article::create([
        'title' => $request->title,
        'article' => $request->article,
        'author' => $request->author,
        'phone' => $request->phone,
        'email' => $request->email,
        'address' => $request->address,
        'url' => $request->url,
        'website' => $request->website,
        'featured' => $request->featured,
        'issue_id' => $request->issue_id,
        'issue' => $issue->issue,
        'issue_year' => $request->issue_year,
        'content' => $request->content,
        'image_url' => $profile_name,
        'picture' => $article_name
       ]);
    
  


        return back()->with('success', 'Your article has been added successfully');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $Article)
    {
   
    }

    /**
     * Display the specified resource.
     */
    public function contentUpload(Article $Article)
    {

        $article = $Article;
        $issues = Issue::all();
     
        return view('articles.ContentUpload', compact('article','issues'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $Article)
    {

        $article = $Article;
        $issues = Issue::all();
     
        return view('articles.Edit', compact('article','issues'));
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $Article)
    {


        if($request->content == ''){
            return back()->with('error-message','Article Content cannot be empty');
        }

        $Art = Article::findOrFail($request->id);


        
       
        $request->validate([

            'email' => 'max:255',
            'title'=>'required|max:255',
            'article'=>'required|max:255',
            'author'=>'required|max:255',
            'title'=>'required|max:255',
            'issue_id'=>'required|max:255',
            'issue_year'=>'required|max:255',
            'featured'=>'required|max:255',
            'phone'=>'max:255',
            'address'=>'max:255',
            'url'=>'max:255',
            'website'=>'max:255',
            'image_url'=>'image|mimes:png,jpg,jpeg|max:2048',
            'picture'=>'image|mimes:png,jpg,jpeg|max:2048',
            'content' => 'required',
            
    
        ],[
            'email.required' => 'Please enter email',
            'email.email' => 'Please enter valid email',
            'email.max' => 'Email length should be less than 255',
            
        ]);
       
        
        $Art->featured =$request->featured;
        $Art->save;

        $issue = Issue::findOrFail($request->issue_id);


        if($request->file('image_url') || $request->file('picture')){
            
            if($request->file('picture')){
                    
                        $article_image = $request->file('picture');
                        $article_name = 'article'.time().'.'.$article_image->getClientOriginalExtension();

                    $article_url = 'article/picture/'.$Art->picture;
        
                    // Check if the image exists
        
                    if (Storage::disk('public')->exists($article_url)) {
                        // Unlink the existing image
                        $destination = "storage/".$article_url ;
                        unlink($destination );
                    }
        
                    
                    $article_image->move('storage/article/picture', $article_name);

                    $Art->picture = $article_name;
                    $Art->save();
        
                }


                if($request->file('image_url')){

                    $url = 'article/'.$Art->image_url;

                    if (Storage::disk('public')->exists($url)) {
                                // Unlink the existing image
                                $destination = "storage/".$url ;
                                unlink($destination );
                    }else{
                        return back()->with('errorimage', 'No image in the storage folder to update');
                    }


                    $file = $request->file('image_url');
                    $name = 'article'.time().'.'.$file->getClientOriginalExtension();
                    $file->move('storage/article', $name);

                    $Art->image_url = $name;
                    $Art->save();
                }

        


            $Art->update([
                'title' => $request->title,
                'article' => $request->article,
                'author' => $request->author,
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
                'url' => $request->url,
                'website' => $request->website,
                'issue_id' => $request->issue_id,
                'issue' => $issue->issue,
                'issue_year' => $request->issue_year,
                'content' => $request->content,
            ]);

            return back()->with('success','Article updated successfullly');

        }else{

          

                $Art->update([
                'title' => $request->title,
                'article' => $request->article,
                'author' => $request->author,
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
                'url' => $request->url,
                'website' => $request->website,
                'issue_id' => $request->issue_id,
                'issue' => $issue->issue,
                'issue_year' => $request->issue_year,
                'image_url' => $Art->image_url,
                'picture' => $Art->picture,
                'content' => $request->content,
                
            ]);


            return back()->with('success','Article updated successfullly');
        }


             
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {

        $url = 'article/'.$article->image_url;
        $picture = 'article/picture/'.$article->picture;

        // Check if the image exists

        if (Storage::disk('public')->exists($url)) {
                    // Unlink the existing image
              
                    $destination = "storage/".$url ;
                    unlink($destination );


        }else{

            return back()->with('errorimage', 'No image in the storage folder to delete');
        }
        if (Storage::disk('public')->exists($picture)) {
          
                    // Unlink the existing image
                    $destination = "storage/".$picture ;
                    unlink($destination );


        }else{
           
            return back()->with('errorimage', 'No image in the storage folder to delete');
        }


        $article->delete();

        return back()->with('delete-success', 'Article Deleted Successfully');
    }
}
