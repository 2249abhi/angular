<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
     protected $fillable = [
        'mobile', 'dob', 'address','city','zipcode'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
