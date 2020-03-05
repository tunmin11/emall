<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{
	protected $guard = 'trainee';
    protected $fillable = ['id','name','email','password','phone','address','profile','nrc'];
}
