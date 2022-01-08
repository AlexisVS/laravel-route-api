<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateAttDefHpView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `att_def_hp` AS select 1 AS `pok_id`,1 AS `pok_name`,1 AS `b_atk`,1 AS `b_def`,1 AS `b_hp`,1 AS `b_speed`,1 AS `b_sp_atk`,1 AS `b_sp_def`");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `att_def_hp`");
    }
}
