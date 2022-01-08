<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPokemonTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pokemon_types', function (Blueprint $table) {
            $table->foreign(['pok_id'], 'pokemon_types_ibfk_1')->references(['pok_id'])->on('pokemon');
            $table->foreign(['type_id'], 'pokemon_types_ibfk_2')->references(['type_id'])->on('types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pokemon_types', function (Blueprint $table) {
            $table->dropForeign('pokemon_types_ibfk_1');
            $table->dropForeign('pokemon_types_ibfk_2');
        });
    }
}
