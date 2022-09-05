<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsSubscription extends Model
{
    //
    public $table = "newsroom_subscription";
    protected $fillable = [

        'email',
    
        ];

}
