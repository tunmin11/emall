<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
      protected $fillable = ['id','name','start_date','end_date','couser_id'];
}
