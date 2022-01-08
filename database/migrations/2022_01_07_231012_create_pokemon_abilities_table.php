<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePokemonAbilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemon_abilities', function (Blueprint $table) {
            $table->integer('pok_id');
            $table->integer('abil_id')->index('abil_id');
            $table->boolean('is_hidden')->index('ix_pokemon_abilities_is_hidden');
            $table->integer('slot');

            $table->primary(['pok_id', 'slot']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pokemon_abilities');
    }
}
