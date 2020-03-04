<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $fillable = ['id','discuss_id','answer','is_correct','model','model_id'];
}
