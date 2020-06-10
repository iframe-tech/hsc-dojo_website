<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhysicsMathsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('physics_maths', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('chapter');
            $table->string('question');
            $table->longText('solution');
            $table->float('significant');
            $table->integer('power');
            $table->string('hint')->nullable();
            $table->string('unit')->nullable();
            $table->string('question_image')->nullable();
            $table->string('answer_image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('physics_maths');
    }
}
