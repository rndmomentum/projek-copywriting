<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keywords;
use App\Models\Headline;

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
        $headline = Headline::where('business_id', $business)->where('emotion_id', $emotion)->get();

        return view('headline.keyword', compact('business','emotion','headline'));
    }

    // List headline
    public function list_headline($business,$emotion,$keyword)
    {   
        $headline = Headline::where('business_id', $business)->where('emotion_id', $emotion)->where('keyword', $keyword)->get();
        $emotion = Emotion::all();

        return view('headline.list', compact('business', 'headline', 'keyword', 'emotion'));
    }

    // Find Now
    public function find_now(Request $request)
    {
        return redirect('headline/' . $request->business . '/' . $request->emotion);
    }

}
