<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moves', function (Blueprint $table) {
            $table->integer('move_id', true);
            $table->string('move_name', 79);
            $table->integer('type_id')->index('type_id');
            $table->smallInteger('move_power')->nullable();
            $table->smallInteger('move_pp')->nullable();
            $table->smallInteger('move_accuracy')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('moves');
    }
}
