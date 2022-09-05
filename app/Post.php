<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class Post extends Model
{

    use SoftDeletes;

    //
    // protected $table = 'posts';
    // protected $primaryKey = 'post_id';

    protected $dates = ['deleted_at'];

    protected $fillable = [

    'title',
    'body',
    'path'

    ];

    public function user(){

    return $this->belongsTo('App\User');

    }

    public function photos(){

    return $this->morphMany('App\Photo', 'imageable');
    
    }

    public function tags(){

    return $this->morphToMany('App\Tag', 'taggable');

    }

    public static function scopeLatest($query){

    return $query->orderBy('id', 'asc')->get();

    }


}
