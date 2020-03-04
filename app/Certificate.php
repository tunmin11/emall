<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $fillable = ['id','classroom_id','trainee_id','status','approved_by_id'];
}
