<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Class extends Model
{
    protected $fillable = ['id','name','start_date','end_date','couser_id'];
}
