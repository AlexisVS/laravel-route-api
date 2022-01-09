<?php

namespace Database\Seeders;

use App\Models\Pokemon;
use App\Models\Pokemon_image;
use Database\Factories\PokemonImageFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Pokemon_image::factory()
            ->count(721)
            ->sequence(fn ($sequence) => ['image' => sprintf("%03d", $sequence->index + 1) . '.png'])
            ->create();

        $this->call([
            TypeSeeder::class,
            BaseStatSeeder::class,
            HabitatSeeder::class,
            PokemonSeeder::class,
            PokemonTypeSeeder::class,
        ]);
    }
}
