<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WeeklyTutorialAnswer extends Model
{
    protected $fillable = ['id','weekly_tutorial_id','submission','mark','submission','assess_by_id',
							'trainee_id','assessment_remark','assessment_status'];
}
