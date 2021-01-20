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
        $emotion = Emotion::orderBy('id', 'Desc')->get();

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
        $emotion_id = 'e1';

        Emotion::create([
            'emotion_id' => $emotion_id,
            'emotion_text' => $request->emotion,
        ]);

        return redirect()->back()->with('success', 'Done update!');
    }
}
