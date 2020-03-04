<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssigmentAnswer extends Model
{
    protected $fillable = ['id','assigment_id','trainee_id','mark','assess_by_id','assessment_remark',
    						'assessment_status','submission'];
}
