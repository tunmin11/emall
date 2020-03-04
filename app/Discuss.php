<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discuss extends Model
{
    protected $fillable = ['id','discuss_room_id','model','model_id','question'];
}
