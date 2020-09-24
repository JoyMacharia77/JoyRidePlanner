<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Individualsp extends Model
{
    protected $fillable = ['bs_name','bs_description','currency','price','contactNo','email','photo'];
}
