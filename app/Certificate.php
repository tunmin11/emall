<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $fillable = ['id','class_id','trainee_id','status','approved_by_id'];
}
