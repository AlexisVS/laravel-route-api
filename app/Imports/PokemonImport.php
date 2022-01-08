<?php

namespace App\Imports;

use App\Models\Pokemon;
use Maatwebsite\Excel\Concerns\ToModel;

class PokemonImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Pokemon([
            'pok_id' => $row[0],
            'pok_name' => $row[1],
            'pok_height' => $row[2],
            'pok_weight' => $row[3],
            'pok_base_experience' => $row[4],
        ]);
    }
}
