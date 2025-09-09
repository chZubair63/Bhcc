<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
             $table->string('job_title', 255);
            $table->integer('job_type')->nullable();
            $table->integer('job_sector_id')->nullable();
            $table->text('qualification')->nullable();
            $table->text('description')->nullable();
            $table->string('location', 255);
            $table->integer('experience_id')->nullable();
            $table->string('slug', 255)->nullable();
            $table->integer('sort_order')->nullable();
            $table->text('skills');
            $table->string('image', 255)->nullable();
            $table->integer('status_id')->nullable();
            $table->date('deadline')->nullable();
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
        Schema::dropIfExists('careers');
    }
}
