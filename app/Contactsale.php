<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactSale extends Model
{
    //
    public $table = "contactsale";

    protected $fillable = [

    'name',
    'email',
    'phone',
    'fb_link',
    'payment_volume',
    'message'

    ];

}
