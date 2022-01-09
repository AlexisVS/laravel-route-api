<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BaseStatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('base_stats')->insert([
            [
                "bs_hp" => 45,
                "bs_atk" => 49,
                "bs_def" => 49,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 65,
                "bs_speed" => 45
            ],
            [
                "bs_hp" => 60,
                "bs_atk" => 62,
                "bs_def" => 63,
                "bs_sp_atk" => 80,
                "bs_sp_def" => 80,
                "bs_speed" => 60
            ],
            [
                "bs_hp" => 80,
                "bs_atk" => 82,
                "bs_def" => 83,
                "bs_sp_atk" => 100,
                "bs_sp_def" => 100,
                "bs_speed" => 80
            ], [
                "bs_hp" => 39,
                "bs_atk" => 52,
                "bs_def" => 43,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 50,
                "bs_speed" => 65
            ], [
                "bs_hp" => 58,
                "bs_atk" => 64,
                "bs_def" => 58,
                "bs_sp_atk" => 80,
                "bs_sp_def" => 65,
                "bs_speed" => 80
            ], [
                "bs_hp" => 78,
                "bs_atk" => 84,
                "bs_def" => 78,
                "bs_sp_atk" => 109,
                "bs_sp_def" => 85,
                "bs_speed" => 100
            ], [
                "bs_hp" => 44,
                "bs_atk" => 48,
                "bs_def" => 65,
                "bs_sp_atk" => 50,
                "bs_sp_def" => 64,
                "bs_speed" => 43
            ], [
                "bs_hp" => 59,
                "bs_atk" => 63,
                "bs_def" => 80,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 80,
                "bs_speed" => 58
            ], [
                "bs_hp" => 79,
                "bs_atk" => 83,
                "bs_def" => 100,
                "bs_sp_atk" => 85,
                "bs_sp_def" => 105,
                "bs_speed" => 78
            ], [
                "bs_hp" => 45,
                "bs_atk" => 30,
                "bs_def" => 35,
                "bs_sp_atk" => 20,
                "bs_sp_def" => 20,
                "bs_speed" => 45
            ], [
                "bs_hp" => 50,
                "bs_atk" => 20,
                "bs_def" => 55,
                "bs_sp_atk" => 25,
                "bs_sp_def" => 25,
                "bs_speed" => 30
            ], [
                "bs_hp" => 60,
                "bs_atk" => 45,
                "bs_def" => 50,
                "bs_sp_atk" => 90,
                "bs_sp_def" => 80,
                "bs_speed" => 70
            ], [
                "bs_hp" => 40,
                "bs_atk" => 35,
                "bs_def" => 30,
                "bs_sp_atk" => 20,
                "bs_sp_def" => 20,
                "bs_speed" => 50
            ], [
                "bs_hp" => 45,
                "bs_atk" => 25,
                "bs_def" => 50,
                "bs_sp_atk" => 25,
                "bs_sp_def" => 25,
                "bs_speed" => 35
            ], [
                "bs_hp" => 65,
                "bs_atk" => 90,
                "bs_def" => 40,
                "bs_sp_atk" => 45,
                "bs_sp_def" => 80,
                "bs_speed" => 75
            ], [
                "bs_hp" => 40,
                "bs_atk" => 45,
                "bs_def" => 40,
                "bs_sp_atk" => 35,
                "bs_sp_def" => 35,
                "bs_speed" => 56
            ], [
                "bs_hp" => 63,
                "bs_atk" => 60,
                "bs_def" => 55,
                "bs_sp_atk" => 50,
                "bs_sp_def" => 50,
                "bs_speed" => 71
            ], [
                "bs_hp" => 83,
                "bs_atk" => 80,
                "bs_def" => 75,
                "bs_sp_atk" => 70,
                "bs_sp_def" => 70,
                "bs_speed" => 101
            ], [
                "bs_hp" => 30,
                "bs_atk" => 56,
                "bs_def" => 35,
                "bs_sp_atk" => 25,
                "bs_sp_def" => 35,
                "bs_speed" => 72
            ], [
                "bs_hp" => 55,
                "bs_atk" => 81,
                "bs_def" => 60,
                "bs_sp_atk" => 50,
                "bs_sp_def" => 70,
                "bs_speed" => 97
            ], [
                "bs_hp" => 40,
                "bs_atk" => 60,
                "bs_def" => 30,
                "bs_sp_atk" => 31,
                "bs_sp_def" => 31,
                "bs_speed" => 70
            ], [
                "bs_hp" => 65,
                "bs_atk" => 90,
                "bs_def" => 65,
                "bs_sp_atk" => 61,
                "bs_sp_def" => 61,
                "bs_speed" => 100
            ], [
                "bs_hp" => 35,
                "bs_atk" => 60,
                "bs_def" => 44,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 54,
                "bs_speed" => 55
            ], [
                "bs_hp" => 60,
                "bs_atk" => 85,
                "bs_def" => 69,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 79,
                "bs_speed" => 80
            ], [
                "bs_hp" => 35,
                "bs_atk" => 55,
                "bs_def" => 40,
                "bs_sp_atk" => 50,
                "bs_sp_def" => 50,
                "bs_speed" => 90
            ], [
                "bs_hp" => 60,
                "bs_atk" => 90,
                "bs_def" => 55,
                "bs_sp_atk" => 90,
                "bs_sp_def" => 80,
                "bs_speed" => 110
            ], [
                "bs_hp" => 50,
                "bs_atk" => 75,
                "bs_def" => 85,
                "bs_sp_atk" => 20,
                "bs_sp_def" => 30,
                "bs_speed" => 40
            ], [
                "bs_hp" => 75,
                "bs_atk" => 100,
                "bs_def" => 110,
                "bs_sp_atk" => 45,
                "bs_sp_def" => 55,
                "bs_speed" => 65
            ], [
                "bs_hp" => 55,
                "bs_atk" => 47,
                "bs_def" => 52,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 40,
                "bs_speed" => 41
            ], [
                "bs_hp" => 70,
                "bs_atk" => 62,
                "bs_def" => 67,
                "bs_sp_atk" => 55,
                "bs_sp_def" => 55,
                "bs_speed" => 56
            ], [
                "bs_hp" => 90,
                "bs_atk" => 92,
                "bs_def" => 87,
                "bs_sp_atk" => 75,
                "bs_sp_def" => 85,
                "bs_speed" => 76
            ], [
                "bs_hp" => 46,
                "bs_atk" => 57,
                "bs_def" => 40,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 40,
                "bs_speed" => 50
            ], [
                "bs_hp" => 61,
                "bs_atk" => 72,
                "bs_def" => 57,
                "bs_sp_atk" => 55,
                "bs_sp_def" => 55,
                "bs_speed" => 65
            ], [
                "bs_hp" => 81,
                "bs_atk" => 102,
                "bs_def" => 77,
                "bs_sp_atk" => 85,
                "bs_sp_def" => 75,
                "bs_speed" => 85
            ], [
                "bs_hp" => 70,
                "bs_atk" => 45,
                "bs_def" => 48,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 65,
                "bs_speed" => 35
            ], [
                "bs_hp" => 95,
                "bs_atk" => 70,
                "bs_def" => 73,
                "bs_sp_atk" => 95,
                "bs_sp_def" => 90,
                "bs_speed" => 60
            ], [
                "bs_hp" => 38,
                "bs_atk" => 41,
                "bs_def" => 40,
                "bs_sp_atk" => 50,
                "bs_sp_def" => 65,
                "bs_speed" => 65
            ], [
                "bs_hp" => 73,
                "bs_atk" => 76,
                "bs_def" => 75,
                "bs_sp_atk" => 81,
                "bs_sp_def" => 100,
                "bs_speed" => 100
            ], [
                "bs_hp" => 115,
                "bs_atk" => 45,
                "bs_def" => 20,
                "bs_sp_atk" => 45,
                "bs_sp_def" => 25,
                "bs_speed" => 20
            ], [
                "bs_hp" => 140,
                "bs_atk" => 70,
                "bs_def" => 45,
                "bs_sp_atk" => 85,
                "bs_sp_def" => 50,
                "bs_speed" => 45
            ], [
                "bs_hp" => 40,
                "bs_atk" => 45,
                "bs_def" => 35,
                "bs_sp_atk" => 30,
                "bs_sp_def" => 40,
                "bs_speed" => 55
            ], [
                "bs_hp" => 75,
                "bs_atk" => 80,
                "bs_def" => 70,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 75,
                "bs_speed" => 90
            ], [
                "bs_hp" => 45,
                "bs_atk" => 50,
                "bs_def" => 55,
                "bs_sp_atk" => 75,
                "bs_sp_def" => 65,
                "bs_speed" => 30
            ], [
                "bs_hp" => 60,
                "bs_atk" => 65,
                "bs_def" => 70,
                "bs_sp_atk" => 85,
                "bs_sp_def" => 75,
                "bs_speed" => 40
            ], [
                "bs_hp" => 75,
                "bs_atk" => 80,
                "bs_def" => 85,
                "bs_sp_atk" => 110,
                "bs_sp_def" => 90,
                "bs_speed" => 50
            ], [
                "bs_hp" => 35,
                "bs_atk" => 70,
                "bs_def" => 55,
                "bs_sp_atk" => 45,
                "bs_sp_def" => 55,
                "bs_speed" => 25
            ], [
                "bs_hp" => 60,
                "bs_atk" => 95,
                "bs_def" => 80,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 80,
                "bs_speed" => 30
            ], [
                "bs_hp" => 60,
                "bs_atk" => 55,
                "bs_def" => 50,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 55,
                "bs_speed" => 45
            ], [
                "bs_hp" => 70,
                "bs_atk" => 65,
                "bs_def" => 60,
                "bs_sp_atk" => 90,
                "bs_sp_def" => 75,
                "bs_speed" => 90
            ], [
                "bs_hp" => 10,
                "bs_atk" => 55,
                "bs_def" => 25,
                "bs_sp_atk" => 35,
                "bs_sp_def" => 45,
                "bs_speed" => 95
            ], [
                "bs_hp" => 35,
                "bs_atk" => 80,
                "bs_def" => 50,
                "bs_sp_atk" => 50,
                "bs_sp_def" => 70,
                "bs_speed" => 120
            ], [
                "bs_hp" => 40,
                "bs_atk" => 45,
                "bs_def" => 35,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 40,
                "bs_speed" => 90
            ], [
                "bs_hp" => 65,
                "bs_atk" => 70,
                "bs_def" => 60,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 65,
                "bs_speed" => 115
            ], [
                "bs_hp" => 50,
                "bs_atk" => 52,
                "bs_def" => 48,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 50,
                "bs_speed" => 55
            ], [
                "bs_hp" => 80,
                "bs_atk" => 82,
                "bs_def" => 78,
                "bs_sp_atk" => 95,
                "bs_sp_def" => 80,
                "bs_speed" => 85
            ], [
                "bs_hp" => 40,
                "bs_atk" => 80,
                "bs_def" => 35,
                "bs_sp_atk" => 35,
                "bs_sp_def" => 45,
                "bs_speed" => 70
            ], [
                "bs_hp" => 65,
                "bs_atk" => 105,
                "bs_def" => 60,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 70,
                "bs_speed" => 95
            ], [
                "bs_hp" => 55,
                "bs_atk" => 70,
                "bs_def" => 45,
                "bs_sp_atk" => 70,
                "bs_sp_def" => 50,
                "bs_speed" => 60
            ], [
                "bs_hp" => 90,
                "bs_atk" => 110,
                "bs_def" => 80,
                "bs_sp_atk" => 100,
                "bs_sp_def" => 80,
                "bs_speed" => 95
            ], [
                "bs_hp" => 40,
                "bs_atk" => 50,
                "bs_def" => 40,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 40,
                "bs_speed" => 90
            ], [
                "bs_hp" => 65,
                "bs_atk" => 65,
                "bs_def" => 65,
                "bs_sp_atk" => 50,
                "bs_sp_def" => 50,
                "bs_speed" => 90
            ], [
                "bs_hp" => 90,
                "bs_atk" => 95,
                "bs_def" => 95,
                "bs_sp_atk" => 70,
                "bs_sp_def" => 90,
                "bs_speed" => 70
            ], [
                "bs_hp" => 25,
                "bs_atk" => 20,
                "bs_def" => 15,
                "bs_sp_atk" => 105,
                "bs_sp_def" => 55,
                "bs_speed" => 90
            ], [
                "bs_hp" => 40,
                "bs_atk" => 35,
                "bs_def" => 30,
                "bs_sp_atk" => 120,
                "bs_sp_def" => 70,
                "bs_speed" => 105
            ], [
                "bs_hp" => 55,
                "bs_atk" => 50,
                "bs_def" => 45,
                "bs_sp_atk" => 135,
                "bs_sp_def" => 95,
                "bs_speed" => 120
            ], [
                "bs_hp" => 70,
                "bs_atk" => 80,
                "bs_def" => 50,
                "bs_sp_atk" => 35,
                "bs_sp_def" => 35,
                "bs_speed" => 35
            ], [
                "bs_hp" => 80,
                "bs_atk" => 100,
                "bs_def" => 70,
                "bs_sp_atk" => 50,
                "bs_sp_def" => 60,
                "bs_speed" => 45
            ], [
                "bs_hp" => 90,
                "bs_atk" => 130,
                "bs_def" => 80,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 85,
                "bs_speed" => 55
            ], [
                "bs_hp" => 50,
                "bs_atk" => 75,
                "bs_def" => 35,
                "bs_sp_atk" => 70,
                "bs_sp_def" => 30,
                "bs_speed" => 40
            ], [
                "bs_hp" => 65,
                "bs_atk" => 90,
                "bs_def" => 50,
                "bs_sp_atk" => 85,
                "bs_sp_def" => 45,
                "bs_speed" => 55
            ], [
                "bs_hp" => 80,
                "bs_atk" => 105,
                "bs_def" => 65,
                "bs_sp_atk" => 100,
                "bs_sp_def" => 70,
                "bs_speed" => 70
            ], [
                "bs_hp" => 40,
                "bs_atk" => 40,
                "bs_def" => 35,
                "bs_sp_atk" => 50,
                "bs_sp_def" => 100,
                "bs_speed" => 70
            ], [
                "bs_hp" => 80,
                "bs_atk" => 70,
                "bs_def" => 65,
                "bs_sp_atk" => 80,
                "bs_sp_def" => 120,
                "bs_speed" => 100
            ], [
                "bs_hp" => 40,
                "bs_atk" => 80,
                "bs_def" => 100,
                "bs_sp_atk" => 30,
                "bs_sp_def" => 30,
                "bs_speed" => 20
            ], [
                "bs_hp" => 55,
                "bs_atk" => 95,
                "bs_def" => 115,
                "bs_sp_atk" => 45,
                "bs_sp_def" => 45,
                "bs_speed" => 35
            ], [
                "bs_hp" => 80,
                "bs_atk" => 120,
                "bs_def" => 130,
                "bs_sp_atk" => 55,
                "bs_sp_def" => 65,
                "bs_speed" => 45
            ], [
                "bs_hp" => 50,
                "bs_atk" => 85,
                "bs_def" => 55,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 65,
                "bs_speed" => 90
            ], [
                "bs_hp" => 65,
                "bs_atk" => 100,
                "bs_def" => 70,
                "bs_sp_atk" => 80,
                "bs_sp_def" => 80,
                "bs_speed" => 105
            ], [
                "bs_hp" => 90,
                "bs_atk" => 65,
                "bs_def" => 65,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 40,
                "bs_speed" => 15
            ], [
                "bs_hp" => 95,
                "bs_atk" => 75,
                "bs_def" => 110,
                "bs_sp_atk" => 100,
                "bs_sp_def" => 80,
                "bs_speed" => 30
            ], [
                "bs_hp" => 25,
                "bs_atk" => 35,
                "bs_def" => 70,
                "bs_sp_atk" => 95,
                "bs_sp_def" => 55,
                "bs_speed" => 45
            ], [
                "bs_hp" => 50,
                "bs_atk" => 60,
                "bs_def" => 95,
                "bs_sp_atk" => 120,
                "bs_sp_def" => 70,
                "bs_speed" => 70
            ], [
                "bs_hp" => 52,
                "bs_atk" => 65,
                "bs_def" => 55,
                "bs_sp_atk" => 58,
                "bs_sp_def" => 62,
                "bs_speed" => 60
            ], [
                "bs_hp" => 35,
                "bs_atk" => 85,
                "bs_def" => 45,
                "bs_sp_atk" => 35,
                "bs_sp_def" => 35,
                "bs_speed" => 75
            ], [
                "bs_hp" => 60,
                "bs_atk" => 110,
                "bs_def" => 70,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 60,
                "bs_speed" => 100
            ], [
                "bs_hp" => 65,
                "bs_atk" => 45,
                "bs_def" => 55,
                "bs_sp_atk" => 45,
                "bs_sp_def" => 70,
                "bs_speed" => 45
            ], [
                "bs_hp" => 90,
                "bs_atk" => 70,
                "bs_def" => 80,
                "bs_sp_atk" => 70,
                "bs_sp_def" => 95,
                "bs_speed" => 70
            ], [
                "bs_hp" => 80,
                "bs_atk" => 80,
                "bs_def" => 50,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 50,
                "bs_speed" => 25
            ], [
                "bs_hp" => 105,
                "bs_atk" => 105,
                "bs_def" => 75,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 100,
                "bs_speed" => 50
            ], [
                "bs_hp" => 30,
                "bs_atk" => 65,
                "bs_def" => 100,
                "bs_sp_atk" => 45,
                "bs_sp_def" => 25,
                "bs_speed" => 40
            ], [
                "bs_hp" => 50,
                "bs_atk" => 95,
                "bs_def" => 180,
                "bs_sp_atk" => 85,
                "bs_sp_def" => 45,
                "bs_speed" => 70
            ], [
                "bs_hp" => 30,
                "bs_atk" => 35,
                "bs_def" => 30,
                "bs_sp_atk" => 100,
                "bs_sp_def" => 35,
                "bs_speed" => 80
            ], [
                "bs_hp" => 45,
                "bs_atk" => 50,
                "bs_def" => 45,
                "bs_sp_atk" => 115,
                "bs_sp_def" => 55,
                "bs_speed" => 95
            ], [
                "bs_hp" => 60,
                "bs_atk" => 65,
                "bs_def" => 60,
                "bs_sp_atk" => 130,
                "bs_sp_def" => 75,
                "bs_speed" => 110
            ], [
                "bs_hp" => 35,
                "bs_atk" => 45,
                "bs_def" => 160,
                "bs_sp_atk" => 30,
                "bs_sp_def" => 45,
                "bs_speed" => 70
            ], [
                "bs_hp" => 60,
                "bs_atk" => 48,
                "bs_def" => 45,
                "bs_sp_atk" => 43,
                "bs_sp_def" => 90,
                "bs_speed" => 42
            ], [
                "bs_hp" => 85,
                "bs_atk" => 73,
                "bs_def" => 70,
                "bs_sp_atk" => 73,
                "bs_sp_def" => 115,
                "bs_speed" => 67
            ], [
                "bs_hp" => 30,
                "bs_atk" => 105,
                "bs_def" => 90,
                "bs_sp_atk" => 25,
                "bs_sp_def" => 25,
                "bs_speed" => 50
            ], [
                "bs_hp" => 55,
                "bs_atk" => 130,
                "bs_def" => 115,
                "bs_sp_atk" => 50,
                "bs_sp_def" => 50,
                "bs_speed" => 75
            ], [
                "bs_hp" => 40,
                "bs_atk" => 30,
                "bs_def" => 50,
                "bs_sp_atk" => 55,
                "bs_sp_def" => 55,
                "bs_speed" => 100
            ], [
                "bs_hp" => 60,
                "bs_atk" => 50,
                "bs_def" => 70,
                "bs_sp_atk" => 80,
                "bs_sp_def" => 80,
                "bs_speed" => 140
            ], [
                "bs_hp" => 60,
                "bs_atk" => 40,
                "bs_def" => 80,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 45,
                "bs_speed" => 40
            ], [
                "bs_hp" => 95,
                "bs_atk" => 95,
                "bs_def" => 85,
                "bs_sp_atk" => 125,
                "bs_sp_def" => 65,
                "bs_speed" => 55
            ], [
                "bs_hp" => 50,
                "bs_atk" => 50,
                "bs_def" => 95,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 50,
                "bs_speed" => 35
            ], [
                "bs_hp" => 60,
                "bs_atk" => 80,
                "bs_def" => 110,
                "bs_sp_atk" => 50,
                "bs_sp_def" => 80,
                "bs_speed" => 45
            ], [
                "bs_hp" => 50,
                "bs_atk" => 120,
                "bs_def" => 53,
                "bs_sp_atk" => 35,
                "bs_sp_def" => 110,
                "bs_speed" => 87
            ], [
                "bs_hp" => 50,
                "bs_atk" => 105,
                "bs_def" => 79,
                "bs_sp_atk" => 35,
                "bs_sp_def" => 110,
                "bs_speed" => 76
            ], [
                "bs_hp" => 90,
                "bs_atk" => 55,
                "bs_def" => 75,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 75,
                "bs_speed" => 30
            ], [
                "bs_hp" => 40,
                "bs_atk" => 65,
                "bs_def" => 95,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 45,
                "bs_speed" => 35
            ], [
                "bs_hp" => 65,
                "bs_atk" => 90,
                "bs_def" => 120,
                "bs_sp_atk" => 85,
                "bs_sp_def" => 70,
                "bs_speed" => 60
            ], [
                "bs_hp" => 80,
                "bs_atk" => 85,
                "bs_def" => 95,
                "bs_sp_atk" => 30,
                "bs_sp_def" => 30,
                "bs_speed" => 25
            ], [
                "bs_hp" => 105,
                "bs_atk" => 130,
                "bs_def" => 120,
                "bs_sp_atk" => 45,
                "bs_sp_def" => 45,
                "bs_speed" => 40
            ], [
                "bs_hp" => 250,
                "bs_atk" => 5,
                "bs_def" => 5,
                "bs_sp_atk" => 35,
                "bs_sp_def" => 105,
                "bs_speed" => 50
            ], [
                "bs_hp" => 65,
                "bs_atk" => 55,
                "bs_def" => 115,
                "bs_sp_atk" => 100,
                "bs_sp_def" => 40,
                "bs_speed" => 60
            ], [
                "bs_hp" => 105,
                "bs_atk" => 95,
                "bs_def" => 80,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 80,
                "bs_speed" => 90
            ], [
                "bs_hp" => 30,
                "bs_atk" => 40,
                "bs_def" => 70,
                "bs_sp_atk" => 70,
                "bs_sp_def" => 25,
                "bs_speed" => 60
            ], [
                "bs_hp" => 55,
                "bs_atk" => 65,
                "bs_def" => 95,
                "bs_sp_atk" => 95,
                "bs_sp_def" => 45,
                "bs_speed" => 85
            ], [
                "bs_hp" => 45,
                "bs_atk" => 67,
                "bs_def" => 60,
                "bs_sp_atk" => 35,
                "bs_sp_def" => 50,
                "bs_speed" => 63
            ], [
                "bs_hp" => 80,
                "bs_atk" => 92,
                "bs_def" => 65,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 80,
                "bs_speed" => 68
            ], [
                "bs_hp" => 30,
                "bs_atk" => 45,
                "bs_def" => 55,
                "bs_sp_atk" => 70,
                "bs_sp_def" => 55,
                "bs_speed" => 85
            ], [
                "bs_hp" => 60,
                "bs_atk" => 75,
                "bs_def" => 85,
                "bs_sp_atk" => 100,
                "bs_sp_def" => 85,
                "bs_speed" => 115
            ], [
                "bs_hp" => 40,
                "bs_atk" => 45,
                "bs_def" => 65,
                "bs_sp_atk" => 100,
                "bs_sp_def" => 120,
                "bs_speed" => 90
            ], [
                "bs_hp" => 70,
                "bs_atk" => 110,
                "bs_def" => 80,
                "bs_sp_atk" => 55,
                "bs_sp_def" => 80,
                "bs_speed" => 105
            ], [
                "bs_hp" => 65,
                "bs_atk" => 50,
                "bs_def" => 35,
                "bs_sp_atk" => 115,
                "bs_sp_def" => 95,
                "bs_speed" => 95
            ], [
                "bs_hp" => 65,
                "bs_atk" => 83,
                "bs_def" => 57,
                "bs_sp_atk" => 95,
                "bs_sp_def" => 85,
                "bs_speed" => 105
            ], [
                "bs_hp" => 65,
                "bs_atk" => 95,
                "bs_def" => 57,
                "bs_sp_atk" => 100,
                "bs_sp_def" => 85,
                "bs_speed" => 93
            ], [
                "bs_hp" => 65,
                "bs_atk" => 125,
                "bs_def" => 100,
                "bs_sp_atk" => 55,
                "bs_sp_def" => 70,
                "bs_speed" => 85
            ], [
                "bs_hp" => 75,
                "bs_atk" => 100,
                "bs_def" => 95,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 70,
                "bs_speed" => 110
            ], [
                "bs_hp" => 20,
                "bs_atk" => 10,
                "bs_def" => 55,
                "bs_sp_atk" => 15,
                "bs_sp_def" => 20,
                "bs_speed" => 80
            ], [
                "bs_hp" => 95,
                "bs_atk" => 125,
                "bs_def" => 79,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 100,
                "bs_speed" => 81
            ], [
                "bs_hp" => 130,
                "bs_atk" => 85,
                "bs_def" => 80,
                "bs_sp_atk" => 85,
                "bs_sp_def" => 95,
                "bs_speed" => 60
            ], [
                "bs_hp" => 48,
                "bs_atk" => 48,
                "bs_def" => 48,
                "bs_sp_atk" => 48,
                "bs_sp_def" => 48,
                "bs_speed" => 48
            ], [
                "bs_hp" => 55,
                "bs_atk" => 55,
                "bs_def" => 50,
                "bs_sp_atk" => 45,
                "bs_sp_def" => 65,
                "bs_speed" => 55
            ], [
                "bs_hp" => 130,
                "bs_atk" => 65,
                "bs_def" => 60,
                "bs_sp_atk" => 110,
                "bs_sp_def" => 95,
                "bs_speed" => 65
            ], [
                "bs_hp" => 65,
                "bs_atk" => 65,
                "bs_def" => 60,
                "bs_sp_atk" => 110,
                "bs_sp_def" => 95,
                "bs_speed" => 130
            ], [
                "bs_hp" => 65,
                "bs_atk" => 130,
                "bs_def" => 60,
                "bs_sp_atk" => 95,
                "bs_sp_def" => 110,
                "bs_speed" => 65
            ], [
                "bs_hp" => 65,
                "bs_atk" => 60,
                "bs_def" => 70,
                "bs_sp_atk" => 85,
                "bs_sp_def" => 75,
                "bs_speed" => 40
            ], [
                "bs_hp" => 35,
                "bs_atk" => 40,
                "bs_def" => 100,
                "bs_sp_atk" => 90,
                "bs_sp_def" => 55,
                "bs_speed" => 35
            ], [
                "bs_hp" => 70,
                "bs_atk" => 60,
                "bs_def" => 125,
                "bs_sp_atk" => 115,
                "bs_sp_def" => 70,
                "bs_speed" => 55
            ], [
                "bs_hp" => 30,
                "bs_atk" => 80,
                "bs_def" => 90,
                "bs_sp_atk" => 55,
                "bs_sp_def" => 45,
                "bs_speed" => 55
            ], [
                "bs_hp" => 60,
                "bs_atk" => 115,
                "bs_def" => 105,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 70,
                "bs_speed" => 80
            ], [
                "bs_hp" => 80,
                "bs_atk" => 105,
                "bs_def" => 65,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 75,
                "bs_speed" => 130
            ], [
                "bs_hp" => 160,
                "bs_atk" => 110,
                "bs_def" => 65,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 110,
                "bs_speed" => 30
            ], [
                "bs_hp" => 90,
                "bs_atk" => 85,
                "bs_def" => 100,
                "bs_sp_atk" => 95,
                "bs_sp_def" => 125,
                "bs_speed" => 85
            ], [
                "bs_hp" => 90,
                "bs_atk" => 90,
                "bs_def" => 85,
                "bs_sp_atk" => 125,
                "bs_sp_def" => 90,
                "bs_speed" => 100
            ], [
                "bs_hp" => 90,
                "bs_atk" => 100,
                "bs_def" => 90,
                "bs_sp_atk" => 125,
                "bs_sp_def" => 85,
                "bs_speed" => 90
            ], [
                "bs_hp" => 41,
                "bs_atk" => 64,
                "bs_def" => 45,
                "bs_sp_atk" => 50,
                "bs_sp_def" => 50,
                "bs_speed" => 50
            ], [
                "bs_hp" => 61,
                "bs_atk" => 84,
                "bs_def" => 65,
                "bs_sp_atk" => 70,
                "bs_sp_def" => 70,
                "bs_speed" => 70
            ], [
                "bs_hp" => 91,
                "bs_atk" => 134,
                "bs_def" => 95,
                "bs_sp_atk" => 100,
                "bs_sp_def" => 100,
                "bs_speed" => 80
            ], [
                "bs_hp" => 106,
                "bs_atk" => 110,
                "bs_def" => 90,
                "bs_sp_atk" => 154,
                "bs_sp_def" => 90,
                "bs_speed" => 130
            ], [
                "bs_hp" => 100,
                "bs_atk" => 100,
                "bs_def" => 100,
                "bs_sp_atk" => 100,
                "bs_sp_def" => 100,
                "bs_speed" => 100
            ], [
                "bs_hp" => 45,
                "bs_atk" => 49,
                "bs_def" => 65,
                "bs_sp_atk" => 49,
                "bs_sp_def" => 65,
                "bs_speed" => 45
            ], [
                "bs_hp" => 60,
                "bs_atk" => 62,
                "bs_def" => 80,
                "bs_sp_atk" => 63,
                "bs_sp_def" => 80,
                "bs_speed" => 60
            ], [
                "bs_hp" => 80,
                "bs_atk" => 82,
                "bs_def" => 100,
                "bs_sp_atk" => 83,
                "bs_sp_def" => 100,
                "bs_speed" => 80
            ], [
                "bs_hp" => 39,
                "bs_atk" => 52,
                "bs_def" => 43,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 50,
                "bs_speed" => 65
            ], [
                "bs_hp" => 58,
                "bs_atk" => 64,
                "bs_def" => 58,
                "bs_sp_atk" => 80,
                "bs_sp_def" => 65,
                "bs_speed" => 80
            ], [
                "bs_hp" => 78,
                "bs_atk" => 84,
                "bs_def" => 78,
                "bs_sp_atk" => 109,
                "bs_sp_def" => 85,
                "bs_speed" => 100
            ], [
                "bs_hp" => 50,
                "bs_atk" => 65,
                "bs_def" => 64,
                "bs_sp_atk" => 44,
                "bs_sp_def" => 48,
                "bs_speed" => 43
            ], [
                "bs_hp" => 65,
                "bs_atk" => 80,
                "bs_def" => 80,
                "bs_sp_atk" => 59,
                "bs_sp_def" => 63,
                "bs_speed" => 58
            ], [
                "bs_hp" => 85,
                "bs_atk" => 105,
                "bs_def" => 100,
                "bs_sp_atk" => 79,
                "bs_sp_def" => 83,
                "bs_speed" => 78
            ], [
                "bs_hp" => 35,
                "bs_atk" => 46,
                "bs_def" => 34,
                "bs_sp_atk" => 35,
                "bs_sp_def" => 45,
                "bs_speed" => 20
            ], [
                "bs_hp" => 85,
                "bs_atk" => 76,
                "bs_def" => 64,
                "bs_sp_atk" => 45,
                "bs_sp_def" => 55,
                "bs_speed" => 90
            ], [
                "bs_hp" => 60,
                "bs_atk" => 30,
                "bs_def" => 30,
                "bs_sp_atk" => 36,
                "bs_sp_def" => 56,
                "bs_speed" => 50
            ], [
                "bs_hp" => 100,
                "bs_atk" => 50,
                "bs_def" => 50,
                "bs_sp_atk" => 76,
                "bs_sp_def" => 96,
                "bs_speed" => 70
            ], [
                "bs_hp" => 40,
                "bs_atk" => 20,
                "bs_def" => 30,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 80,
                "bs_speed" => 55
            ], [
                "bs_hp" => 55,
                "bs_atk" => 35,
                "bs_def" => 50,
                "bs_sp_atk" => 55,
                "bs_sp_def" => 110,
                "bs_speed" => 85
            ], [
                "bs_hp" => 40,
                "bs_atk" => 60,
                "bs_def" => 40,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 40,
                "bs_speed" => 30
            ], [
                "bs_hp" => 70,
                "bs_atk" => 90,
                "bs_def" => 70,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 60,
                "bs_speed" => 40
            ], [
                "bs_hp" => 85,
                "bs_atk" => 90,
                "bs_def" => 80,
                "bs_sp_atk" => 70,
                "bs_sp_def" => 80,
                "bs_speed" => 130
            ], [
                "bs_hp" => 75,
                "bs_atk" => 38,
                "bs_def" => 38,
                "bs_sp_atk" => 56,
                "bs_sp_def" => 56,
                "bs_speed" => 67
            ], [
                "bs_hp" => 125,
                "bs_atk" => 58,
                "bs_def" => 58,
                "bs_sp_atk" => 76,
                "bs_sp_def" => 76,
                "bs_speed" => 67
            ], [
                "bs_hp" => 20,
                "bs_atk" => 40,
                "bs_def" => 15,
                "bs_sp_atk" => 35,
                "bs_sp_def" => 35,
                "bs_speed" => 60
            ], [
                "bs_hp" => 50,
                "bs_atk" => 25,
                "bs_def" => 28,
                "bs_sp_atk" => 45,
                "bs_sp_def" => 55,
                "bs_speed" => 15
            ], [
                "bs_hp" => 90,
                "bs_atk" => 30,
                "bs_def" => 15,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 20,
                "bs_speed" => 15
            ], [
                "bs_hp" => 35,
                "bs_atk" => 20,
                "bs_def" => 65,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 65,
                "bs_speed" => 20
            ], [
                "bs_hp" => 55,
                "bs_atk" => 40,
                "bs_def" => 85,
                "bs_sp_atk" => 80,
                "bs_sp_def" => 105,
                "bs_speed" => 40
            ], [
                "bs_hp" => 40,
                "bs_atk" => 50,
                "bs_def" => 45,
                "bs_sp_atk" => 70,
                "bs_sp_def" => 45,
                "bs_speed" => 70
            ], [
                "bs_hp" => 65,
                "bs_atk" => 75,
                "bs_def" => 70,
                "bs_sp_atk" => 95,
                "bs_sp_def" => 70,
                "bs_speed" => 95
            ], [
                "bs_hp" => 55,
                "bs_atk" => 40,
                "bs_def" => 40,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 45,
                "bs_speed" => 35
            ], [
                "bs_hp" => 70,
                "bs_atk" => 55,
                "bs_def" => 55,
                "bs_sp_atk" => 80,
                "bs_sp_def" => 60,
                "bs_speed" => 45
            ], [
                "bs_hp" => 90,
                "bs_atk" => 75,
                "bs_def" => 85,
                "bs_sp_atk" => 115,
                "bs_sp_def" => 90,
                "bs_speed" => 55
            ], [
                "bs_hp" => 75,
                "bs_atk" => 80,
                "bs_def" => 95,
                "bs_sp_atk" => 90,
                "bs_sp_def" => 100,
                "bs_speed" => 50
            ], [
                "bs_hp" => 70,
                "bs_atk" => 20,
                "bs_def" => 50,
                "bs_sp_atk" => 20,
                "bs_sp_def" => 50,
                "bs_speed" => 40
            ], [
                "bs_hp" => 100,
                "bs_atk" => 50,
                "bs_def" => 80,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 80,
                "bs_speed" => 50
            ], [
                "bs_hp" => 70,
                "bs_atk" => 100,
                "bs_def" => 115,
                "bs_sp_atk" => 30,
                "bs_sp_def" => 65,
                "bs_speed" => 30
            ], [
                "bs_hp" => 90,
                "bs_atk" => 75,
                "bs_def" => 75,
                "bs_sp_atk" => 90,
                "bs_sp_def" => 100,
                "bs_speed" => 70
            ], [
                "bs_hp" => 35,
                "bs_atk" => 35,
                "bs_def" => 40,
                "bs_sp_atk" => 35,
                "bs_sp_def" => 55,
                "bs_speed" => 50
            ], [
                "bs_hp" => 55,
                "bs_atk" => 45,
                "bs_def" => 50,
                "bs_sp_atk" => 45,
                "bs_sp_def" => 65,
                "bs_speed" => 80
            ], [
                "bs_hp" => 75,
                "bs_atk" => 55,
                "bs_def" => 70,
                "bs_sp_atk" => 55,
                "bs_sp_def" => 95,
                "bs_speed" => 110
            ], [
                "bs_hp" => 55,
                "bs_atk" => 70,
                "bs_def" => 55,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 55,
                "bs_speed" => 85
            ], [
                "bs_hp" => 30,
                "bs_atk" => 30,
                "bs_def" => 30,
                "bs_sp_atk" => 30,
                "bs_sp_def" => 30,
                "bs_speed" => 30
            ], [
                "bs_hp" => 75,
                "bs_atk" => 75,
                "bs_def" => 55,
                "bs_sp_atk" => 105,
                "bs_sp_def" => 85,
                "bs_speed" => 30
            ], [
                "bs_hp" => 65,
                "bs_atk" => 65,
                "bs_def" => 45,
                "bs_sp_atk" => 75,
                "bs_sp_def" => 45,
                "bs_speed" => 95
            ], [
                "bs_hp" => 55,
                "bs_atk" => 45,
                "bs_def" => 45,
                "bs_sp_atk" => 25,
                "bs_sp_def" => 25,
                "bs_speed" => 15
            ], [
                "bs_hp" => 95,
                "bs_atk" => 85,
                "bs_def" => 85,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 65,
                "bs_speed" => 35
            ], [
                "bs_hp" => 65,
                "bs_atk" => 65,
                "bs_def" => 60,
                "bs_sp_atk" => 130,
                "bs_sp_def" => 95,
                "bs_speed" => 110
            ], [
                "bs_hp" => 95,
                "bs_atk" => 65,
                "bs_def" => 110,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 130,
                "bs_speed" => 65
            ], [
                "bs_hp" => 60,
                "bs_atk" => 85,
                "bs_def" => 42,
                "bs_sp_atk" => 85,
                "bs_sp_def" => 42,
                "bs_speed" => 91
            ], [
                "bs_hp" => 95,
                "bs_atk" => 75,
                "bs_def" => 80,
                "bs_sp_atk" => 100,
                "bs_sp_def" => 110,
                "bs_speed" => 30
            ], [
                "bs_hp" => 60,
                "bs_atk" => 60,
                "bs_def" => 60,
                "bs_sp_atk" => 85,
                "bs_sp_def" => 85,
                "bs_speed" => 85
            ], [
                "bs_hp" => 48,
                "bs_atk" => 72,
                "bs_def" => 48,
                "bs_sp_atk" => 72,
                "bs_sp_def" => 48,
                "bs_speed" => 48
            ], [
                "bs_hp" => 190,
                "bs_atk" => 33,
                "bs_def" => 58,
                "bs_sp_atk" => 33,
                "bs_sp_def" => 58,
                "bs_speed" => 33
            ], [
                "bs_hp" => 70,
                "bs_atk" => 80,
                "bs_def" => 65,
                "bs_sp_atk" => 90,
                "bs_sp_def" => 65,
                "bs_speed" => 85
            ], [
                "bs_hp" => 50,
                "bs_atk" => 65,
                "bs_def" => 90,
                "bs_sp_atk" => 35,
                "bs_sp_def" => 35,
                "bs_speed" => 15
            ], [
                "bs_hp" => 75,
                "bs_atk" => 90,
                "bs_def" => 140,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 60,
                "bs_speed" => 40
            ], [
                "bs_hp" => 100,
                "bs_atk" => 70,
                "bs_def" => 70,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 65,
                "bs_speed" => 45
            ], [
                "bs_hp" => 65,
                "bs_atk" => 75,
                "bs_def" => 105,
                "bs_sp_atk" => 35,
                "bs_sp_def" => 65,
                "bs_speed" => 85
            ], [
                "bs_hp" => 75,
                "bs_atk" => 85,
                "bs_def" => 200,
                "bs_sp_atk" => 55,
                "bs_sp_def" => 65,
                "bs_speed" => 30
            ], [
                "bs_hp" => 60,
                "bs_atk" => 80,
                "bs_def" => 50,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 40,
                "bs_speed" => 30
            ], [
                "bs_hp" => 90,
                "bs_atk" => 120,
                "bs_def" => 75,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 60,
                "bs_speed" => 45
            ], [
                "bs_hp" => 65,
                "bs_atk" => 95,
                "bs_def" => 75,
                "bs_sp_atk" => 55,
                "bs_sp_def" => 55,
                "bs_speed" => 85
            ], [
                "bs_hp" => 70,
                "bs_atk" => 130,
                "bs_def" => 100,
                "bs_sp_atk" => 55,
                "bs_sp_def" => 80,
                "bs_speed" => 65
            ], [
                "bs_hp" => 20,
                "bs_atk" => 10,
                "bs_def" => 230,
                "bs_sp_atk" => 10,
                "bs_sp_def" => 230,
                "bs_speed" => 5
            ], [
                "bs_hp" => 80,
                "bs_atk" => 125,
                "bs_def" => 75,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 95,
                "bs_speed" => 85
            ], [
                "bs_hp" => 55,
                "bs_atk" => 95,
                "bs_def" => 55,
                "bs_sp_atk" => 35,
                "bs_sp_def" => 75,
                "bs_speed" => 115
            ], [
                "bs_hp" => 60,
                "bs_atk" => 80,
                "bs_def" => 50,
                "bs_sp_atk" => 50,
                "bs_sp_def" => 50,
                "bs_speed" => 40
            ], [
                "bs_hp" => 90,
                "bs_atk" => 130,
                "bs_def" => 75,
                "bs_sp_atk" => 75,
                "bs_sp_def" => 75,
                "bs_speed" => 55
            ], [
                "bs_hp" => 40,
                "bs_atk" => 40,
                "bs_def" => 40,
                "bs_sp_atk" => 70,
                "bs_sp_def" => 40,
                "bs_speed" => 20
            ], [
                "bs_hp" => 50,
                "bs_atk" => 50,
                "bs_def" => 120,
                "bs_sp_atk" => 80,
                "bs_sp_def" => 80,
                "bs_speed" => 30
            ], [
                "bs_hp" => 50,
                "bs_atk" => 50,
                "bs_def" => 40,
                "bs_sp_atk" => 30,
                "bs_sp_def" => 30,
                "bs_speed" => 50
            ], [
                "bs_hp" => 100,
                "bs_atk" => 100,
                "bs_def" => 80,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 60,
                "bs_speed" => 50
            ], [
                "bs_hp" => 55,
                "bs_atk" => 55,
                "bs_def" => 85,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 85,
                "bs_speed" => 35
            ], [
                "bs_hp" => 35,
                "bs_atk" => 65,
                "bs_def" => 35,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 35,
                "bs_speed" => 65
            ], [
                "bs_hp" => 75,
                "bs_atk" => 105,
                "bs_def" => 75,
                "bs_sp_atk" => 105,
                "bs_sp_def" => 75,
                "bs_speed" => 45
            ], [
                "bs_hp" => 45,
                "bs_atk" => 55,
                "bs_def" => 45,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 45,
                "bs_speed" => 75
            ], [
                "bs_hp" => 65,
                "bs_atk" => 40,
                "bs_def" => 70,
                "bs_sp_atk" => 80,
                "bs_sp_def" => 140,
                "bs_speed" => 70
            ], [
                "bs_hp" => 65,
                "bs_atk" => 80,
                "bs_def" => 140,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 70,
                "bs_speed" => 70
            ], [
                "bs_hp" => 45,
                "bs_atk" => 60,
                "bs_def" => 30,
                "bs_sp_atk" => 80,
                "bs_sp_def" => 50,
                "bs_speed" => 65
            ], [
                "bs_hp" => 75,
                "bs_atk" => 90,
                "bs_def" => 50,
                "bs_sp_atk" => 110,
                "bs_sp_def" => 80,
                "bs_speed" => 95
            ], [
                "bs_hp" => 75,
                "bs_atk" => 95,
                "bs_def" => 95,
                "bs_sp_atk" => 95,
                "bs_sp_def" => 95,
                "bs_speed" => 85
            ], [
                "bs_hp" => 90,
                "bs_atk" => 60,
                "bs_def" => 60,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 40,
                "bs_speed" => 40
            ], [
                "bs_hp" => 90,
                "bs_atk" => 120,
                "bs_def" => 120,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 60,
                "bs_speed" => 50
            ], [
                "bs_hp" => 85,
                "bs_atk" => 80,
                "bs_def" => 90,
                "bs_sp_atk" => 105,
                "bs_sp_def" => 95,
                "bs_speed" => 60
            ], [
                "bs_hp" => 73,
                "bs_atk" => 95,
                "bs_def" => 62,
                "bs_sp_atk" => 85,
                "bs_sp_def" => 65,
                "bs_speed" => 85
            ], [
                "bs_hp" => 55,
                "bs_atk" => 20,
                "bs_def" => 35,
                "bs_sp_atk" => 20,
                "bs_sp_def" => 45,
                "bs_speed" => 75
            ], [
                "bs_hp" => 35,
                "bs_atk" => 35,
                "bs_def" => 35,
                "bs_sp_atk" => 35,
                "bs_sp_def" => 35,
                "bs_speed" => 35
            ], [
                "bs_hp" => 50,
                "bs_atk" => 95,
                "bs_def" => 95,
                "bs_sp_atk" => 35,
                "bs_sp_def" => 110,
                "bs_speed" => 70
            ], [
                "bs_hp" => 45,
                "bs_atk" => 30,
                "bs_def" => 15,
                "bs_sp_atk" => 85,
                "bs_sp_def" => 65,
                "bs_speed" => 65
            ], [
                "bs_hp" => 45,
                "bs_atk" => 63,
                "bs_def" => 37,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 55,
                "bs_speed" => 95
            ], [
                "bs_hp" => 45,
                "bs_atk" => 75,
                "bs_def" => 37,
                "bs_sp_atk" => 70,
                "bs_sp_def" => 55,
                "bs_speed" => 83
            ], [
                "bs_hp" => 95,
                "bs_atk" => 80,
                "bs_def" => 105,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 70,
                "bs_speed" => 100
            ], [
                "bs_hp" => 255,
                "bs_atk" => 10,
                "bs_def" => 10,
                "bs_sp_atk" => 75,
                "bs_sp_def" => 135,
                "bs_speed" => 55
            ], [
                "bs_hp" => 90,
                "bs_atk" => 85,
                "bs_def" => 75,
                "bs_sp_atk" => 115,
                "bs_sp_def" => 100,
                "bs_speed" => 115
            ], [
                "bs_hp" => 115,
                "bs_atk" => 115,
                "bs_def" => 85,
                "bs_sp_atk" => 90,
                "bs_sp_def" => 75,
                "bs_speed" => 100
            ], [
                "bs_hp" => 100,
                "bs_atk" => 75,
                "bs_def" => 115,
                "bs_sp_atk" => 90,
                "bs_sp_def" => 115,
                "bs_speed" => 85
            ], [
                "bs_hp" => 50,
                "bs_atk" => 64,
                "bs_def" => 50,
                "bs_sp_atk" => 45,
                "bs_sp_def" => 50,
                "bs_speed" => 41
            ], [
                "bs_hp" => 70,
                "bs_atk" => 84,
                "bs_def" => 70,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 70,
                "bs_speed" => 51
            ], [
                "bs_hp" => 100,
                "bs_atk" => 134,
                "bs_def" => 110,
                "bs_sp_atk" => 95,
                "bs_sp_def" => 100,
                "bs_speed" => 61
            ], [
                "bs_hp" => 106,
                "bs_atk" => 90,
                "bs_def" => 130,
                "bs_sp_atk" => 90,
                "bs_sp_def" => 154,
                "bs_speed" => 110
            ], [
                "bs_hp" => 106,
                "bs_atk" => 130,
                "bs_def" => 90,
                "bs_sp_atk" => 110,
                "bs_sp_def" => 154,
                "bs_speed" => 90
            ], [
                "bs_hp" => 100,
                "bs_atk" => 100,
                "bs_def" => 100,
                "bs_sp_atk" => 100,
                "bs_sp_def" => 100,
                "bs_speed" => 100
            ], [
                "bs_hp" => 40,
                "bs_atk" => 45,
                "bs_def" => 35,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 55,
                "bs_speed" => 70
            ], [
                "bs_hp" => 50,
                "bs_atk" => 65,
                "bs_def" => 45,
                "bs_sp_atk" => 85,
                "bs_sp_def" => 65,
                "bs_speed" => 95
            ], [
                "bs_hp" => 70,
                "bs_atk" => 85,
                "bs_def" => 65,
                "bs_sp_atk" => 105,
                "bs_sp_def" => 85,
                "bs_speed" => 120
            ], [
                "bs_hp" => 45,
                "bs_atk" => 60,
                "bs_def" => 40,
                "bs_sp_atk" => 70,
                "bs_sp_def" => 50,
                "bs_speed" => 45
            ], [
                "bs_hp" => 60,
                "bs_atk" => 85,
                "bs_def" => 60,
                "bs_sp_atk" => 85,
                "bs_sp_def" => 60,
                "bs_speed" => 55
            ], [
                "bs_hp" => 80,
                "bs_atk" => 120,
                "bs_def" => 70,
                "bs_sp_atk" => 110,
                "bs_sp_def" => 70,
                "bs_speed" => 80
            ], [
                "bs_hp" => 50,
                "bs_atk" => 70,
                "bs_def" => 50,
                "bs_sp_atk" => 50,
                "bs_sp_def" => 50,
                "bs_speed" => 40
            ], [
                "bs_hp" => 70,
                "bs_atk" => 85,
                "bs_def" => 70,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 70,
                "bs_speed" => 50
            ], [
                "bs_hp" => 100,
                "bs_atk" => 110,
                "bs_def" => 90,
                "bs_sp_atk" => 85,
                "bs_sp_def" => 90,
                "bs_speed" => 60
            ], [
                "bs_hp" => 35,
                "bs_atk" => 55,
                "bs_def" => 35,
                "bs_sp_atk" => 30,
                "bs_sp_def" => 30,
                "bs_speed" => 35
            ], [
                "bs_hp" => 70,
                "bs_atk" => 90,
                "bs_def" => 70,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 60,
                "bs_speed" => 70
            ], [
                "bs_hp" => 38,
                "bs_atk" => 30,
                "bs_def" => 41,
                "bs_sp_atk" => 30,
                "bs_sp_def" => 41,
                "bs_speed" => 60
            ], [
                "bs_hp" => 78,
                "bs_atk" => 70,
                "bs_def" => 61,
                "bs_sp_atk" => 50,
                "bs_sp_def" => 61,
                "bs_speed" => 100
            ], [
                "bs_hp" => 45,
                "bs_atk" => 45,
                "bs_def" => 35,
                "bs_sp_atk" => 20,
                "bs_sp_def" => 30,
                "bs_speed" => 20
            ], [
                "bs_hp" => 50,
                "bs_atk" => 35,
                "bs_def" => 55,
                "bs_sp_atk" => 25,
                "bs_sp_def" => 25,
                "bs_speed" => 15
            ], [
                "bs_hp" => 60,
                "bs_atk" => 70,
                "bs_def" => 50,
                "bs_sp_atk" => 100,
                "bs_sp_def" => 50,
                "bs_speed" => 65
            ], [
                "bs_hp" => 50,
                "bs_atk" => 35,
                "bs_def" => 55,
                "bs_sp_atk" => 25,
                "bs_sp_def" => 25,
                "bs_speed" => 15
            ], [
                "bs_hp" => 60,
                "bs_atk" => 50,
                "bs_def" => 70,
                "bs_sp_atk" => 50,
                "bs_sp_def" => 90,
                "bs_speed" => 65
            ], [
                "bs_hp" => 40,
                "bs_atk" => 30,
                "bs_def" => 30,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 50,
                "bs_speed" => 30
            ], [
                "bs_hp" => 60,
                "bs_atk" => 50,
                "bs_def" => 50,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 70,
                "bs_speed" => 50
            ], [
                "bs_hp" => 80,
                "bs_atk" => 70,
                "bs_def" => 70,
                "bs_sp_atk" => 90,
                "bs_sp_def" => 100,
                "bs_speed" => 70
            ], [
                "bs_hp" => 40,
                "bs_atk" => 40,
                "bs_def" => 50,
                "bs_sp_atk" => 30,
                "bs_sp_def" => 30,
                "bs_speed" => 30
            ], [
                "bs_hp" => 70,
                "bs_atk" => 70,
                "bs_def" => 40,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 40,
                "bs_speed" => 60
            ], [
                "bs_hp" => 90,
                "bs_atk" => 100,
                "bs_def" => 60,
                "bs_sp_atk" => 90,
                "bs_sp_def" => 60,
                "bs_speed" => 80
            ], [
                "bs_hp" => 40,
                "bs_atk" => 55,
                "bs_def" => 30,
                "bs_sp_atk" => 30,
                "bs_sp_def" => 30,
                "bs_speed" => 85
            ], [
                "bs_hp" => 60,
                "bs_atk" => 85,
                "bs_def" => 60,
                "bs_sp_atk" => 50,
                "bs_sp_def" => 50,
                "bs_speed" => 125
            ], [
                "bs_hp" => 40,
                "bs_atk" => 30,
                "bs_def" => 30,
                "bs_sp_atk" => 55,
                "bs_sp_def" => 30,
                "bs_speed" => 85
            ], [
                "bs_hp" => 60,
                "bs_atk" => 50,
                "bs_def" => 100,
                "bs_sp_atk" => 85,
                "bs_sp_def" => 70,
                "bs_speed" => 65
            ], [
                "bs_hp" => 28,
                "bs_atk" => 25,
                "bs_def" => 25,
                "bs_sp_atk" => 45,
                "bs_sp_def" => 35,
                "bs_speed" => 40
            ], [
                "bs_hp" => 38,
                "bs_atk" => 35,
                "bs_def" => 35,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 55,
                "bs_speed" => 50
            ], [
                "bs_hp" => 68,
                "bs_atk" => 65,
                "bs_def" => 65,
                "bs_sp_atk" => 125,
                "bs_sp_def" => 115,
                "bs_speed" => 80
            ], [
                "bs_hp" => 40,
                "bs_atk" => 30,
                "bs_def" => 32,
                "bs_sp_atk" => 50,
                "bs_sp_def" => 52,
                "bs_speed" => 65
            ], [
                "bs_hp" => 70,
                "bs_atk" => 60,
                "bs_def" => 62,
                "bs_sp_atk" => 80,
                "bs_sp_def" => 82,
                "bs_speed" => 60
            ], [
                "bs_hp" => 60,
                "bs_atk" => 40,
                "bs_def" => 60,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 60,
                "bs_speed" => 35
            ], [
                "bs_hp" => 60,
                "bs_atk" => 130,
                "bs_def" => 80,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 60,
                "bs_speed" => 70
            ], [
                "bs_hp" => 60,
                "bs_atk" => 60,
                "bs_def" => 60,
                "bs_sp_atk" => 35,
                "bs_sp_def" => 35,
                "bs_speed" => 30
            ], [
                "bs_hp" => 80,
                "bs_atk" => 80,
                "bs_def" => 80,
                "bs_sp_atk" => 55,
                "bs_sp_def" => 55,
                "bs_speed" => 90
            ], [
                "bs_hp" => 150,
                "bs_atk" => 160,
                "bs_def" => 100,
                "bs_sp_atk" => 95,
                "bs_sp_def" => 65,
                "bs_speed" => 100
            ], [
                "bs_hp" => 31,
                "bs_atk" => 45,
                "bs_def" => 90,
                "bs_sp_atk" => 30,
                "bs_sp_def" => 30,
                "bs_speed" => 40
            ], [
                "bs_hp" => 61,
                "bs_atk" => 90,
                "bs_def" => 45,
                "bs_sp_atk" => 50,
                "bs_sp_def" => 50,
                "bs_speed" => 160
            ], [
                "bs_hp" => 1,
                "bs_atk" => 90,
                "bs_def" => 45,
                "bs_sp_atk" => 30,
                "bs_sp_def" => 30,
                "bs_speed" => 40
            ], [
                "bs_hp" => 64,
                "bs_atk" => 51,
                "bs_def" => 23,
                "bs_sp_atk" => 51,
                "bs_sp_def" => 23,
                "bs_speed" => 28
            ], [
                "bs_hp" => 84,
                "bs_atk" => 71,
                "bs_def" => 43,
                "bs_sp_atk" => 71,
                "bs_sp_def" => 43,
                "bs_speed" => 48
            ], [
                "bs_hp" => 104,
                "bs_atk" => 91,
                "bs_def" => 63,
                "bs_sp_atk" => 91,
                "bs_sp_def" => 73,
                "bs_speed" => 68
            ], [
                "bs_hp" => 72,
                "bs_atk" => 60,
                "bs_def" => 30,
                "bs_sp_atk" => 20,
                "bs_sp_def" => 30,
                "bs_speed" => 25
            ], [
                "bs_hp" => 144,
                "bs_atk" => 120,
                "bs_def" => 60,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 60,
                "bs_speed" => 50
            ], [
                "bs_hp" => 50,
                "bs_atk" => 20,
                "bs_def" => 40,
                "bs_sp_atk" => 20,
                "bs_sp_def" => 40,
                "bs_speed" => 20
            ], [
                "bs_hp" => 30,
                "bs_atk" => 45,
                "bs_def" => 135,
                "bs_sp_atk" => 45,
                "bs_sp_def" => 90,
                "bs_speed" => 30
            ], [
                "bs_hp" => 50,
                "bs_atk" => 45,
                "bs_def" => 45,
                "bs_sp_atk" => 35,
                "bs_sp_def" => 35,
                "bs_speed" => 50
            ], [
                "bs_hp" => 70,
                "bs_atk" => 65,
                "bs_def" => 65,
                "bs_sp_atk" => 55,
                "bs_sp_def" => 55,
                "bs_speed" => 70
            ], [
                "bs_hp" => 50,
                "bs_atk" => 75,
                "bs_def" => 75,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 65,
                "bs_speed" => 50
            ], [
                "bs_hp" => 50,
                "bs_atk" => 85,
                "bs_def" => 85,
                "bs_sp_atk" => 55,
                "bs_sp_def" => 55,
                "bs_speed" => 50
            ], [
                "bs_hp" => 50,
                "bs_atk" => 70,
                "bs_def" => 100,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 40,
                "bs_speed" => 30
            ], [
                "bs_hp" => 60,
                "bs_atk" => 90,
                "bs_def" => 140,
                "bs_sp_atk" => 50,
                "bs_sp_def" => 50,
                "bs_speed" => 40
            ], [
                "bs_hp" => 70,
                "bs_atk" => 110,
                "bs_def" => 180,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 60,
                "bs_speed" => 50
            ], [
                "bs_hp" => 30,
                "bs_atk" => 40,
                "bs_def" => 55,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 55,
                "bs_speed" => 60
            ], [
                "bs_hp" => 60,
                "bs_atk" => 60,
                "bs_def" => 75,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 75,
                "bs_speed" => 80
            ], [
                "bs_hp" => 40,
                "bs_atk" => 45,
                "bs_def" => 40,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 40,
                "bs_speed" => 65
            ], [
                "bs_hp" => 70,
                "bs_atk" => 75,
                "bs_def" => 60,
                "bs_sp_atk" => 105,
                "bs_sp_def" => 60,
                "bs_speed" => 105
            ], [
                "bs_hp" => 60,
                "bs_atk" => 50,
                "bs_def" => 40,
                "bs_sp_atk" => 85,
                "bs_sp_def" => 75,
                "bs_speed" => 95
            ], [
                "bs_hp" => 60,
                "bs_atk" => 40,
                "bs_def" => 50,
                "bs_sp_atk" => 75,
                "bs_sp_def" => 85,
                "bs_speed" => 95
            ], [
                "bs_hp" => 65,
                "bs_atk" => 73,
                "bs_def" => 55,
                "bs_sp_atk" => 47,
                "bs_sp_def" => 75,
                "bs_speed" => 85
            ], [
                "bs_hp" => 65,
                "bs_atk" => 47,
                "bs_def" => 55,
                "bs_sp_atk" => 73,
                "bs_sp_def" => 75,
                "bs_speed" => 85
            ], [
                "bs_hp" => 50,
                "bs_atk" => 60,
                "bs_def" => 45,
                "bs_sp_atk" => 100,
                "bs_sp_def" => 80,
                "bs_speed" => 65
            ], [
                "bs_hp" => 70,
                "bs_atk" => 43,
                "bs_def" => 53,
                "bs_sp_atk" => 43,
                "bs_sp_def" => 53,
                "bs_speed" => 40
            ], [
                "bs_hp" => 100,
                "bs_atk" => 73,
                "bs_def" => 83,
                "bs_sp_atk" => 73,
                "bs_sp_def" => 83,
                "bs_speed" => 55
            ], [
                "bs_hp" => 45,
                "bs_atk" => 90,
                "bs_def" => 20,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 20,
                "bs_speed" => 65
            ], [
                "bs_hp" => 70,
                "bs_atk" => 120,
                "bs_def" => 40,
                "bs_sp_atk" => 95,
                "bs_sp_def" => 40,
                "bs_speed" => 95
            ], [
                "bs_hp" => 130,
                "bs_atk" => 70,
                "bs_def" => 35,
                "bs_sp_atk" => 70,
                "bs_sp_def" => 35,
                "bs_speed" => 60
            ], [
                "bs_hp" => 170,
                "bs_atk" => 90,
                "bs_def" => 45,
                "bs_sp_atk" => 90,
                "bs_sp_def" => 45,
                "bs_speed" => 60
            ], [
                "bs_hp" => 60,
                "bs_atk" => 60,
                "bs_def" => 40,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 45,
                "bs_speed" => 35
            ], [
                "bs_hp" => 70,
                "bs_atk" => 100,
                "bs_def" => 70,
                "bs_sp_atk" => 105,
                "bs_sp_def" => 75,
                "bs_speed" => 40
            ], [
                "bs_hp" => 70,
                "bs_atk" => 85,
                "bs_def" => 140,
                "bs_sp_atk" => 85,
                "bs_sp_def" => 70,
                "bs_speed" => 20
            ], [
                "bs_hp" => 60,
                "bs_atk" => 25,
                "bs_def" => 35,
                "bs_sp_atk" => 70,
                "bs_sp_def" => 80,
                "bs_speed" => 60
            ], [
                "bs_hp" => 80,
                "bs_atk" => 45,
                "bs_def" => 65,
                "bs_sp_atk" => 90,
                "bs_sp_def" => 110,
                "bs_speed" => 80
            ], [
                "bs_hp" => 60,
                "bs_atk" => 60,
                "bs_def" => 60,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 60,
                "bs_speed" => 60
            ], [
                "bs_hp" => 45,
                "bs_atk" => 100,
                "bs_def" => 45,
                "bs_sp_atk" => 45,
                "bs_sp_def" => 45,
                "bs_speed" => 10
            ], [
                "bs_hp" => 50,
                "bs_atk" => 70,
                "bs_def" => 50,
                "bs_sp_atk" => 50,
                "bs_sp_def" => 50,
                "bs_speed" => 70
            ], [
                "bs_hp" => 80,
                "bs_atk" => 100,
                "bs_def" => 80,
                "bs_sp_atk" => 80,
                "bs_sp_def" => 80,
                "bs_speed" => 100
            ], [
                "bs_hp" => 50,
                "bs_atk" => 85,
                "bs_def" => 40,
                "bs_sp_atk" => 85,
                "bs_sp_def" => 40,
                "bs_speed" => 35
            ], [
                "bs_hp" => 70,
                "bs_atk" => 115,
                "bs_def" => 60,
                "bs_sp_atk" => 115,
                "bs_sp_def" => 60,
                "bs_speed" => 55
            ], [
                "bs_hp" => 45,
                "bs_atk" => 40,
                "bs_def" => 60,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 75,
                "bs_speed" => 50
            ], [
                "bs_hp" => 75,
                "bs_atk" => 70,
                "bs_def" => 90,
                "bs_sp_atk" => 70,
                "bs_sp_def" => 105,
                "bs_speed" => 80
            ], [
                "bs_hp" => 73,
                "bs_atk" => 115,
                "bs_def" => 60,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 60,
                "bs_speed" => 90
            ], [
                "bs_hp" => 73,
                "bs_atk" => 100,
                "bs_def" => 60,
                "bs_sp_atk" => 100,
                "bs_sp_def" => 60,
                "bs_speed" => 65
            ], [
                "bs_hp" => 70,
                "bs_atk" => 55,
                "bs_def" => 65,
                "bs_sp_atk" => 95,
                "bs_sp_def" => 85,
                "bs_speed" => 70
            ], [
                "bs_hp" => 70,
                "bs_atk" => 95,
                "bs_def" => 85,
                "bs_sp_atk" => 55,
                "bs_sp_def" => 65,
                "bs_speed" => 70
            ], [
                "bs_hp" => 50,
                "bs_atk" => 48,
                "bs_def" => 43,
                "bs_sp_atk" => 46,
                "bs_sp_def" => 41,
                "bs_speed" => 60
            ], [
                "bs_hp" => 110,
                "bs_atk" => 78,
                "bs_def" => 73,
                "bs_sp_atk" => 76,
                "bs_sp_def" => 71,
                "bs_speed" => 60
            ], [
                "bs_hp" => 43,
                "bs_atk" => 80,
                "bs_def" => 65,
                "bs_sp_atk" => 50,
                "bs_sp_def" => 35,
                "bs_speed" => 35
            ], [
                "bs_hp" => 63,
                "bs_atk" => 120,
                "bs_def" => 85,
                "bs_sp_atk" => 90,
                "bs_sp_def" => 55,
                "bs_speed" => 55
            ], [
                "bs_hp" => 40,
                "bs_atk" => 40,
                "bs_def" => 55,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 70,
                "bs_speed" => 55
            ], [
                "bs_hp" => 60,
                "bs_atk" => 70,
                "bs_def" => 105,
                "bs_sp_atk" => 70,
                "bs_sp_def" => 120,
                "bs_speed" => 75
            ], [
                "bs_hp" => 66,
                "bs_atk" => 41,
                "bs_def" => 77,
                "bs_sp_atk" => 61,
                "bs_sp_def" => 87,
                "bs_speed" => 23
            ], [
                "bs_hp" => 86,
                "bs_atk" => 81,
                "bs_def" => 97,
                "bs_sp_atk" => 81,
                "bs_sp_def" => 107,
                "bs_speed" => 43
            ], [
                "bs_hp" => 45,
                "bs_atk" => 95,
                "bs_def" => 50,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 50,
                "bs_speed" => 75
            ], [
                "bs_hp" => 75,
                "bs_atk" => 125,
                "bs_def" => 100,
                "bs_sp_atk" => 70,
                "bs_sp_def" => 80,
                "bs_speed" => 45
            ], [
                "bs_hp" => 20,
                "bs_atk" => 15,
                "bs_def" => 20,
                "bs_sp_atk" => 10,
                "bs_sp_def" => 55,
                "bs_speed" => 80
            ], [
                "bs_hp" => 95,
                "bs_atk" => 60,
                "bs_def" => 79,
                "bs_sp_atk" => 100,
                "bs_sp_def" => 125,
                "bs_speed" => 81
            ], [
                "bs_hp" => 70,
                "bs_atk" => 70,
                "bs_def" => 70,
                "bs_sp_atk" => 70,
                "bs_sp_def" => 70,
                "bs_speed" => 70
            ], [
                "bs_hp" => 60,
                "bs_atk" => 90,
                "bs_def" => 70,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 120,
                "bs_speed" => 40
            ], [
                "bs_hp" => 44,
                "bs_atk" => 75,
                "bs_def" => 35,
                "bs_sp_atk" => 63,
                "bs_sp_def" => 33,
                "bs_speed" => 45
            ], [
                "bs_hp" => 64,
                "bs_atk" => 115,
                "bs_def" => 65,
                "bs_sp_atk" => 83,
                "bs_sp_def" => 63,
                "bs_speed" => 65
            ], [
                "bs_hp" => 20,
                "bs_atk" => 40,
                "bs_def" => 90,
                "bs_sp_atk" => 30,
                "bs_sp_def" => 90,
                "bs_speed" => 25
            ], [
                "bs_hp" => 40,
                "bs_atk" => 70,
                "bs_def" => 130,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 130,
                "bs_speed" => 25
            ], [
                "bs_hp" => 99,
                "bs_atk" => 68,
                "bs_def" => 83,
                "bs_sp_atk" => 72,
                "bs_sp_def" => 87,
                "bs_speed" => 51
            ], [
                "bs_hp" => 65,
                "bs_atk" => 50,
                "bs_def" => 70,
                "bs_sp_atk" => 95,
                "bs_sp_def" => 80,
                "bs_speed" => 65
            ], [
                "bs_hp" => 65,
                "bs_atk" => 130,
                "bs_def" => 60,
                "bs_sp_atk" => 75,
                "bs_sp_def" => 60,
                "bs_speed" => 75
            ], [
                "bs_hp" => 95,
                "bs_atk" => 23,
                "bs_def" => 48,
                "bs_sp_atk" => 23,
                "bs_sp_def" => 48,
                "bs_speed" => 23
            ], [
                "bs_hp" => 50,
                "bs_atk" => 50,
                "bs_def" => 50,
                "bs_sp_atk" => 50,
                "bs_sp_def" => 50,
                "bs_speed" => 50
            ], [
                "bs_hp" => 80,
                "bs_atk" => 80,
                "bs_def" => 80,
                "bs_sp_atk" => 80,
                "bs_sp_def" => 80,
                "bs_speed" => 80
            ], [
                "bs_hp" => 70,
                "bs_atk" => 40,
                "bs_def" => 50,
                "bs_sp_atk" => 55,
                "bs_sp_def" => 50,
                "bs_speed" => 25
            ], [
                "bs_hp" => 90,
                "bs_atk" => 60,
                "bs_def" => 70,
                "bs_sp_atk" => 75,
                "bs_sp_def" => 70,
                "bs_speed" => 45
            ], [
                "bs_hp" => 110,
                "bs_atk" => 80,
                "bs_def" => 90,
                "bs_sp_atk" => 95,
                "bs_sp_def" => 90,
                "bs_speed" => 65
            ], [
                "bs_hp" => 35,
                "bs_atk" => 64,
                "bs_def" => 85,
                "bs_sp_atk" => 74,
                "bs_sp_def" => 55,
                "bs_speed" => 32
            ], [
                "bs_hp" => 55,
                "bs_atk" => 104,
                "bs_def" => 105,
                "bs_sp_atk" => 94,
                "bs_sp_def" => 75,
                "bs_speed" => 52
            ], [
                "bs_hp" => 55,
                "bs_atk" => 84,
                "bs_def" => 105,
                "bs_sp_atk" => 114,
                "bs_sp_def" => 75,
                "bs_speed" => 52
            ], [
                "bs_hp" => 100,
                "bs_atk" => 90,
                "bs_def" => 130,
                "bs_sp_atk" => 45,
                "bs_sp_def" => 65,
                "bs_speed" => 55
            ], [
                "bs_hp" => 43,
                "bs_atk" => 30,
                "bs_def" => 55,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 65,
                "bs_speed" => 97
            ], [
                "bs_hp" => 45,
                "bs_atk" => 75,
                "bs_def" => 60,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 30,
                "bs_speed" => 50
            ], [
                "bs_hp" => 65,
                "bs_atk" => 95,
                "bs_def" => 100,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 50,
                "bs_speed" => 50
            ], [
                "bs_hp" => 95,
                "bs_atk" => 135,
                "bs_def" => 80,
                "bs_sp_atk" => 110,
                "bs_sp_def" => 80,
                "bs_speed" => 100
            ], [
                "bs_hp" => 40,
                "bs_atk" => 55,
                "bs_def" => 80,
                "bs_sp_atk" => 35,
                "bs_sp_def" => 60,
                "bs_speed" => 30
            ], [
                "bs_hp" => 60,
                "bs_atk" => 75,
                "bs_def" => 100,
                "bs_sp_atk" => 55,
                "bs_sp_def" => 80,
                "bs_speed" => 50
            ], [
                "bs_hp" => 80,
                "bs_atk" => 135,
                "bs_def" => 130,
                "bs_sp_atk" => 95,
                "bs_sp_def" => 90,
                "bs_speed" => 70
            ], [
                "bs_hp" => 80,
                "bs_atk" => 100,
                "bs_def" => 200,
                "bs_sp_atk" => 50,
                "bs_sp_def" => 100,
                "bs_speed" => 50
            ], [
                "bs_hp" => 80,
                "bs_atk" => 50,
                "bs_def" => 100,
                "bs_sp_atk" => 100,
                "bs_sp_def" => 200,
                "bs_speed" => 50
            ], [
                "bs_hp" => 80,
                "bs_atk" => 75,
                "bs_def" => 150,
                "bs_sp_atk" => 75,
                "bs_sp_def" => 150,
                "bs_speed" => 50
            ], [
                "bs_hp" => 80,
                "bs_atk" => 80,
                "bs_def" => 90,
                "bs_sp_atk" => 110,
                "bs_sp_def" => 130,
                "bs_speed" => 110
            ], [
                "bs_hp" => 80,
                "bs_atk" => 90,
                "bs_def" => 80,
                "bs_sp_atk" => 130,
                "bs_sp_def" => 110,
                "bs_speed" => 110
            ], [
                "bs_hp" => 100,
                "bs_atk" => 100,
                "bs_def" => 90,
                "bs_sp_atk" => 150,
                "bs_sp_def" => 140,
                "bs_speed" => 90
            ], [
                "bs_hp" => 100,
                "bs_atk" => 150,
                "bs_def" => 140,
                "bs_sp_atk" => 100,
                "bs_sp_def" => 90,
                "bs_speed" => 90
            ], [
                "bs_hp" => 105,
                "bs_atk" => 150,
                "bs_def" => 90,
                "bs_sp_atk" => 150,
                "bs_sp_def" => 90,
                "bs_speed" => 95
            ], [
                "bs_hp" => 100,
                "bs_atk" => 100,
                "bs_def" => 100,
                "bs_sp_atk" => 100,
                "bs_sp_def" => 100,
                "bs_speed" => 100
            ], [
                "bs_hp" => 50,
                "bs_atk" => 180,
                "bs_def" => 20,
                "bs_sp_atk" => 180,
                "bs_sp_def" => 20,
                "bs_speed" => 150
            ], [
                "bs_hp" => 55,
                "bs_atk" => 68,
                "bs_def" => 64,
                "bs_sp_atk" => 45,
                "bs_sp_def" => 55,
                "bs_speed" => 31
            ], [
                "bs_hp" => 75,
                "bs_atk" => 89,
                "bs_def" => 85,
                "bs_sp_atk" => 55,
                "bs_sp_def" => 65,
                "bs_speed" => 36
            ], [
                "bs_hp" => 95,
                "bs_atk" => 109,
                "bs_def" => 105,
                "bs_sp_atk" => 75,
                "bs_sp_def" => 85,
                "bs_speed" => 56
            ], [
                "bs_hp" => 44,
                "bs_atk" => 58,
                "bs_def" => 44,
                "bs_sp_atk" => 58,
                "bs_sp_def" => 44,
                "bs_speed" => 61
            ], [
                "bs_hp" => 64,
                "bs_atk" => 78,
                "bs_def" => 52,
                "bs_sp_atk" => 78,
                "bs_sp_def" => 52,
                "bs_speed" => 81
            ], [
                "bs_hp" => 76,
                "bs_atk" => 104,
                "bs_def" => 71,
                "bs_sp_atk" => 104,
                "bs_sp_def" => 71,
                "bs_speed" => 108
            ], [
                "bs_hp" => 53,
                "bs_atk" => 51,
                "bs_def" => 53,
                "bs_sp_atk" => 61,
                "bs_sp_def" => 56,
                "bs_speed" => 40
            ], [
                "bs_hp" => 64,
                "bs_atk" => 66,
                "bs_def" => 68,
                "bs_sp_atk" => 81,
                "bs_sp_def" => 76,
                "bs_speed" => 50
            ], [
                "bs_hp" => 84,
                "bs_atk" => 86,
                "bs_def" => 88,
                "bs_sp_atk" => 111,
                "bs_sp_def" => 101,
                "bs_speed" => 60
            ], [
                "bs_hp" => 40,
                "bs_atk" => 55,
                "bs_def" => 30,
                "bs_sp_atk" => 30,
                "bs_sp_def" => 30,
                "bs_speed" => 60
            ], [
                "bs_hp" => 55,
                "bs_atk" => 75,
                "bs_def" => 50,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 40,
                "bs_speed" => 80
            ], [
                "bs_hp" => 85,
                "bs_atk" => 120,
                "bs_def" => 70,
                "bs_sp_atk" => 50,
                "bs_sp_def" => 60,
                "bs_speed" => 100
            ], [
                "bs_hp" => 59,
                "bs_atk" => 45,
                "bs_def" => 40,
                "bs_sp_atk" => 35,
                "bs_sp_def" => 40,
                "bs_speed" => 31
            ], [
                "bs_hp" => 79,
                "bs_atk" => 85,
                "bs_def" => 60,
                "bs_sp_atk" => 55,
                "bs_sp_def" => 60,
                "bs_speed" => 71
            ], [
                "bs_hp" => 37,
                "bs_atk" => 25,
                "bs_def" => 41,
                "bs_sp_atk" => 25,
                "bs_sp_def" => 41,
                "bs_speed" => 25
            ], [
                "bs_hp" => 77,
                "bs_atk" => 85,
                "bs_def" => 51,
                "bs_sp_atk" => 55,
                "bs_sp_def" => 51,
                "bs_speed" => 65
            ], [
                "bs_hp" => 45,
                "bs_atk" => 65,
                "bs_def" => 34,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 34,
                "bs_speed" => 45
            ], [
                "bs_hp" => 60,
                "bs_atk" => 85,
                "bs_def" => 49,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 49,
                "bs_speed" => 60
            ], [
                "bs_hp" => 80,
                "bs_atk" => 120,
                "bs_def" => 79,
                "bs_sp_atk" => 95,
                "bs_sp_def" => 79,
                "bs_speed" => 70
            ], [
                "bs_hp" => 40,
                "bs_atk" => 30,
                "bs_def" => 35,
                "bs_sp_atk" => 50,
                "bs_sp_def" => 70,
                "bs_speed" => 55
            ], [
                "bs_hp" => 60,
                "bs_atk" => 70,
                "bs_def" => 65,
                "bs_sp_atk" => 125,
                "bs_sp_def" => 105,
                "bs_speed" => 90
            ], [
                "bs_hp" => 67,
                "bs_atk" => 125,
                "bs_def" => 40,
                "bs_sp_atk" => 30,
                "bs_sp_def" => 30,
                "bs_speed" => 58
            ], [
                "bs_hp" => 97,
                "bs_atk" => 165,
                "bs_def" => 60,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 50,
                "bs_speed" => 58
            ], [
                "bs_hp" => 30,
                "bs_atk" => 42,
                "bs_def" => 118,
                "bs_sp_atk" => 42,
                "bs_sp_def" => 88,
                "bs_speed" => 30
            ], [
                "bs_hp" => 60,
                "bs_atk" => 52,
                "bs_def" => 168,
                "bs_sp_atk" => 47,
                "bs_sp_def" => 138,
                "bs_speed" => 30
            ], [
                "bs_hp" => 40,
                "bs_atk" => 29,
                "bs_def" => 45,
                "bs_sp_atk" => 29,
                "bs_sp_def" => 45,
                "bs_speed" => 36
            ], [
                "bs_hp" => 60,
                "bs_atk" => 59,
                "bs_def" => 85,
                "bs_sp_atk" => 79,
                "bs_sp_def" => 105,
                "bs_speed" => 36
            ], [
                "bs_hp" => 70,
                "bs_atk" => 94,
                "bs_def" => 50,
                "bs_sp_atk" => 94,
                "bs_sp_def" => 50,
                "bs_speed" => 66
            ], [
                "bs_hp" => 30,
                "bs_atk" => 30,
                "bs_def" => 42,
                "bs_sp_atk" => 30,
                "bs_sp_def" => 42,
                "bs_speed" => 70
            ], [
                "bs_hp" => 70,
                "bs_atk" => 80,
                "bs_def" => 102,
                "bs_sp_atk" => 80,
                "bs_sp_def" => 102,
                "bs_speed" => 40
            ], [
                "bs_hp" => 60,
                "bs_atk" => 45,
                "bs_def" => 70,
                "bs_sp_atk" => 45,
                "bs_sp_def" => 90,
                "bs_speed" => 95
            ], [
                "bs_hp" => 55,
                "bs_atk" => 65,
                "bs_def" => 35,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 30,
                "bs_speed" => 85
            ], [
                "bs_hp" => 85,
                "bs_atk" => 105,
                "bs_def" => 55,
                "bs_sp_atk" => 85,
                "bs_sp_def" => 50,
                "bs_speed" => 115
            ], [
                "bs_hp" => 45,
                "bs_atk" => 35,
                "bs_def" => 45,
                "bs_sp_atk" => 62,
                "bs_sp_def" => 53,
                "bs_speed" => 35
            ], [
                "bs_hp" => 70,
                "bs_atk" => 60,
                "bs_def" => 70,
                "bs_sp_atk" => 87,
                "bs_sp_def" => 78,
                "bs_speed" => 85
            ], [
                "bs_hp" => 76,
                "bs_atk" => 48,
                "bs_def" => 48,
                "bs_sp_atk" => 57,
                "bs_sp_def" => 62,
                "bs_speed" => 34
            ], [
                "bs_hp" => 111,
                "bs_atk" => 83,
                "bs_def" => 68,
                "bs_sp_atk" => 92,
                "bs_sp_def" => 82,
                "bs_speed" => 39
            ], [
                "bs_hp" => 75,
                "bs_atk" => 100,
                "bs_def" => 66,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 66,
                "bs_speed" => 115
            ], [
                "bs_hp" => 90,
                "bs_atk" => 50,
                "bs_def" => 34,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 44,
                "bs_speed" => 70
            ], [
                "bs_hp" => 150,
                "bs_atk" => 80,
                "bs_def" => 44,
                "bs_sp_atk" => 90,
                "bs_sp_def" => 54,
                "bs_speed" => 80
            ], [
                "bs_hp" => 55,
                "bs_atk" => 66,
                "bs_def" => 44,
                "bs_sp_atk" => 44,
                "bs_sp_def" => 56,
                "bs_speed" => 85
            ], [
                "bs_hp" => 65,
                "bs_atk" => 76,
                "bs_def" => 84,
                "bs_sp_atk" => 54,
                "bs_sp_def" => 96,
                "bs_speed" => 105
            ], [
                "bs_hp" => 60,
                "bs_atk" => 60,
                "bs_def" => 60,
                "bs_sp_atk" => 105,
                "bs_sp_def" => 105,
                "bs_speed" => 105
            ], [
                "bs_hp" => 100,
                "bs_atk" => 125,
                "bs_def" => 52,
                "bs_sp_atk" => 105,
                "bs_sp_def" => 52,
                "bs_speed" => 71
            ], [
                "bs_hp" => 49,
                "bs_atk" => 55,
                "bs_def" => 42,
                "bs_sp_atk" => 42,
                "bs_sp_def" => 37,
                "bs_speed" => 85
            ], [
                "bs_hp" => 71,
                "bs_atk" => 82,
                "bs_def" => 64,
                "bs_sp_atk" => 64,
                "bs_sp_def" => 59,
                "bs_speed" => 112
            ], [
                "bs_hp" => 45,
                "bs_atk" => 30,
                "bs_def" => 50,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 50,
                "bs_speed" => 45
            ], [
                "bs_hp" => 63,
                "bs_atk" => 63,
                "bs_def" => 47,
                "bs_sp_atk" => 41,
                "bs_sp_def" => 41,
                "bs_speed" => 74
            ], [
                "bs_hp" => 103,
                "bs_atk" => 93,
                "bs_def" => 67,
                "bs_sp_atk" => 71,
                "bs_sp_def" => 61,
                "bs_speed" => 84
            ], [
                "bs_hp" => 57,
                "bs_atk" => 24,
                "bs_def" => 86,
                "bs_sp_atk" => 24,
                "bs_sp_def" => 86,
                "bs_speed" => 23
            ], [
                "bs_hp" => 67,
                "bs_atk" => 89,
                "bs_def" => 116,
                "bs_sp_atk" => 79,
                "bs_sp_def" => 116,
                "bs_speed" => 33
            ], [
                "bs_hp" => 50,
                "bs_atk" => 80,
                "bs_def" => 95,
                "bs_sp_atk" => 10,
                "bs_sp_def" => 45,
                "bs_speed" => 10
            ], [
                "bs_hp" => 20,
                "bs_atk" => 25,
                "bs_def" => 45,
                "bs_sp_atk" => 70,
                "bs_sp_def" => 90,
                "bs_speed" => 60
            ], [
                "bs_hp" => 100,
                "bs_atk" => 5,
                "bs_def" => 5,
                "bs_sp_atk" => 15,
                "bs_sp_def" => 65,
                "bs_speed" => 30
            ], [
                "bs_hp" => 76,
                "bs_atk" => 65,
                "bs_def" => 45,
                "bs_sp_atk" => 92,
                "bs_sp_def" => 42,
                "bs_speed" => 91
            ], [
                "bs_hp" => 50,
                "bs_atk" => 92,
                "bs_def" => 108,
                "bs_sp_atk" => 92,
                "bs_sp_def" => 108,
                "bs_speed" => 35
            ], [
                "bs_hp" => 58,
                "bs_atk" => 70,
                "bs_def" => 45,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 45,
                "bs_speed" => 42
            ], [
                "bs_hp" => 68,
                "bs_atk" => 90,
                "bs_def" => 65,
                "bs_sp_atk" => 50,
                "bs_sp_def" => 55,
                "bs_speed" => 82
            ], [
                "bs_hp" => 108,
                "bs_atk" => 130,
                "bs_def" => 95,
                "bs_sp_atk" => 80,
                "bs_sp_def" => 85,
                "bs_speed" => 102
            ], [
                "bs_hp" => 135,
                "bs_atk" => 85,
                "bs_def" => 40,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 85,
                "bs_speed" => 5
            ], [
                "bs_hp" => 40,
                "bs_atk" => 70,
                "bs_def" => 40,
                "bs_sp_atk" => 35,
                "bs_sp_def" => 40,
                "bs_speed" => 60
            ], [
                "bs_hp" => 70,
                "bs_atk" => 110,
                "bs_def" => 70,
                "bs_sp_atk" => 115,
                "bs_sp_def" => 70,
                "bs_speed" => 90
            ], [
                "bs_hp" => 68,
                "bs_atk" => 72,
                "bs_def" => 78,
                "bs_sp_atk" => 38,
                "bs_sp_def" => 42,
                "bs_speed" => 32
            ], [
                "bs_hp" => 108,
                "bs_atk" => 112,
                "bs_def" => 118,
                "bs_sp_atk" => 68,
                "bs_sp_def" => 72,
                "bs_speed" => 47
            ], [
                "bs_hp" => 40,
                "bs_atk" => 50,
                "bs_def" => 90,
                "bs_sp_atk" => 30,
                "bs_sp_def" => 55,
                "bs_speed" => 65
            ], [
                "bs_hp" => 70,
                "bs_atk" => 90,
                "bs_def" => 110,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 75,
                "bs_speed" => 95
            ], [
                "bs_hp" => 48,
                "bs_atk" => 61,
                "bs_def" => 40,
                "bs_sp_atk" => 61,
                "bs_sp_def" => 40,
                "bs_speed" => 50
            ], [
                "bs_hp" => 83,
                "bs_atk" => 106,
                "bs_def" => 65,
                "bs_sp_atk" => 86,
                "bs_sp_def" => 65,
                "bs_speed" => 85
            ], [
                "bs_hp" => 74,
                "bs_atk" => 100,
                "bs_def" => 72,
                "bs_sp_atk" => 90,
                "bs_sp_def" => 72,
                "bs_speed" => 46
            ], [
                "bs_hp" => 49,
                "bs_atk" => 49,
                "bs_def" => 56,
                "bs_sp_atk" => 49,
                "bs_sp_def" => 61,
                "bs_speed" => 66
            ], [
                "bs_hp" => 69,
                "bs_atk" => 69,
                "bs_def" => 76,
                "bs_sp_atk" => 69,
                "bs_sp_def" => 86,
                "bs_speed" => 91
            ], [
                "bs_hp" => 45,
                "bs_atk" => 20,
                "bs_def" => 50,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 120,
                "bs_speed" => 50
            ], [
                "bs_hp" => 60,
                "bs_atk" => 62,
                "bs_def" => 50,
                "bs_sp_atk" => 62,
                "bs_sp_def" => 60,
                "bs_speed" => 40
            ], [
                "bs_hp" => 90,
                "bs_atk" => 92,
                "bs_def" => 75,
                "bs_sp_atk" => 92,
                "bs_sp_def" => 85,
                "bs_speed" => 60
            ], [
                "bs_hp" => 70,
                "bs_atk" => 120,
                "bs_def" => 65,
                "bs_sp_atk" => 45,
                "bs_sp_def" => 85,
                "bs_speed" => 125
            ], [
                "bs_hp" => 70,
                "bs_atk" => 70,
                "bs_def" => 115,
                "bs_sp_atk" => 130,
                "bs_sp_def" => 90,
                "bs_speed" => 60
            ], [
                "bs_hp" => 110,
                "bs_atk" => 85,
                "bs_def" => 95,
                "bs_sp_atk" => 80,
                "bs_sp_def" => 95,
                "bs_speed" => 50
            ], [
                "bs_hp" => 115,
                "bs_atk" => 140,
                "bs_def" => 130,
                "bs_sp_atk" => 55,
                "bs_sp_def" => 55,
                "bs_speed" => 40
            ], [
                "bs_hp" => 100,
                "bs_atk" => 100,
                "bs_def" => 125,
                "bs_sp_atk" => 110,
                "bs_sp_def" => 50,
                "bs_speed" => 50
            ], [
                "bs_hp" => 75,
                "bs_atk" => 123,
                "bs_def" => 67,
                "bs_sp_atk" => 95,
                "bs_sp_def" => 85,
                "bs_speed" => 95
            ], [
                "bs_hp" => 75,
                "bs_atk" => 95,
                "bs_def" => 67,
                "bs_sp_atk" => 125,
                "bs_sp_def" => 95,
                "bs_speed" => 83
            ], [
                "bs_hp" => 85,
                "bs_atk" => 50,
                "bs_def" => 95,
                "bs_sp_atk" => 120,
                "bs_sp_def" => 115,
                "bs_speed" => 80
            ], [
                "bs_hp" => 86,
                "bs_atk" => 76,
                "bs_def" => 86,
                "bs_sp_atk" => 116,
                "bs_sp_def" => 56,
                "bs_speed" => 95
            ], [
                "bs_hp" => 65,
                "bs_atk" => 110,
                "bs_def" => 130,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 65,
                "bs_speed" => 95
            ], [
                "bs_hp" => 65,
                "bs_atk" => 60,
                "bs_def" => 110,
                "bs_sp_atk" => 130,
                "bs_sp_def" => 95,
                "bs_speed" => 65
            ], [
                "bs_hp" => 75,
                "bs_atk" => 95,
                "bs_def" => 125,
                "bs_sp_atk" => 45,
                "bs_sp_def" => 75,
                "bs_speed" => 95
            ], [
                "bs_hp" => 110,
                "bs_atk" => 130,
                "bs_def" => 80,
                "bs_sp_atk" => 70,
                "bs_sp_def" => 60,
                "bs_speed" => 80
            ], [
                "bs_hp" => 85,
                "bs_atk" => 80,
                "bs_def" => 70,
                "bs_sp_atk" => 135,
                "bs_sp_def" => 75,
                "bs_speed" => 90
            ], [
                "bs_hp" => 68,
                "bs_atk" => 125,
                "bs_def" => 65,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 115,
                "bs_speed" => 80
            ], [
                "bs_hp" => 60,
                "bs_atk" => 55,
                "bs_def" => 145,
                "bs_sp_atk" => 75,
                "bs_sp_def" => 150,
                "bs_speed" => 40
            ], [
                "bs_hp" => 45,
                "bs_atk" => 100,
                "bs_def" => 135,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 135,
                "bs_speed" => 45
            ], [
                "bs_hp" => 70,
                "bs_atk" => 80,
                "bs_def" => 70,
                "bs_sp_atk" => 80,
                "bs_sp_def" => 70,
                "bs_speed" => 110
            ], [
                "bs_hp" => 50,
                "bs_atk" => 50,
                "bs_def" => 77,
                "bs_sp_atk" => 95,
                "bs_sp_def" => 77,
                "bs_speed" => 91
            ], [
                "bs_hp" => 75,
                "bs_atk" => 75,
                "bs_def" => 130,
                "bs_sp_atk" => 75,
                "bs_sp_def" => 130,
                "bs_speed" => 95
            ], [
                "bs_hp" => 80,
                "bs_atk" => 105,
                "bs_def" => 105,
                "bs_sp_atk" => 105,
                "bs_sp_def" => 105,
                "bs_speed" => 80
            ], [
                "bs_hp" => 75,
                "bs_atk" => 125,
                "bs_def" => 70,
                "bs_sp_atk" => 125,
                "bs_sp_def" => 70,
                "bs_speed" => 115
            ], [
                "bs_hp" => 100,
                "bs_atk" => 120,
                "bs_def" => 120,
                "bs_sp_atk" => 150,
                "bs_sp_def" => 100,
                "bs_speed" => 90
            ], [
                "bs_hp" => 90,
                "bs_atk" => 120,
                "bs_def" => 100,
                "bs_sp_atk" => 150,
                "bs_sp_def" => 120,
                "bs_speed" => 100
            ], [
                "bs_hp" => 91,
                "bs_atk" => 90,
                "bs_def" => 106,
                "bs_sp_atk" => 130,
                "bs_sp_def" => 106,
                "bs_speed" => 77
            ], [
                "bs_hp" => 110,
                "bs_atk" => 160,
                "bs_def" => 110,
                "bs_sp_atk" => 80,
                "bs_sp_def" => 110,
                "bs_speed" => 100
            ], [
                "bs_hp" => 150,
                "bs_atk" => 100,
                "bs_def" => 120,
                "bs_sp_atk" => 100,
                "bs_sp_def" => 120,
                "bs_speed" => 90
            ], [
                "bs_hp" => 120,
                "bs_atk" => 70,
                "bs_def" => 120,
                "bs_sp_atk" => 75,
                "bs_sp_def" => 130,
                "bs_speed" => 85
            ], [
                "bs_hp" => 80,
                "bs_atk" => 80,
                "bs_def" => 80,
                "bs_sp_atk" => 80,
                "bs_sp_def" => 80,
                "bs_speed" => 80
            ], [
                "bs_hp" => 100,
                "bs_atk" => 100,
                "bs_def" => 100,
                "bs_sp_atk" => 100,
                "bs_sp_def" => 100,
                "bs_speed" => 100
            ], [
                "bs_hp" => 70,
                "bs_atk" => 90,
                "bs_def" => 90,
                "bs_sp_atk" => 135,
                "bs_sp_def" => 90,
                "bs_speed" => 125
            ], [
                "bs_hp" => 100,
                "bs_atk" => 100,
                "bs_def" => 100,
                "bs_sp_atk" => 100,
                "bs_sp_def" => 100,
                "bs_speed" => 100
            ], [
                "bs_hp" => 120,
                "bs_atk" => 120,
                "bs_def" => 120,
                "bs_sp_atk" => 120,
                "bs_sp_def" => 120,
                "bs_speed" => 120
            ], [
                "bs_hp" => 100,
                "bs_atk" => 100,
                "bs_def" => 100,
                "bs_sp_atk" => 100,
                "bs_sp_def" => 100,
                "bs_speed" => 100
            ], [
                "bs_hp" => 45,
                "bs_atk" => 45,
                "bs_def" => 55,
                "bs_sp_atk" => 45,
                "bs_sp_def" => 55,
                "bs_speed" => 63
            ], [
                "bs_hp" => 60,
                "bs_atk" => 60,
                "bs_def" => 75,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 75,
                "bs_speed" => 83
            ], [
                "bs_hp" => 75,
                "bs_atk" => 75,
                "bs_def" => 95,
                "bs_sp_atk" => 75,
                "bs_sp_def" => 95,
                "bs_speed" => 113
            ], [
                "bs_hp" => 65,
                "bs_atk" => 63,
                "bs_def" => 45,
                "bs_sp_atk" => 45,
                "bs_sp_def" => 45,
                "bs_speed" => 45
            ], [
                "bs_hp" => 90,
                "bs_atk" => 93,
                "bs_def" => 55,
                "bs_sp_atk" => 70,
                "bs_sp_def" => 55,
                "bs_speed" => 55
            ], [
                "bs_hp" => 110,
                "bs_atk" => 123,
                "bs_def" => 65,
                "bs_sp_atk" => 100,
                "bs_sp_def" => 65,
                "bs_speed" => 65
            ], [
                "bs_hp" => 55,
                "bs_atk" => 55,
                "bs_def" => 45,
                "bs_sp_atk" => 63,
                "bs_sp_def" => 45,
                "bs_speed" => 45
            ], [
                "bs_hp" => 75,
                "bs_atk" => 75,
                "bs_def" => 60,
                "bs_sp_atk" => 83,
                "bs_sp_def" => 60,
                "bs_speed" => 60
            ], [
                "bs_hp" => 95,
                "bs_atk" => 100,
                "bs_def" => 85,
                "bs_sp_atk" => 108,
                "bs_sp_def" => 70,
                "bs_speed" => 70
            ], [
                "bs_hp" => 45,
                "bs_atk" => 55,
                "bs_def" => 39,
                "bs_sp_atk" => 35,
                "bs_sp_def" => 39,
                "bs_speed" => 42
            ], [
                "bs_hp" => 60,
                "bs_atk" => 85,
                "bs_def" => 69,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 69,
                "bs_speed" => 77
            ], [
                "bs_hp" => 45,
                "bs_atk" => 60,
                "bs_def" => 45,
                "bs_sp_atk" => 25,
                "bs_sp_def" => 45,
                "bs_speed" => 55
            ], [
                "bs_hp" => 65,
                "bs_atk" => 80,
                "bs_def" => 65,
                "bs_sp_atk" => 35,
                "bs_sp_def" => 65,
                "bs_speed" => 60
            ], [
                "bs_hp" => 85,
                "bs_atk" => 110,
                "bs_def" => 90,
                "bs_sp_atk" => 45,
                "bs_sp_def" => 90,
                "bs_speed" => 80
            ], [
                "bs_hp" => 41,
                "bs_atk" => 50,
                "bs_def" => 37,
                "bs_sp_atk" => 50,
                "bs_sp_def" => 37,
                "bs_speed" => 66
            ], [
                "bs_hp" => 64,
                "bs_atk" => 88,
                "bs_def" => 50,
                "bs_sp_atk" => 88,
                "bs_sp_def" => 50,
                "bs_speed" => 106
            ], [
                "bs_hp" => 50,
                "bs_atk" => 53,
                "bs_def" => 48,
                "bs_sp_atk" => 53,
                "bs_sp_def" => 48,
                "bs_speed" => 64
            ], [
                "bs_hp" => 75,
                "bs_atk" => 98,
                "bs_def" => 63,
                "bs_sp_atk" => 98,
                "bs_sp_def" => 63,
                "bs_speed" => 101
            ], [
                "bs_hp" => 50,
                "bs_atk" => 53,
                "bs_def" => 48,
                "bs_sp_atk" => 53,
                "bs_sp_def" => 48,
                "bs_speed" => 64
            ], [
                "bs_hp" => 75,
                "bs_atk" => 98,
                "bs_def" => 63,
                "bs_sp_atk" => 98,
                "bs_sp_def" => 63,
                "bs_speed" => 101
            ], [
                "bs_hp" => 50,
                "bs_atk" => 53,
                "bs_def" => 48,
                "bs_sp_atk" => 53,
                "bs_sp_def" => 48,
                "bs_speed" => 64
            ], [
                "bs_hp" => 75,
                "bs_atk" => 98,
                "bs_def" => 63,
                "bs_sp_atk" => 98,
                "bs_sp_def" => 63,
                "bs_speed" => 101
            ], [
                "bs_hp" => 76,
                "bs_atk" => 25,
                "bs_def" => 45,
                "bs_sp_atk" => 67,
                "bs_sp_def" => 55,
                "bs_speed" => 24
            ], [
                "bs_hp" => 116,
                "bs_atk" => 55,
                "bs_def" => 85,
                "bs_sp_atk" => 107,
                "bs_sp_def" => 95,
                "bs_speed" => 29
            ], [
                "bs_hp" => 50,
                "bs_atk" => 55,
                "bs_def" => 50,
                "bs_sp_atk" => 36,
                "bs_sp_def" => 30,
                "bs_speed" => 43
            ], [
                "bs_hp" => 62,
                "bs_atk" => 77,
                "bs_def" => 62,
                "bs_sp_atk" => 50,
                "bs_sp_def" => 42,
                "bs_speed" => 65
            ], [
                "bs_hp" => 80,
                "bs_atk" => 115,
                "bs_def" => 80,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 55,
                "bs_speed" => 93
            ], [
                "bs_hp" => 45,
                "bs_atk" => 60,
                "bs_def" => 32,
                "bs_sp_atk" => 50,
                "bs_sp_def" => 32,
                "bs_speed" => 76
            ], [
                "bs_hp" => 75,
                "bs_atk" => 100,
                "bs_def" => 63,
                "bs_sp_atk" => 80,
                "bs_sp_def" => 63,
                "bs_speed" => 116
            ], [
                "bs_hp" => 55,
                "bs_atk" => 75,
                "bs_def" => 85,
                "bs_sp_atk" => 25,
                "bs_sp_def" => 25,
                "bs_speed" => 15
            ], [
                "bs_hp" => 70,
                "bs_atk" => 105,
                "bs_def" => 105,
                "bs_sp_atk" => 50,
                "bs_sp_def" => 40,
                "bs_speed" => 20
            ], [
                "bs_hp" => 85,
                "bs_atk" => 135,
                "bs_def" => 130,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 80,
                "bs_speed" => 25
            ], [
                "bs_hp" => 55,
                "bs_atk" => 45,
                "bs_def" => 43,
                "bs_sp_atk" => 55,
                "bs_sp_def" => 43,
                "bs_speed" => 72
            ], [
                "bs_hp" => 67,
                "bs_atk" => 57,
                "bs_def" => 55,
                "bs_sp_atk" => 77,
                "bs_sp_def" => 55,
                "bs_speed" => 114
            ], [
                "bs_hp" => 60,
                "bs_atk" => 85,
                "bs_def" => 40,
                "bs_sp_atk" => 30,
                "bs_sp_def" => 45,
                "bs_speed" => 68
            ], [
                "bs_hp" => 110,
                "bs_atk" => 135,
                "bs_def" => 60,
                "bs_sp_atk" => 50,
                "bs_sp_def" => 65,
                "bs_speed" => 88
            ], [
                "bs_hp" => 103,
                "bs_atk" => 60,
                "bs_def" => 86,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 86,
                "bs_speed" => 50
            ], [
                "bs_hp" => 75,
                "bs_atk" => 80,
                "bs_def" => 55,
                "bs_sp_atk" => 25,
                "bs_sp_def" => 35,
                "bs_speed" => 35
            ], [
                "bs_hp" => 85,
                "bs_atk" => 105,
                "bs_def" => 85,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 50,
                "bs_speed" => 40
            ], [
                "bs_hp" => 105,
                "bs_atk" => 140,
                "bs_def" => 95,
                "bs_sp_atk" => 55,
                "bs_sp_def" => 65,
                "bs_speed" => 45
            ], [
                "bs_hp" => 50,
                "bs_atk" => 50,
                "bs_def" => 40,
                "bs_sp_atk" => 50,
                "bs_sp_def" => 40,
                "bs_speed" => 64
            ], [
                "bs_hp" => 75,
                "bs_atk" => 65,
                "bs_def" => 55,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 55,
                "bs_speed" => 69
            ], [
                "bs_hp" => 105,
                "bs_atk" => 95,
                "bs_def" => 75,
                "bs_sp_atk" => 85,
                "bs_sp_def" => 75,
                "bs_speed" => 74
            ], [
                "bs_hp" => 120,
                "bs_atk" => 100,
                "bs_def" => 85,
                "bs_sp_atk" => 30,
                "bs_sp_def" => 85,
                "bs_speed" => 45
            ], [
                "bs_hp" => 75,
                "bs_atk" => 125,
                "bs_def" => 75,
                "bs_sp_atk" => 30,
                "bs_sp_def" => 75,
                "bs_speed" => 85
            ], [
                "bs_hp" => 45,
                "bs_atk" => 53,
                "bs_def" => 70,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 60,
                "bs_speed" => 42
            ], [
                "bs_hp" => 55,
                "bs_atk" => 63,
                "bs_def" => 90,
                "bs_sp_atk" => 50,
                "bs_sp_def" => 80,
                "bs_speed" => 42
            ], [
                "bs_hp" => 75,
                "bs_atk" => 103,
                "bs_def" => 80,
                "bs_sp_atk" => 70,
                "bs_sp_def" => 80,
                "bs_speed" => 92
            ], [
                "bs_hp" => 30,
                "bs_atk" => 45,
                "bs_def" => 59,
                "bs_sp_atk" => 30,
                "bs_sp_def" => 39,
                "bs_speed" => 57
            ], [
                "bs_hp" => 40,
                "bs_atk" => 55,
                "bs_def" => 99,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 79,
                "bs_speed" => 47
            ], [
                "bs_hp" => 60,
                "bs_atk" => 100,
                "bs_def" => 89,
                "bs_sp_atk" => 55,
                "bs_sp_def" => 69,
                "bs_speed" => 112
            ], [
                "bs_hp" => 40,
                "bs_atk" => 27,
                "bs_def" => 60,
                "bs_sp_atk" => 37,
                "bs_sp_def" => 50,
                "bs_speed" => 66
            ], [
                "bs_hp" => 60,
                "bs_atk" => 67,
                "bs_def" => 85,
                "bs_sp_atk" => 77,
                "bs_sp_def" => 75,
                "bs_speed" => 116
            ], [
                "bs_hp" => 45,
                "bs_atk" => 35,
                "bs_def" => 50,
                "bs_sp_atk" => 70,
                "bs_sp_def" => 50,
                "bs_speed" => 30
            ], [
                "bs_hp" => 70,
                "bs_atk" => 60,
                "bs_def" => 75,
                "bs_sp_atk" => 110,
                "bs_sp_def" => 75,
                "bs_speed" => 90
            ], [
                "bs_hp" => 70,
                "bs_atk" => 92,
                "bs_def" => 65,
                "bs_sp_atk" => 80,
                "bs_sp_def" => 55,
                "bs_speed" => 98
            ], [
                "bs_hp" => 50,
                "bs_atk" => 72,
                "bs_def" => 35,
                "bs_sp_atk" => 35,
                "bs_sp_def" => 35,
                "bs_speed" => 65
            ], [
                "bs_hp" => 60,
                "bs_atk" => 82,
                "bs_def" => 45,
                "bs_sp_atk" => 45,
                "bs_sp_def" => 45,
                "bs_speed" => 74
            ], [
                "bs_hp" => 95,
                "bs_atk" => 117,
                "bs_def" => 80,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 70,
                "bs_speed" => 92
            ], [
                "bs_hp" => 70,
                "bs_atk" => 90,
                "bs_def" => 45,
                "bs_sp_atk" => 15,
                "bs_sp_def" => 45,
                "bs_speed" => 50
            ], [
                "bs_hp" => 105,
                "bs_atk" => 140,
                "bs_def" => 55,
                "bs_sp_atk" => 30,
                "bs_sp_def" => 55,
                "bs_speed" => 95
            ], [
                "bs_hp" => 75,
                "bs_atk" => 86,
                "bs_def" => 67,
                "bs_sp_atk" => 106,
                "bs_sp_def" => 67,
                "bs_speed" => 60
            ], [
                "bs_hp" => 50,
                "bs_atk" => 65,
                "bs_def" => 85,
                "bs_sp_atk" => 35,
                "bs_sp_def" => 35,
                "bs_speed" => 55
            ], [
                "bs_hp" => 70,
                "bs_atk" => 95,
                "bs_def" => 125,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 75,
                "bs_speed" => 45
            ], [
                "bs_hp" => 50,
                "bs_atk" => 75,
                "bs_def" => 70,
                "bs_sp_atk" => 35,
                "bs_sp_def" => 70,
                "bs_speed" => 48
            ], [
                "bs_hp" => 65,
                "bs_atk" => 90,
                "bs_def" => 115,
                "bs_sp_atk" => 45,
                "bs_sp_def" => 115,
                "bs_speed" => 58
            ], [
                "bs_hp" => 72,
                "bs_atk" => 58,
                "bs_def" => 80,
                "bs_sp_atk" => 103,
                "bs_sp_def" => 80,
                "bs_speed" => 97
            ], [
                "bs_hp" => 38,
                "bs_atk" => 30,
                "bs_def" => 85,
                "bs_sp_atk" => 55,
                "bs_sp_def" => 65,
                "bs_speed" => 30
            ], [
                "bs_hp" => 58,
                "bs_atk" => 50,
                "bs_def" => 145,
                "bs_sp_atk" => 95,
                "bs_sp_def" => 105,
                "bs_speed" => 30
            ], [
                "bs_hp" => 54,
                "bs_atk" => 78,
                "bs_def" => 103,
                "bs_sp_atk" => 53,
                "bs_sp_def" => 45,
                "bs_speed" => 22
            ], [
                "bs_hp" => 74,
                "bs_atk" => 108,
                "bs_def" => 133,
                "bs_sp_atk" => 83,
                "bs_sp_def" => 65,
                "bs_speed" => 32
            ], [
                "bs_hp" => 55,
                "bs_atk" => 112,
                "bs_def" => 45,
                "bs_sp_atk" => 74,
                "bs_sp_def" => 45,
                "bs_speed" => 70
            ], [
                "bs_hp" => 75,
                "bs_atk" => 140,
                "bs_def" => 65,
                "bs_sp_atk" => 112,
                "bs_sp_def" => 65,
                "bs_speed" => 110
            ], [
                "bs_hp" => 50,
                "bs_atk" => 50,
                "bs_def" => 62,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 62,
                "bs_speed" => 65
            ], [
                "bs_hp" => 80,
                "bs_atk" => 95,
                "bs_def" => 82,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 82,
                "bs_speed" => 75
            ], [
                "bs_hp" => 40,
                "bs_atk" => 65,
                "bs_def" => 40,
                "bs_sp_atk" => 80,
                "bs_sp_def" => 40,
                "bs_speed" => 65
            ], [
                "bs_hp" => 60,
                "bs_atk" => 105,
                "bs_def" => 60,
                "bs_sp_atk" => 120,
                "bs_sp_def" => 60,
                "bs_speed" => 105
            ], [
                "bs_hp" => 55,
                "bs_atk" => 50,
                "bs_def" => 40,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 40,
                "bs_speed" => 75
            ], [
                "bs_hp" => 75,
                "bs_atk" => 95,
                "bs_def" => 60,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 60,
                "bs_speed" => 115
            ], [
                "bs_hp" => 45,
                "bs_atk" => 30,
                "bs_def" => 50,
                "bs_sp_atk" => 55,
                "bs_sp_def" => 65,
                "bs_speed" => 45
            ], [
                "bs_hp" => 60,
                "bs_atk" => 45,
                "bs_def" => 70,
                "bs_sp_atk" => 75,
                "bs_sp_def" => 85,
                "bs_speed" => 55
            ], [
                "bs_hp" => 70,
                "bs_atk" => 55,
                "bs_def" => 95,
                "bs_sp_atk" => 95,
                "bs_sp_def" => 110,
                "bs_speed" => 65
            ], [
                "bs_hp" => 45,
                "bs_atk" => 30,
                "bs_def" => 40,
                "bs_sp_atk" => 105,
                "bs_sp_def" => 50,
                "bs_speed" => 20
            ], [
                "bs_hp" => 65,
                "bs_atk" => 40,
                "bs_def" => 50,
                "bs_sp_atk" => 125,
                "bs_sp_def" => 60,
                "bs_speed" => 30
            ], [
                "bs_hp" => 110,
                "bs_atk" => 65,
                "bs_def" => 75,
                "bs_sp_atk" => 125,
                "bs_sp_def" => 85,
                "bs_speed" => 30
            ], [
                "bs_hp" => 62,
                "bs_atk" => 44,
                "bs_def" => 50,
                "bs_sp_atk" => 44,
                "bs_sp_def" => 50,
                "bs_speed" => 55
            ], [
                "bs_hp" => 75,
                "bs_atk" => 87,
                "bs_def" => 63,
                "bs_sp_atk" => 87,
                "bs_sp_def" => 63,
                "bs_speed" => 98
            ], [
                "bs_hp" => 36,
                "bs_atk" => 50,
                "bs_def" => 50,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 60,
                "bs_speed" => 44
            ], [
                "bs_hp" => 51,
                "bs_atk" => 65,
                "bs_def" => 65,
                "bs_sp_atk" => 80,
                "bs_sp_def" => 75,
                "bs_speed" => 59
            ], [
                "bs_hp" => 71,
                "bs_atk" => 95,
                "bs_def" => 85,
                "bs_sp_atk" => 110,
                "bs_sp_def" => 95,
                "bs_speed" => 79
            ], [
                "bs_hp" => 60,
                "bs_atk" => 60,
                "bs_def" => 50,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 50,
                "bs_speed" => 75
            ], [
                "bs_hp" => 80,
                "bs_atk" => 100,
                "bs_def" => 70,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 70,
                "bs_speed" => 95
            ], [
                "bs_hp" => 55,
                "bs_atk" => 75,
                "bs_def" => 60,
                "bs_sp_atk" => 75,
                "bs_sp_def" => 60,
                "bs_speed" => 103
            ], [
                "bs_hp" => 50,
                "bs_atk" => 75,
                "bs_def" => 45,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 45,
                "bs_speed" => 60
            ], [
                "bs_hp" => 70,
                "bs_atk" => 135,
                "bs_def" => 105,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 105,
                "bs_speed" => 20
            ], [
                "bs_hp" => 69,
                "bs_atk" => 55,
                "bs_def" => 45,
                "bs_sp_atk" => 55,
                "bs_sp_def" => 55,
                "bs_speed" => 15
            ], [
                "bs_hp" => 114,
                "bs_atk" => 85,
                "bs_def" => 70,
                "bs_sp_atk" => 85,
                "bs_sp_def" => 80,
                "bs_speed" => 30
            ], [
                "bs_hp" => 55,
                "bs_atk" => 40,
                "bs_def" => 50,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 85,
                "bs_speed" => 40
            ], [
                "bs_hp" => 100,
                "bs_atk" => 60,
                "bs_def" => 70,
                "bs_sp_atk" => 85,
                "bs_sp_def" => 105,
                "bs_speed" => 60
            ], [
                "bs_hp" => 165,
                "bs_atk" => 75,
                "bs_def" => 80,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 45,
                "bs_speed" => 65
            ], [
                "bs_hp" => 50,
                "bs_atk" => 47,
                "bs_def" => 50,
                "bs_sp_atk" => 57,
                "bs_sp_def" => 50,
                "bs_speed" => 65
            ], [
                "bs_hp" => 70,
                "bs_atk" => 77,
                "bs_def" => 60,
                "bs_sp_atk" => 97,
                "bs_sp_def" => 60,
                "bs_speed" => 108
            ], [
                "bs_hp" => 44,
                "bs_atk" => 50,
                "bs_def" => 91,
                "bs_sp_atk" => 24,
                "bs_sp_def" => 86,
                "bs_speed" => 10
            ], [
                "bs_hp" => 74,
                "bs_atk" => 94,
                "bs_def" => 131,
                "bs_sp_atk" => 54,
                "bs_sp_def" => 116,
                "bs_speed" => 20
            ], [
                "bs_hp" => 40,
                "bs_atk" => 55,
                "bs_def" => 70,
                "bs_sp_atk" => 45,
                "bs_sp_def" => 60,
                "bs_speed" => 30
            ], [
                "bs_hp" => 60,
                "bs_atk" => 80,
                "bs_def" => 95,
                "bs_sp_atk" => 70,
                "bs_sp_def" => 85,
                "bs_speed" => 50
            ], [
                "bs_hp" => 60,
                "bs_atk" => 100,
                "bs_def" => 115,
                "bs_sp_atk" => 70,
                "bs_sp_def" => 85,
                "bs_speed" => 90
            ], [
                "bs_hp" => 35,
                "bs_atk" => 55,
                "bs_def" => 40,
                "bs_sp_atk" => 45,
                "bs_sp_def" => 40,
                "bs_speed" => 60
            ], [
                "bs_hp" => 65,
                "bs_atk" => 85,
                "bs_def" => 70,
                "bs_sp_atk" => 75,
                "bs_sp_def" => 70,
                "bs_speed" => 40
            ], [
                "bs_hp" => 85,
                "bs_atk" => 115,
                "bs_def" => 80,
                "bs_sp_atk" => 105,
                "bs_sp_def" => 80,
                "bs_speed" => 50
            ], [
                "bs_hp" => 55,
                "bs_atk" => 55,
                "bs_def" => 55,
                "bs_sp_atk" => 85,
                "bs_sp_def" => 55,
                "bs_speed" => 30
            ], [
                "bs_hp" => 75,
                "bs_atk" => 75,
                "bs_def" => 75,
                "bs_sp_atk" => 125,
                "bs_sp_def" => 95,
                "bs_speed" => 40
            ], [
                "bs_hp" => 50,
                "bs_atk" => 30,
                "bs_def" => 55,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 55,
                "bs_speed" => 20
            ], [
                "bs_hp" => 60,
                "bs_atk" => 40,
                "bs_def" => 60,
                "bs_sp_atk" => 95,
                "bs_sp_def" => 60,
                "bs_speed" => 55
            ], [
                "bs_hp" => 60,
                "bs_atk" => 55,
                "bs_def" => 90,
                "bs_sp_atk" => 145,
                "bs_sp_def" => 90,
                "bs_speed" => 80
            ], [
                "bs_hp" => 46,
                "bs_atk" => 87,
                "bs_def" => 60,
                "bs_sp_atk" => 30,
                "bs_sp_def" => 40,
                "bs_speed" => 57
            ], [
                "bs_hp" => 66,
                "bs_atk" => 117,
                "bs_def" => 70,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 50,
                "bs_speed" => 67
            ], [
                "bs_hp" => 76,
                "bs_atk" => 147,
                "bs_def" => 90,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 70,
                "bs_speed" => 97
            ], [
                "bs_hp" => 55,
                "bs_atk" => 70,
                "bs_def" => 40,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 40,
                "bs_speed" => 40
            ], [
                "bs_hp" => 95,
                "bs_atk" => 110,
                "bs_def" => 80,
                "bs_sp_atk" => 70,
                "bs_sp_def" => 80,
                "bs_speed" => 50
            ], [
                "bs_hp" => 70,
                "bs_atk" => 50,
                "bs_def" => 30,
                "bs_sp_atk" => 95,
                "bs_sp_def" => 135,
                "bs_speed" => 105
            ], [
                "bs_hp" => 50,
                "bs_atk" => 40,
                "bs_def" => 85,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 65,
                "bs_speed" => 25
            ], [
                "bs_hp" => 80,
                "bs_atk" => 70,
                "bs_def" => 40,
                "bs_sp_atk" => 100,
                "bs_sp_def" => 60,
                "bs_speed" => 145
            ], [
                "bs_hp" => 109,
                "bs_atk" => 66,
                "bs_def" => 84,
                "bs_sp_atk" => 81,
                "bs_sp_def" => 99,
                "bs_speed" => 32
            ], [
                "bs_hp" => 45,
                "bs_atk" => 85,
                "bs_def" => 50,
                "bs_sp_atk" => 55,
                "bs_sp_def" => 50,
                "bs_speed" => 65
            ], [
                "bs_hp" => 65,
                "bs_atk" => 125,
                "bs_def" => 60,
                "bs_sp_atk" => 95,
                "bs_sp_def" => 60,
                "bs_speed" => 105
            ], [
                "bs_hp" => 77,
                "bs_atk" => 120,
                "bs_def" => 90,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 90,
                "bs_speed" => 48
            ], [
                "bs_hp" => 59,
                "bs_atk" => 74,
                "bs_def" => 50,
                "bs_sp_atk" => 35,
                "bs_sp_def" => 50,
                "bs_speed" => 35
            ], [
                "bs_hp" => 89,
                "bs_atk" => 124,
                "bs_def" => 80,
                "bs_sp_atk" => 55,
                "bs_sp_def" => 80,
                "bs_speed" => 55
            ], [
                "bs_hp" => 45,
                "bs_atk" => 85,
                "bs_def" => 70,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 40,
                "bs_speed" => 60
            ], [
                "bs_hp" => 65,
                "bs_atk" => 125,
                "bs_def" => 100,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 70,
                "bs_speed" => 70
            ], [
                "bs_hp" => 95,
                "bs_atk" => 110,
                "bs_def" => 95,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 95,
                "bs_speed" => 55
            ], [
                "bs_hp" => 70,
                "bs_atk" => 83,
                "bs_def" => 50,
                "bs_sp_atk" => 37,
                "bs_sp_def" => 50,
                "bs_speed" => 60
            ], [
                "bs_hp" => 100,
                "bs_atk" => 123,
                "bs_def" => 75,
                "bs_sp_atk" => 57,
                "bs_sp_def" => 75,
                "bs_speed" => 80
            ], [
                "bs_hp" => 70,
                "bs_atk" => 55,
                "bs_def" => 75,
                "bs_sp_atk" => 45,
                "bs_sp_def" => 65,
                "bs_speed" => 60
            ], [
                "bs_hp" => 110,
                "bs_atk" => 65,
                "bs_def" => 105,
                "bs_sp_atk" => 55,
                "bs_sp_def" => 95,
                "bs_speed" => 80
            ], [
                "bs_hp" => 85,
                "bs_atk" => 97,
                "bs_def" => 66,
                "bs_sp_atk" => 105,
                "bs_sp_def" => 66,
                "bs_speed" => 65
            ], [
                "bs_hp" => 58,
                "bs_atk" => 109,
                "bs_def" => 112,
                "bs_sp_atk" => 48,
                "bs_sp_def" => 48,
                "bs_speed" => 109
            ], [
                "bs_hp" => 52,
                "bs_atk" => 65,
                "bs_def" => 50,
                "bs_sp_atk" => 45,
                "bs_sp_def" => 50,
                "bs_speed" => 38
            ], [
                "bs_hp" => 72,
                "bs_atk" => 85,
                "bs_def" => 70,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 70,
                "bs_speed" => 58
            ], [
                "bs_hp" => 92,
                "bs_atk" => 105,
                "bs_def" => 90,
                "bs_sp_atk" => 125,
                "bs_sp_def" => 90,
                "bs_speed" => 98
            ], [
                "bs_hp" => 55,
                "bs_atk" => 85,
                "bs_def" => 55,
                "bs_sp_atk" => 50,
                "bs_sp_def" => 55,
                "bs_speed" => 60
            ], [
                "bs_hp" => 85,
                "bs_atk" => 60,
                "bs_def" => 65,
                "bs_sp_atk" => 135,
                "bs_sp_def" => 105,
                "bs_speed" => 100
            ], [
                "bs_hp" => 91,
                "bs_atk" => 90,
                "bs_def" => 129,
                "bs_sp_atk" => 90,
                "bs_sp_def" => 72,
                "bs_speed" => 108
            ], [
                "bs_hp" => 91,
                "bs_atk" => 129,
                "bs_def" => 90,
                "bs_sp_atk" => 72,
                "bs_sp_def" => 90,
                "bs_speed" => 108
            ], [
                "bs_hp" => 91,
                "bs_atk" => 90,
                "bs_def" => 72,
                "bs_sp_atk" => 90,
                "bs_sp_def" => 129,
                "bs_speed" => 108
            ], [
                "bs_hp" => 79,
                "bs_atk" => 115,
                "bs_def" => 70,
                "bs_sp_atk" => 125,
                "bs_sp_def" => 80,
                "bs_speed" => 111
            ], [
                "bs_hp" => 79,
                "bs_atk" => 115,
                "bs_def" => 70,
                "bs_sp_atk" => 125,
                "bs_sp_def" => 80,
                "bs_speed" => 111
            ], [
                "bs_hp" => 100,
                "bs_atk" => 120,
                "bs_def" => 100,
                "bs_sp_atk" => 150,
                "bs_sp_def" => 120,
                "bs_speed" => 90
            ], [
                "bs_hp" => 100,
                "bs_atk" => 150,
                "bs_def" => 120,
                "bs_sp_atk" => 120,
                "bs_sp_def" => 100,
                "bs_speed" => 90
            ], [
                "bs_hp" => 89,
                "bs_atk" => 125,
                "bs_def" => 90,
                "bs_sp_atk" => 115,
                "bs_sp_def" => 80,
                "bs_speed" => 101
            ], [
                "bs_hp" => 125,
                "bs_atk" => 130,
                "bs_def" => 90,
                "bs_sp_atk" => 130,
                "bs_sp_def" => 90,
                "bs_speed" => 95
            ], [
                "bs_hp" => 91,
                "bs_atk" => 72,
                "bs_def" => 90,
                "bs_sp_atk" => 129,
                "bs_sp_def" => 90,
                "bs_speed" => 108
            ], [
                "bs_hp" => 100,
                "bs_atk" => 77,
                "bs_def" => 77,
                "bs_sp_atk" => 128,
                "bs_sp_def" => 128,
                "bs_speed" => 90
            ], [
                "bs_hp" => 71,
                "bs_atk" => 120,
                "bs_def" => 95,
                "bs_sp_atk" => 120,
                "bs_sp_def" => 85,
                "bs_speed" => 99
            ], [
                "bs_hp" => 56,
                "bs_atk" => 61,
                "bs_def" => 65,
                "bs_sp_atk" => 48,
                "bs_sp_def" => 45,
                "bs_speed" => 33
            ], [
                "bs_hp" => 61,
                "bs_atk" => 78,
                "bs_def" => 95,
                "bs_sp_atk" => 56,
                "bs_sp_def" => 58,
                "bs_speed" => 57
            ], [
                "bs_hp" => 88,
                "bs_atk" => 107,
                "bs_def" => 122,
                "bs_sp_atk" => 74,
                "bs_sp_def" => 75,
                "bs_speed" => 64
            ], [
                "bs_hp" => 40,
                "bs_atk" => 45,
                "bs_def" => 40,
                "bs_sp_atk" => 62,
                "bs_sp_def" => 60,
                "bs_speed" => 60
            ], [
                "bs_hp" => 59,
                "bs_atk" => 59,
                "bs_def" => 58,
                "bs_sp_atk" => 90,
                "bs_sp_def" => 70,
                "bs_speed" => 73
            ], [
                "bs_hp" => 75,
                "bs_atk" => 69,
                "bs_def" => 72,
                "bs_sp_atk" => 114,
                "bs_sp_def" => 100,
                "bs_speed" => 104
            ], [
                "bs_hp" => 41,
                "bs_atk" => 56,
                "bs_def" => 40,
                "bs_sp_atk" => 62,
                "bs_sp_def" => 44,
                "bs_speed" => 71
            ], [
                "bs_hp" => 54,
                "bs_atk" => 63,
                "bs_def" => 52,
                "bs_sp_atk" => 83,
                "bs_sp_def" => 56,
                "bs_speed" => 97
            ], [
                "bs_hp" => 72,
                "bs_atk" => 95,
                "bs_def" => 67,
                "bs_sp_atk" => 103,
                "bs_sp_def" => 71,
                "bs_speed" => 122
            ], [
                "bs_hp" => 38,
                "bs_atk" => 36,
                "bs_def" => 38,
                "bs_sp_atk" => 32,
                "bs_sp_def" => 36,
                "bs_speed" => 57
            ], [
                "bs_hp" => 85,
                "bs_atk" => 56,
                "bs_def" => 77,
                "bs_sp_atk" => 50,
                "bs_sp_def" => 77,
                "bs_speed" => 78
            ], [
                "bs_hp" => 45,
                "bs_atk" => 50,
                "bs_def" => 43,
                "bs_sp_atk" => 40,
                "bs_sp_def" => 38,
                "bs_speed" => 62
            ], [
                "bs_hp" => 62,
                "bs_atk" => 73,
                "bs_def" => 55,
                "bs_sp_atk" => 56,
                "bs_sp_def" => 52,
                "bs_speed" => 84
            ], [
                "bs_hp" => 78,
                "bs_atk" => 81,
                "bs_def" => 71,
                "bs_sp_atk" => 74,
                "bs_sp_def" => 69,
                "bs_speed" => 126
            ], [
                "bs_hp" => 38,
                "bs_atk" => 35,
                "bs_def" => 40,
                "bs_sp_atk" => 27,
                "bs_sp_def" => 25,
                "bs_speed" => 35
            ], [
                "bs_hp" => 45,
                "bs_atk" => 22,
                "bs_def" => 60,
                "bs_sp_atk" => 27,
                "bs_sp_def" => 30,
                "bs_speed" => 29
            ], [
                "bs_hp" => 80,
                "bs_atk" => 52,
                "bs_def" => 50,
                "bs_sp_atk" => 90,
                "bs_sp_def" => 50,
                "bs_speed" => 89
            ], [
                "bs_hp" => 62,
                "bs_atk" => 50,
                "bs_def" => 58,
                "bs_sp_atk" => 73,
                "bs_sp_def" => 54,
                "bs_speed" => 72
            ], [
                "bs_hp" => 86,
                "bs_atk" => 68,
                "bs_def" => 72,
                "bs_sp_atk" => 109,
                "bs_sp_def" => 66,
                "bs_speed" => 106
            ], [
                "bs_hp" => 44,
                "bs_atk" => 38,
                "bs_def" => 39,
                "bs_sp_atk" => 61,
                "bs_sp_def" => 79,
                "bs_speed" => 42
            ], [
                "bs_hp" => 54,
                "bs_atk" => 45,
                "bs_def" => 47,
                "bs_sp_atk" => 75,
                "bs_sp_def" => 98,
                "bs_speed" => 52
            ], [
                "bs_hp" => 78,
                "bs_atk" => 65,
                "bs_def" => 68,
                "bs_sp_atk" => 112,
                "bs_sp_def" => 154,
                "bs_speed" => 75
            ], [
                "bs_hp" => 66,
                "bs_atk" => 65,
                "bs_def" => 48,
                "bs_sp_atk" => 62,
                "bs_sp_def" => 57,
                "bs_speed" => 52
            ], [
                "bs_hp" => 123,
                "bs_atk" => 100,
                "bs_def" => 62,
                "bs_sp_atk" => 97,
                "bs_sp_def" => 81,
                "bs_speed" => 68
            ], [
                "bs_hp" => 67,
                "bs_atk" => 82,
                "bs_def" => 62,
                "bs_sp_atk" => 46,
                "bs_sp_def" => 48,
                "bs_speed" => 43
            ], [
                "bs_hp" => 95,
                "bs_atk" => 124,
                "bs_def" => 78,
                "bs_sp_atk" => 69,
                "bs_sp_def" => 71,
                "bs_speed" => 58
            ], [
                "bs_hp" => 75,
                "bs_atk" => 80,
                "bs_def" => 60,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 90,
                "bs_speed" => 102
            ], [
                "bs_hp" => 62,
                "bs_atk" => 48,
                "bs_def" => 54,
                "bs_sp_atk" => 63,
                "bs_sp_def" => 60,
                "bs_speed" => 68
            ], [
                "bs_hp" => 74,
                "bs_atk" => 48,
                "bs_def" => 76,
                "bs_sp_atk" => 83,
                "bs_sp_def" => 81,
                "bs_speed" => 104
            ], [
                "bs_hp" => 45,
                "bs_atk" => 80,
                "bs_def" => 100,
                "bs_sp_atk" => 35,
                "bs_sp_def" => 37,
                "bs_speed" => 28
            ], [
                "bs_hp" => 59,
                "bs_atk" => 110,
                "bs_def" => 150,
                "bs_sp_atk" => 45,
                "bs_sp_def" => 49,
                "bs_speed" => 35
            ], [
                "bs_hp" => 60,
                "bs_atk" => 150,
                "bs_def" => 50,
                "bs_sp_atk" => 150,
                "bs_sp_def" => 50,
                "bs_speed" => 60
            ], [
                "bs_hp" => 78,
                "bs_atk" => 52,
                "bs_def" => 60,
                "bs_sp_atk" => 63,
                "bs_sp_def" => 65,
                "bs_speed" => 23
            ], [
                "bs_hp" => 101,
                "bs_atk" => 72,
                "bs_def" => 72,
                "bs_sp_atk" => 99,
                "bs_sp_def" => 89,
                "bs_speed" => 29
            ], [
                "bs_hp" => 62,
                "bs_atk" => 48,
                "bs_def" => 66,
                "bs_sp_atk" => 59,
                "bs_sp_def" => 57,
                "bs_speed" => 49
            ], [
                "bs_hp" => 82,
                "bs_atk" => 80,
                "bs_def" => 86,
                "bs_sp_atk" => 85,
                "bs_sp_def" => 75,
                "bs_speed" => 72
            ], [
                "bs_hp" => 53,
                "bs_atk" => 54,
                "bs_def" => 37,
                "bs_sp_atk" => 46,
                "bs_sp_def" => 45,
                "bs_speed" => 45
            ], [
                "bs_hp" => 86,
                "bs_atk" => 92,
                "bs_def" => 88,
                "bs_sp_atk" => 68,
                "bs_sp_def" => 75,
                "bs_speed" => 73
            ], [
                "bs_hp" => 42,
                "bs_atk" => 52,
                "bs_def" => 67,
                "bs_sp_atk" => 39,
                "bs_sp_def" => 56,
                "bs_speed" => 50
            ], [
                "bs_hp" => 72,
                "bs_atk" => 105,
                "bs_def" => 115,
                "bs_sp_atk" => 54,
                "bs_sp_def" => 86,
                "bs_speed" => 68
            ], [
                "bs_hp" => 50,
                "bs_atk" => 60,
                "bs_def" => 60,
                "bs_sp_atk" => 60,
                "bs_sp_def" => 60,
                "bs_speed" => 30
            ], [
                "bs_hp" => 65,
                "bs_atk" => 75,
                "bs_def" => 90,
                "bs_sp_atk" => 97,
                "bs_sp_def" => 123,
                "bs_speed" => 44
            ], [
                "bs_hp" => 50,
                "bs_atk" => 53,
                "bs_def" => 62,
                "bs_sp_atk" => 58,
                "bs_sp_def" => 63,
                "bs_speed" => 44
            ], [
                "bs_hp" => 71,
                "bs_atk" => 73,
                "bs_def" => 88,
                "bs_sp_atk" => 120,
                "bs_sp_def" => 89,
                "bs_speed" => 59
            ], [
                "bs_hp" => 44,
                "bs_atk" => 38,
                "bs_def" => 33,
                "bs_sp_atk" => 61,
                "bs_sp_def" => 43,
                "bs_speed" => 70
            ], [
                "bs_hp" => 62,
                "bs_atk" => 55,
                "bs_def" => 52,
                "bs_sp_atk" => 109,
                "bs_sp_def" => 94,
                "bs_speed" => 109
            ], [
                "bs_hp" => 58,
                "bs_atk" => 89,
                "bs_def" => 77,
                "bs_sp_atk" => 45,
                "bs_sp_def" => 45,
                "bs_speed" => 48
            ], [
                "bs_hp" => 82,
                "bs_atk" => 121,
                "bs_def" => 119,
                "bs_sp_atk" => 69,
                "bs_sp_def" => 59,
                "bs_speed" => 71
            ], [
                "bs_hp" => 77,
                "bs_atk" => 59,
                "bs_def" => 50,
                "bs_sp_atk" => 67,
                "bs_sp_def" => 63,
                "bs_speed" => 46
            ], [
                "bs_hp" => 123,
                "bs_atk" => 77,
                "bs_def" => 72,
                "bs_sp_atk" => 99,
                "bs_sp_def" => 92,
                "bs_speed" => 58
            ], [
                "bs_hp" => 95,
                "bs_atk" => 65,
                "bs_def" => 65,
                "bs_sp_atk" => 110,
                "bs_sp_def" => 130,
                "bs_speed" => 60
            ], [
                "bs_hp" => 78,
                "bs_atk" => 92,
                "bs_def" => 75,
                "bs_sp_atk" => 74,
                "bs_sp_def" => 63,
                "bs_speed" => 118
            ], [
                "bs_hp" => 67,
                "bs_atk" => 58,
                "bs_def" => 57,
                "bs_sp_atk" => 81,
                "bs_sp_def" => 67,
                "bs_speed" => 101
            ], [
                "bs_hp" => 50,
                "bs_atk" => 50,
                "bs_def" => 150,
                "bs_sp_atk" => 50,
                "bs_sp_def" => 150,
                "bs_speed" => 50
            ], [
                "bs_hp" => 45,
                "bs_atk" => 50,
                "bs_def" => 35,
                "bs_sp_atk" => 55,
                "bs_sp_def" => 75,
                "bs_speed" => 40
            ], [
                "bs_hp" => 68,
                "bs_atk" => 75,
                "bs_def" => 53,
                "bs_sp_atk" => 83,
                "bs_sp_def" => 113,
                "bs_speed" => 60
            ], [
                "bs_hp" => 90,
                "bs_atk" => 100,
                "bs_def" => 70,
                "bs_sp_atk" => 110,
                "bs_sp_def" => 150,
                "bs_speed" => 80
            ], [
                "bs_hp" => 57,
                "bs_atk" => 80,
                "bs_def" => 91,
                "bs_sp_atk" => 80,
                "bs_sp_def" => 87,
                "bs_speed" => 75
            ], [
                "bs_hp" => 43,
                "bs_atk" => 70,
                "bs_def" => 48,
                "bs_sp_atk" => 50,
                "bs_sp_def" => 60,
                "bs_speed" => 38
            ], [
                "bs_hp" => 85,
                "bs_atk" => 110,
                "bs_def" => 76,
                "bs_sp_atk" => 65,
                "bs_sp_def" => 82,
                "bs_speed" => 56
            ], [
                "bs_hp" => 44,
                "bs_atk" => 66,
                "bs_def" => 70,
                "bs_sp_atk" => 44,
                "bs_sp_def" => 55,
                "bs_speed" => 56
            ], [
                "bs_hp" => 55,
                "bs_atk" => 85,
                "bs_def" => 122,
                "bs_sp_atk" => 58,
                "bs_sp_def" => 75,
                "bs_speed" => 99
            ], [
                "bs_hp" => 55,
                "bs_atk" => 69,
                "bs_def" => 85,
                "bs_sp_atk" => 32,
                "bs_sp_def" => 35,
                "bs_speed" => 28
            ], [
                "bs_hp" => 95,
                "bs_atk" => 117,
                "bs_def" => 184,
                "bs_sp_atk" => 44,
                "bs_sp_def" => 46,
                "bs_speed" => 28
            ], [
                "bs_hp" => 40,
                "bs_atk" => 30,
                "bs_def" => 35,
                "bs_sp_atk" => 45,
                "bs_sp_def" => 40,
                "bs_speed" => 55
            ], [
                "bs_hp" => 85,
                "bs_atk" => 70,
                "bs_def" => 80,
                "bs_sp_atk" => 97,
                "bs_sp_def" => 80,
                "bs_speed" => 123
            ], [
                "bs_hp" => 126,
                "bs_atk" => 131,
                "bs_def" => 95,
                "bs_sp_atk" => 131,
                "bs_sp_def" => 98,
                "bs_speed" => 99
            ], [
                "bs_hp" => 126,
                "bs_atk" => 131,
                "bs_def" => 95,
                "bs_sp_atk" => 131,
                "bs_sp_def" => 98,
                "bs_speed" => 99
            ], [
                "bs_hp" => 108,
                "bs_atk" => 100,
                "bs_def" => 121,
                "bs_sp_atk" => 81,
                "bs_sp_def" => 95,
                "bs_speed" => 95
            ], [
                "bs_hp" => 50,
                "bs_atk" => 100,
                "bs_def" => 150,
                "bs_sp_atk" => 100,
                "bs_sp_def" => 150,
                "bs_speed" => 50
            ], [
                "bs_hp" => 80,
                "bs_atk" => 110,
                "bs_def" => 60,
                "bs_sp_atk" => 150,
                "bs_sp_def" => 130,
                "bs_speed" => 70
            ], [
                "bs_hp" => 80,
                "bs_atk" => 110,
                "bs_def" => 120,
                "bs_sp_atk" => 130,
                "bs_sp_def" => 90,
                "bs_speed" => 70
            ]
        ]);
    }
}
