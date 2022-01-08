<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreatePokemonTotalView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `pokemon_total` AS select `assets_pokemon`.`pokemon`.`pok_id` AS `pok_id`,`assets_pokemon`.`pokemon`.`pok_name` AS `pok_name`,`assets_pokemon`.`base_stats`.`b_atk` AS `b_atk`,`assets_pokemon`.`base_stats`.`b_def` AS `b_def`,`assets_pokemon`.`base_stats`.`b_hp` AS `b_hp`,`assets_pokemon`.`base_stats`.`b_speed` AS `b_speed`,`assets_pokemon`.`base_stats`.`b_sp_atk` AS `b_sp_atk`,`assets_pokemon`.`base_stats`.`b_sp_def` AS `b_sp_def`,sum((((((`assets_pokemon`.`base_stats`.`b_atk` + `assets_pokemon`.`base_stats`.`b_def`) + `assets_pokemon`.`base_stats`.`b_hp`) + `assets_pokemon`.`base_stats`.`b_speed`) + `assets_pokemon`.`base_stats`.`b_sp_atk`) + `assets_pokemon`.`base_stats`.`b_sp_def`)) AS `total` from (`assets_pokemon`.`pokemon` join `assets_pokemon`.`base_stats` on((`assets_pokemon`.`pokemon`.`pok_id` = `assets_pokemon`.`base_stats`.`pok_id`))) group by `assets_pokemon`.`pokemon`.`pok_id`");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `pokemon_total`");
    }
}
