<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
class Shoplist extends Model
{
    //
    public $table = "shoplist";
    protected $fillable = [

        'shop_name',
        'path_name',
        'shop_link'
    
        ];
}
