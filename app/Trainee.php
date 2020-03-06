<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class Trainee extends Model
{
	use Notifiable, HasRoles;
	
	protected $guard_name = 'trainee';
    protected $fillable = ['id','name','email','password','phone','address','profile','nrc'];
}
