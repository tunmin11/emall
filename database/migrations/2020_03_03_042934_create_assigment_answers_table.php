<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssigmentAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assigment_answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('assigment_id');
            $table->unsignedBigInteger('trainee_id');
            $table->integer('mark');
            $table->integer('assess_by_id');
            $table->string('assessment_remark');
            $table->string('assessment_status');
            $table->string('submission');
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
        Schema::dropIfExists('assigment_answers');
    }
}
