<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeeklyTutorialAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weekly_tutorial_answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('weekly_tutorial_id');
            $table->string('submission');
            $table->bigInteger('mark');
            $table->integer('assess_by_id');
            $table->integer('trainee_id');
            $table->string('assessment_remark');
            $table->string('assessment_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weekly_tutorial_answers');
    }
}
