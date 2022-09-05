<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achievements extends Model
{
    //
    public $table = "achievements";
    protected $fillable = [

        'achievement_title',
        'path_name',
        'achievement_content'
    
        ];

}
