<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactuser extends Model
{
    
    protected $table = 'contact_us';
    protected $fillable = array('name', 'email', 'phone','comment','updatetime','status');

}
