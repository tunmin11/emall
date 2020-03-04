<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassTrainer extends Model
{
    protected $table = 'class_trainer';
	protected $fillable = ['id','classroom_id','trainer_id'];
}
