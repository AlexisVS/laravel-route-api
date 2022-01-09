<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    public function types () {
        return $this->belongsToMany(Type::class, 'pokemon_type');
    }

    public function base_stats () {
        return $this->belongsTo(BaseStat::class, 'base_stats_id');
    }
    public function habitats () {
        return $this->belongsTo(Habitat::class, 'habitat_id');
    }

    public function images () {
        return $this->belongsTo(Pokemon_image::class, 'pokemon_image_id');
    }
}
