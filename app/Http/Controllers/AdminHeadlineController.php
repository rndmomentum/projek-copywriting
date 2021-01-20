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
        return view('admin.headline.create');
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
        return view('admin.headline.business');
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

        $business_id = 'e' . $total;
        //$business_id = 'e1';

        Business::create([
            'business_id' => $business_id,
            'business_type' => $request->business,
        ]);

        return redirect()->back()->with('success', 'Done update!');
    }
}
