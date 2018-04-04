<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registeruser extends Model
{
    
    protected $table = 'bussiness';
    protected $fillable = array('fname', 'email', 'phone','created','updated','status');

}
