<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class Admin extends Model
{

	use Notifiable, HasRoles;

	protected $guarded = ['id'];
	
	protected $guard_name = 'admin';
    
    protected $fillable = ['name','email','password'];
    
    protected $hidden = [
     'employee_password', 'remember_token',
    ];

    public function getAuthPassword()
    {
     return $this->employee_password;
    }
    
}
