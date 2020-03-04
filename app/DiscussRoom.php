<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiscussRoom extends Model
{
    protected $fillable = ['id','name','classroom_id'];
}
