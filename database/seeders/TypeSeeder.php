<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            [
                "type_name" => "normal"
            ],
            [
                "type_name" => "fighting"
            ],
            [
                "type_name" => "flying"
            ],
            [
                "type_name" => "poison"
            ],
            [
                "type_name" => "ground"
            ],
            [
                "type_name" => "rock"
            ],
            [
                "type_name" => "bug"
            ],
            [
                "type_name" => "ghost"
            ],
            [
                "type_name" => "steel"
            ],
            [
                "type_name" => "fire"
            ],
            [
                "type_name" => "water"
            ],
            [
                "type_name" => "grass"
            ],
            [
                "type_name" => "electric"
            ],
            [
                "type_name" => "psychic"
            ],
            [
                "type_name" => "ice"
            ],
            [
                "type_name" => "dragon"
            ],
            [
                "type_name" => "dark"
            ],
            [
                "type_name" => "fairy"
            ],
            [
                "type_name" => "unknown"
            ],
            [
                "type_name" => "shadow"
            ]
        ]);
    }
}
