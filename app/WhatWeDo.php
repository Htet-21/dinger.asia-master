<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WhatWeDo extends Model
{
    //
    public $table = "what_we_do";
    protected $fillable = [

        'enquiries',
        'merchants',
        'transactions'
    
        ];
}
