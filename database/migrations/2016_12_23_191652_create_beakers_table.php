<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeakersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beakers', function (Blueprint $table) {
            $table->string('prefix')->default("");
            $table->integer('id');
            $table->integer('size');

            $table->primary(['prefix', 'id']);
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
        Schema::dropIfExists('beakers');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
