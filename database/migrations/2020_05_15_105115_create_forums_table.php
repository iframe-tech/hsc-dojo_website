<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forums', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('subject');
            $table->string("topic");
            $table->string("title");
            $table->mediumText('question');
            $table->mediumText('answer')->default("Not Answered Yet");
            $table->integer('user_id');
            $table->string("question_image")->nullable();
            $table->string("answer_image")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forums');
    }
}
