<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WeeklyTutorial extends Model
{
   	protected $fillable = ['id','chapter_id','question','end_date'];
}
