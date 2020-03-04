<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassTrainee extends Model
{
    protected $table = 'class_trainee';
	protected $fillable = ['id','classroom_id','trainer_id','payment_archive'];
}
