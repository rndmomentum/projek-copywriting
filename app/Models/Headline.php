<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Headline extends Model
{
    use HasFactory;

    protected $table = 'headline';

    protected $fillable = [

        'headline_id',
        'headline_text'
        
    ];
}
