<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeEfficacyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_efficacy', function (Blueprint $table) {
            $table->integer('damage_type_id');
            $table->integer('target_type_id')->index('target_type_id');
            $table->integer('damage_factor');

            $table->primary(['damage_type_id', 'target_type_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_efficacy');
    }
}
