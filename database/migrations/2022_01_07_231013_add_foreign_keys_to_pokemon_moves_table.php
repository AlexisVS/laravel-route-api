<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPokemonMovesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pokemon_moves', function (Blueprint $table) {
            $table->foreign(['method_id'], 'pokemon_moves_ibfk_4')->references(['method_id'])->on('pokemon_move_methods')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['pok_id'], 'pokemon_moves_ibfk_1')->references(['pok_id'])->on('pokemon');
            $table->foreign(['version_group_id'], 'pokemon_moves_ibfk_3')->references(['version_id'])->on('version_groups')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['move_id'], 'pokemon_moves_ibfk_2')->references(['move_id'])->on('moves');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pokemon_moves', function (Blueprint $table) {
            $table->dropForeign('pokemon_moves_ibfk_4');
            $table->dropForeign('pokemon_moves_ibfk_1');
            $table->dropForeign('pokemon_moves_ibfk_3');
            $table->dropForeign('pokemon_moves_ibfk_2');
        });
    }
}
