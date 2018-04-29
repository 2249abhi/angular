<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    protected $fillable = [
        'post_type', 'post_title', 'post_content','author_id', 'category_id','post_slug',
    ];

    public   $rules = [
        'post_title' => 'required',
        'post_content' => 'required',
        'post_type' => 'required',
    ];


    public function user()
    {
    	//return $this->belongsTo('App\User', 'foreign_key', 'other_key');
    	return $this->belongsTo('App\User','author_id');
    }
}
