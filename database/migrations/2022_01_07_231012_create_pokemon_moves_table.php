<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePokemonMovesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemon_moves', function (Blueprint $table) {
            $table->integer('pok_id')->index('ix_pokemon_moves_pokemon_id');
            $table->integer('version_group_id')->index('ix_pokemon_moves_version_group_id');
            $table->integer('move_id')->index('ix_pokemon_moves_move_id');
            $table->integer('method_id')->index('ix_pokemon_moves_pokemon_move_method_id');
            $table->integer('level')->index('ix_pokemon_moves_level');

            $table->primary(['pok_id', 'version_group_id', 'move_id', 'method_id', 'level']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pokemon_moves');
    }
}
