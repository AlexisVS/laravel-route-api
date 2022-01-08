<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPokemonEvolutionMatchupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pokemon_evolution_matchup', function (Blueprint $table) {
            $table->foreign(['pok_id'], 'poke_fk')->references(['pok_id'])->on('pokemon')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['hab_id'], 'pokemon_evolution_matchup_ibfk_6')->references(['hab_id'])->on('pokemon_habitats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pokemon_evolution_matchup', function (Blueprint $table) {
            $table->dropForeign('poke_fk');
            $table->dropForeign('pokemon_evolution_matchup_ibfk_6');
        });
    }
}
