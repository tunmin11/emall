<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['id','name','src','chapter_id'];
}


$table->bigIncrements('id');
            $table->unsignedBigInteger('chapter_id');
            $table->text('question');
            $table->date('end_date');