<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaseStat extends Model
{
    use HasFactory;
    protected $hidden = ['created_at', 'updated_at'];
    public function pokemon()
    {
        return $this->hasOne(Pokemon::class);
    }
}
