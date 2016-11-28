<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientUnits', function (Blueprint $table) 
        {
            $table->string('id', 45);
            $table->string('unitModel');
            $table->string('permitNumber');
            $table->integer('client_id')->unsigned();

            $table->foreign('client_id')->references('id')->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clientUnits', function (Blueprint $table) {
            //
        });
    }
}
