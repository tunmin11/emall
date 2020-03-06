<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class Trainer extends Model
{

	use Notifiable, HasRoles;
	protected $guard_name = 'instructor';

    protected $fillable = ['id','name','email','phone','password','address','profile','nrc'];
}
