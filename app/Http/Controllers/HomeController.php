<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Headline;
use App\Models\Keywords;
use App\Models\Business;
use App\Models\Emotion;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware(['auth','verified']);
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $keywords = Keywords::orderBy('id','Desc')->paginate(7);
        $business = Business::all();
        $emotion = Emotion::all();

        return view('home', compact('keywords', 'business', 'emotion'));
    }

}
