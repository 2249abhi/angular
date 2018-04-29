<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','phone', 'country', 'city', 'address', 'pincode'
    ];

    public   $rules = [
        'phone' => 'required|digits:10',
        'country' => 'required',
        'city' => 'required',
        'address' => 'required',
        'pincode' => 'required|digits:6',
    ];


    public function user()
    {
    	//return $this->belongsTo('App\User', 'foreign_key', 'other_key');
    	return $this->belongsTo('App\User','user_id','id');
    }
}
