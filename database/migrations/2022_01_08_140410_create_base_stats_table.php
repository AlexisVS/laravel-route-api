<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaseStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('base_stats', function (Blueprint $table) {
            $table->id();
            $table->integer('bs_hp');
            $table->integer('bs_atk');
            $table->integer('bs_def');
            $table->integer('bs_sp_atk');
            $table->integer('bs_sp_def');
            $table->integer('bs_speed');
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
        Schema::dropIfExists('base_stats');
    }
}
