<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPokemonAbilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pokemon_abilities', function (Blueprint $table) {
            $table->foreign(['pok_id'], 'pokemon_abilities_ibfk_1')->references(['pok_id'])->on('pokemon');
            $table->foreign(['abil_id'], 'pokemon_abilities_ibfk_2')->references(['abil_id'])->on('abilities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pokemon_abilities', function (Blueprint $table) {
            $table->dropForeign('pokemon_abilities_ibfk_1');
            $table->dropForeign('pokemon_abilities_ibfk_2');
        });
    }
}
