<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Emag;
use App\Models\Interview;
use App\Models\Issue;
use App\Models\Showcase;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $articles = Article::orderBy('issue_year', 'Desc')
        ->paginate(10);
        $issues = Issue::all();

        return view('articles/Articles',compact('articles','issues'));
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
        
        $query = $request->input('query'); 
        $articles = Article::where('article', 'like', "%$query%")
                    ->orWhere('content', 'like', "%$query%")
                    ->get();
        $showcases = Showcase::where('showcase', 'like', "%$query%")
                    ->orWhere('content', 'like', "%$query%")
                    ->orWhere('location', 'like', "%$query%")
                    ->get();
        $interviews = Interview::where('interview', 'like', "%$query%")
                    ->orWhere('content', 'like', "%$query%")
                    ->orWhere('location', 'like', "%$query%")
                    ->get();
        $interviewsAll = Interview::all();

        $featureds = Article::where('featured','true')->get();
        $emags = Emag::where('e_position','1')->get();
                    
        return view('Search', compact('articles', 'showcases', 'query','interviews','interviewsAll','featureds','emags'));
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
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
