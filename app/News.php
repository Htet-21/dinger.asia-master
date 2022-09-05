<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    public $table = "news";
    protected $fillable = [

        'news_title',
        'path_name',
        'news_content'
    
        ];

}
