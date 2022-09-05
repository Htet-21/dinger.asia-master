<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Collective\Html\Eloquent\FormAccessible;

class Jobs extends Model
{
    //
    public $table = "jobs";
    protected $fillable = [

        'job_title',
        'job_category',
        'job_type',
        'level',
        'salary',
        'desc',
        'requirements',
        'offer',
        'deadline'

    ];

    public static function scopeLatest($query)
    {

        return $query->orderBy('id', 'des')->get();
    }
}
