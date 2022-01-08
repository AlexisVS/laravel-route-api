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
            $table->integer('pok_id')->primary();
            $table->integer('b_hp')->nullable();
            $table->integer('b_atk')->nullable();
            $table->integer('b_def')->nullable();
            $table->integer('b_sp_atk')->nullable();
            $table->integer('b_sp_def')->nullable();
            $table->integer('b_speed')->nullable();
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
