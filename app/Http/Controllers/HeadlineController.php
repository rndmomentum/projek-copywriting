<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeadlineController extends Controller
{   
    public function __construct()
    {
        // $this->middleware(['auth','verified']);
        $this->middleware('auth');
    }
    
    // Choose Keyword
    public function keyword_page($business,$emotion)
    {
        return view('headline.keyword', compact('business','emotion'));
    }

    // List headline
    public function list_headline($business,$emotion,$keyword)
    {
        return view('headline.list', compact('business'));
    }

    // Find Now
    public function find_now(Request $request)
    {
        return redirect('headline/' . $request->business . '/' . $request->emotion);
    }

}
