<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateHabitatViewView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `habitat_view` AS select 1 AS `pok_id`,1 AS `pok_name`,1 AS `hab_name`,1 AS `pok_height`,1 AS `pok_weight`,1 AS `capture_rate`,1 AS `base_happiness`");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `habitat_view`");
    }
}
