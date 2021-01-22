<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;
use App\Models\Emotion;
use App\Models\Keywords;
use App\Models\Headline;

class AdminHeadlineController extends Controller
{
    /**
     * Create headline
     * 
     * 
     */
    public function create_headline()
    {   
        $keywords = Keywords::all('keyword_text');

        $test = array($keywords);

        //echo array_values($test);

        $arr = array("Peter"=>"35", "Peter"=>"37", "Peter"=>"43");
        print_r(json_encode(array_values($arr)));

        //return view('admin.headline.create', compact('keywords'));
    }

    /**
     * Add emotion
     * 
     * 
     */
    public function add_emotion()
    {
        $emotion = Emotion::orderBy('id', 'Asc')->get();

        return view('admin.headline.emotion', compact('emotion'));
    }

    /**
     * Add business
     * 
     * 
     */
    public function add_business()
    {
        $business = Business::orderBy('id', 'Asc')->get();

        return view('admin.headline.business', compact('business'));
    }

    /**
     * Add keywords
     * 
     * 
     */
    public function add_keywords()
    {   
        $keywords = Keywords::orderBy('id', 'Asc')->get();

        return view('admin.headline.keywords', compact('keywords'));
    }

    /**
     * Store emotion
     * 
     * 
     */
    public function store_emotion(Request $request)
    {   
        $get_emotion = Emotion::orderBy('id', 'Desc')->first();
        $total = $get_emotion->id + 1;

        $emotion_id = 'e' . $total;
        //$emotion_id = 'e1';

        Emotion::create([
            'emotion_id' => $emotion_id,
            'emotion_text' => $request->emotion,
        ]);

        return redirect()->back()->with('success', 'Done update!');
    }

    /**
     * Store business
     * 
     * 
     */
    public function store_business(Request $request)
    {   
        $get_business = Business::orderBy('id', 'Desc')->first();
        $total = $get_business->id + 1;

        $business_id = 'b' . $total;
        //$business_id = 'b1';

        Business::create([
            'business_id' => $business_id,
            'business_type' => $request->business,
        ]);

        return redirect()->back()->with('success', 'Done update!');
    }

    /**
     * 
     * 
     * 
     */
    public function store_keywords(Request $request)
    {   
        $get_keyword = Keywords::orderBy('id', 'Desc')->first();
        $total = $get_keyword->id + 1;

        //$keyword_id = 'k1';
        $keyword_id = 'k' . $total;

        Keywords::create([
            'keyword_id' => $keyword_id,
            'keyword_text' => $request->keyword
        ]);

        return redirect()->back()->with('success', 'Done update!');
    }
}
