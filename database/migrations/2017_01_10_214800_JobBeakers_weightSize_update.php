<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JobBeakersWeightSizeUpdate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('JobBeakers', function (Blueprint $table) {
            $table->double('pre_weight_1', 12, 5)->cahnge();
            $table->double('pre_weight_2', 12, 5)->change();
            $table->double('post_weight_1', 12, 5)->change();
            $table->double('post_weight_2', 12, 5)->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('JobBeakers', function (Blueprint $table) {
            //
        });
    }
}
