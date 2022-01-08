<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreatePokAbilitiesView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `pok_abilities` AS select 1 AS `pok_id`,1 AS `pok_name`,1 AS `abil_name`,1 AS `is_hidden`,1 AS `pok_base_experience`");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `pok_abilities`");
    }
}
