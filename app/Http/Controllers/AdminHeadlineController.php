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
        return view('admin.headline.emotion');
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
}
