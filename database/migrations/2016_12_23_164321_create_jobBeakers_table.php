<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobBeakersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('JobBeakers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('job_id')->unsigned();
            $table->integer('jobUnit_id')->unsigned();
            $table->string('prefix');
            $table->string('number');
            $table->double('pre_weight_1', 5, 4);
            $table->double('pre_weight_2', 5, 4);
            $table->double('post_weight_1', 5, 4);
            $table->double('post_weight_2', 5, 4);
            $table->string('runNumber');
            $table->string('description');
            $table->timestamps();

            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');

            $table->foreign('jobUnit_id')->references('id')->on('JobUnits')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('JobBeakers');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
