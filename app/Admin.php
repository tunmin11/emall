<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
	protected $guard = 'super_admin';
    protected $fillable = ['name','email','password'];
}
