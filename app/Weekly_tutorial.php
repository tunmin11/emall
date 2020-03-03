<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weekly_tutorial extends Model
{
   	protected $fillable = ['id','chapter_id','question','end_date'];
}
