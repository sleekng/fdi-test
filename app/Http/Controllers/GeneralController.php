<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Emag;
use App\Models\Interview;
use App\Models\Issue;
use App\Models\Showcase;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    
    public function index(Request $request){
        $id = $request->query('id');

        $showcases = Showcase::where('issue_id','4')->where('issue_year', '2023')->get();
        $emags = Emag::where('e_position','1')->get();

        $clients = Client::all();
 

        $slidings = Showcase::where('homeslide','true')->get();
        $featureds = Showcase::where('featured','true')->get();
        $randomShowcase = Showcase::inRandomOrder()->first();
        $randomInterview = Interview::inRandomOrder()->first();
        $issues = Issue::all();
    
        return view('index',compact('id','showcases','issues','randomShowcase','randomInterview','emags','featureds','slidings','clients'));
    }
}
