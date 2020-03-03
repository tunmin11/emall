<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assigment extends Model
{
   protected $fillable = ['id','name','class_id','start_date','end_date'];
}
