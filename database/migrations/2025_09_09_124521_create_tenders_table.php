<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenders', function (Blueprint $table) {
            $table->id();
             $table->string('job_title')->nullable();
            $table->text('qualifications')->nullable();
            $table->string('location')->nullable();
            $table->string('experience', 1000)->nullable();
            $table->string('slug')->nullable();
            $table->integer('sort_order')->nullable();
            $table->text('skills')->nullable();
            $table->string('image')->nullable();
            $table->integer('status_id')->nullable();
            $table->dateTime('deadline')->nullable();
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
        Schema::dropIfExists('tenders');
    }
}
