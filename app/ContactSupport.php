<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactSupport extends Model
{
    //
    public $table = "contact";
    protected $fillable = [

        'name',
        'email',
        'message'
    
        ];

}
