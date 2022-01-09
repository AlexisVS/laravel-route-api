<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $hidden = ['created_at', 'updated_at', 'pivot'];


    public function pokemon()
    {
        return $this->belongsToMany(Pokemon::class, 'pokemon_type');
    }
}
