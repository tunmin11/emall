<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
	protected $guard = 'instructor';

    protected $fillable = ['id','name','email','phone','password','address','profile','nrc'];
}
