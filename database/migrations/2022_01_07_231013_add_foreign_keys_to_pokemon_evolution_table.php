<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPokemonEvolutionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pokemon_evolution', function (Blueprint $table) {
            $table->foreign(['evolved_species_id'], 'pokemon_evolution_ibfk_1')->references(['pok_id'])->on('pokemon_evolution_matchup');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pokemon_evolution', function (Blueprint $table) {
            $table->dropForeign('pokemon_evolution_ibfk_1');
        });
    }
}
