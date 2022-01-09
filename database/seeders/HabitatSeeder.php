<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HabitatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('habitats')->insert([

            [
                "habitat_name" => "cave",
                "habitat_description" => "This is your underground habitat, typically natural, but also including man-made mines and tunnels through the mountains."
            ],
            [
                "habitat_name" => "forest",
                "habitat_description" => "Forests are typically you more traditional woodlands where there are large gatherings of standing trees, mostly deciduous and\/or evergreens."
            ],
            [
                "habitat_name" => "grassland",
                "habitat_description" => "Typically, grasslands are rolling plains, but grasslands can be as simple as what their name entitles: anyplace where the main vegetation isn't standing trees, ranging from simple common grass to farmlands of wheat\/cotton\/corn or otherwise."
            ],
            [
                "habitat_name" => "mountain",
                "habitat_description" => "Mountains are elevated environments that range in variance of both height and features. Some are tall and rocky ranges. Some are snowy forested peaks."
            ],
            [
                "habitat_name" => "rare",
                "habitat_description" => "Non-Space is a unique habitat. Its not truly defined. The easiest way to describe it is to state that \"Non-Space\" doesn't exist in our reality, but more as another alternative dimension of nonexistence. "
            ],
            [
                "habitat_name" => "rough-terrain",
                "habitat_description" => "Wastelands. Badlands. Dry air, little water to drink, and sand as far as the eye can see. Cold or warm deserts exist, but one thing they have in common: They are extreme environments where only the most adaptable to the harsh conditions survive."
            ],
            [
                "habitat_name" => "sea",
                "habitat_description" => "Saltwater oceans and seas are the Ocean habitat, ranging from its surface to its darkest depths far below sea-level where even light doesn't reach into the abyss of darkness. Commonplace, Ocean habitats go hand-in-hand with the Beach habitat when near land, but otherwise, this habitat doesn't include land: its all saltwater!"
            ],
            [
                "habitat_name" => "urban",
                "habitat_description" => "The last habitat, Urban, is the man-made habitat of urbanization and industrialization. Towns, Cities, Settlements. Places where people gather in large populations where the wilderness has been claimed by humans and made less natural. It ranges from the streets and parks, to alleys and even sewer systems that make a city what it is. "
            ],
            [
                "habitat_name" => "waters-edge",
                "habitat_description" => "Lakes, rivers, streams, and ponds. If it is water and isn't saltwater oceans\/seas, its going to be freshwater. Freshwater is mostly commonplace anywhere inland that water can be found naturally. Just make sure the water the pokemon can be found in is deep enough for it! Freshwater can range from the surface of the water, its shoreline, and to underwater environments."
            ],
            [
                "habitat_name" => "Unknown",
                "habitat_description" => "Unknown"
            ]

        ]);
    }
}
