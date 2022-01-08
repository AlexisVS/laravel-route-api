<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBaseStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('base_stats', function (Blueprint $table) {
            $table->foreign(['pok_id'], 'pok_id')->references(['pok_id'])->on('pokemon')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('base_stats', function (Blueprint $table) {
            $table->dropForeign('pok_id');
        });
    }
}
