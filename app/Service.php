<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //protected $fillable = ['name']; // if you dont want to update all the data
    // if you dont want to write every single colomn then just do like the following
    protected $guarded = [];
}
