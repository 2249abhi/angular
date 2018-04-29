<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function user()
    {
    	//return $this->belongsTo('App\User', 'foreign_key', 'other_key');
    	return $this->belongsTo('App\User','user_id','id');
    }
}
