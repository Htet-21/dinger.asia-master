<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    //
    public $table = "testimonials";
    protected $fillable = [

        'name',
        'position',
        'profile_img',
        'logo',
        'business_id',
        'content'
    
        ];

}
