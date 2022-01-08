<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePokemonEvolutionMatchupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemon_evolution_matchup', function (Blueprint $table) {
            $table->integer('pok_id', true);
            $table->integer('evolves_from_species_id')->nullable()->index('evolves_from_species_id');
            $table->integer('hab_id')->nullable()->index('habitat_id');
            $table->integer('gender_rate');
            $table->integer('capture_rate');
            $table->integer('base_happiness');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pokemon_evolution_matchup');
    }
}
