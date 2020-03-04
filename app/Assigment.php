<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assigment extends Model
{
   protected $fillable = ['id','name','classroom_id','start_date','end_date'];
}
